<?php

namespace ZesharCRM\Bundle\CoreBundle\Listener;

use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Templating\EngineInterface;
use ZesharCRM\Bundle\CoreBundle\Event\UserEvent;

class RegistrationSubscriber implements EventSubscriberInterface
{

    /**
     * @var \Swift_Mailer
     */
    protected $mailer;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var EngineInterface
     */
    protected $templating;

    /**
     * @var RouterInterface
     */
    protected $router;

    /**
     * @var string
     */
    protected $fromEmail;

    /**
     * RegistrationSubscriber constructor.
     */
    public function __construct(LoggerInterface $logger, \Swift_Mailer $mailer,
        EngineInterface $templating, RouterInterface $router, $fromEmail)
    {
        $this->logger = $logger;
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->router = $router;
        $this->fromEmail = $fromEmail;
    }

    public static function getSubscribedEvents()
    {
       return array (
           UserEvent::ACCOUNT_CREATED => 'onAccountCreated'
       );
    }

    public function onAccountCreated(UserEvent $event)
    {
        $user = $event->getUser();
        $data = $event->getData();
        $password = $data['password'];
        $this->logger->info('Sending confirmation email...');
        try {
            $url = $this->router->generate('fos_user_security_login', array(), UrlGeneratorInterface::ABSOLUTE_URL);
            $body = $this->templating->render('ZesharCRMCoreBundle:Email:registration.html.twig',
                array(
                    'username' => $user->getUsername(),
                    'password' => $password,
                    'url' => $url
                )
            );
            $subject = $this->templating->render('ZesharCRMCoreBundle:Email:subject.html.twig',
                array(
                    'username' => $user->getUsername()
                )
            );
            $this->sendEmailMessage($subject, $body, $this->fromEmail, $user->getEmail());
        } catch  (\Exception $e) {
            $this->logger->error('Error sending confirmation email', array($user->getEmail(), $e->getMessage()));
        }
    }

    /**
     * @param string $renderedTemplate
     * @param string $toEmail
     */
    protected function sendEmailMessage($subject, $body, $fromEmail, $toEmail)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom($fromEmail)
            ->setTo($toEmail)
            ->setBody($body);

        $this->mailer->send($message);
    }
}
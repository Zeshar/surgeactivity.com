<?php

namespace ZesharCRM\Bundle\CoreBundle\Event;

use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\EventDispatcher\Event;

class UserEvent extends Event
{
    const ACCOUNT_CREATED = 'account.created';

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @var array
     */
    protected $data;

    /**
     * UserEvent constructor.
     *
     * @param $user
     * @param $data
     */
    public function __construct(UserInterface $user, $data = [])
    {
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
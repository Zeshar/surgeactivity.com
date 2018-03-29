<?php

namespace ZesharCRM\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function profileInfoAction()
    {
        if ( ($user = $this->get('security.context')->getToken()->getUser()) && (is_object($user)) ) {
			$user = $this->container->get('security.context')->getToken()->getUser();
			$billingInfoId=0;
			$billingInfo = $user->getBillingInfo();
			if ($billingInfo && $billingInfo[0]) {
                $billingInfoId = $billingInfo[0]->getId();
			}
		
            return $this->render('ZesharCRMCoreBundle:Default:profile-info.html.twig', array('username' => $user->getUsername(), 'billingInfoId'=>$billingInfoId));
        } else {
            throw $this->createNotFoundException('No user is logged in');
        }
    }
    
}

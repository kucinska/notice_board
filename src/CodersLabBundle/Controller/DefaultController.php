<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="show")
     */
    public function indexAction()
    {
        return $this->render('CodersLabBundle:Default:index.html.twig');
    }
	
	/**
     * @Route("/register", name="register")
     */
	public function registerAction(){
		return $this->render('CodersLabBundle:Form:UserType.php');
	}
	/**
     * @Route("/login", name="login")
     */
	public function loginAction(){
		return 0;
	}
	/**
	* @Route("/remindPassword", name="remindPassword")
	*/
	public function remindPasswordAction(){
		return 0;
	}
}

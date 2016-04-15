<?php
namespace Platform\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller{
	function indexAction{
		return $this->render('UserBundle:Public:index.html.twig');
	}
}
?>

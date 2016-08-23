<?php

namespace Bo\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("accueil/index")
     */
    public function indexAction()
    {
        return $this->render('BoAdminBundle:Default:index.html.twig');
    }
    /**
     * @Route("/aide",name="admin.aide")
     */
    public function aideAction()
    {
        return $this->render('BoAdminBundle:Default:aide.html.twig');
    }

    public function calculAction()
    {
        $nbrArticles = rand(11,99999);
        return $this->render('BoAdminBundle:Default:calcul.html.twig',
            [
                'nbr_articles'=>$nbrArticles  ,
            ]);
    }
}

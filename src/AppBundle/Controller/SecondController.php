<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecondController extends Controller
{

    /*
     * A
     */
    /**
    * @Route("/glaszcz-chama.html", name="glaszcz-chama")
    */
    public function glaszczChamaAction()
    {
        return $this->render('default/glaszcz-chama.html.twig');
    }

    /*
     * B
     */
    /**
    * @Route("/apetyt-rosnie.html", name="apetyt-rosnie")
    */
    public function apetytRosnieAction()
    {
        return $this->render('default/apetyt-rosnie.html.twig');
    }
    /*
     * C
     */
    /**
    * @Route("/czyj_nasiew.html", name="czyj_nasiew")
    */
    public function czyj_nasiewAction()
    {
        return $this->render('default/czyj_nasiew.html.twig');
    }
    /*
     * D
     */
    /**
     * @Route("/nie-kasa-sie-reki.html", name="nie-kasa-sie-reki")
     */
    public function nieKasaSieReki()
    {
        return $this->render('default/nie-kasa-sie-reki.html.twig');
    }


    /*
     * E
     */
    
    /**
    * @Route("/bo-pic.html", name="bo-pic")
    */
    public function bopicAction()
    {
        return $this->render('default/bo-pic.html.twig');
    }
    /*
     * F
     */
    /**
     * @Route("/od-sasa-do-lasa.html", name="od-sasa")
     */
    public function bylobyAction()
    {
        return $this->render('default/od-sasa-do-lasa.html.twig');
    }
    /*
     * G
     */

    /*
     * H
     */

    /*
     * I
     */

    /**
     * @Route("/idzie-luty.html", name="idzie-luty")
     */
    public function idzieLuty()
    {
        return $this->render('default/idzie-luty.html.twig');
    }
    
    /*
     * J
     */

    /*
     * K
     */

    /*
     * L
     */

    /**
     * @Route("/lepiej-zartowac.html", name="lepiej-zartowac")
     */
    public function lepiejZartowacAction()
    {
        return $this->render('default/lepiej-zartowac.html.twig');
    }



    /*
     * M
     */

    /*
     * N
     */

    /*
     * O
     */

    /*
     * P
     */

    /*
     * Q
     */

    /*
     * R
     */

    /*
     * S
     */

    /*
     * T
     */

    /*
     * U
     */

    /*
     * V
     */

    /*
     * W
     */

    /*
     * X
     */

    /*
     * Y
     */

    /*
     * Z
     */


}

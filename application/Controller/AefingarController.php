<?php

/**
 * Class SongsController
 * This is a demo Controller class.
 *
 * If you want, you can use multiple Models or Controllers.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Model\Aefingar;

class AefingarController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // load views. within the views we can echo out $songs and $amount_of_songs easily

        require APP . 'view/_templates/header.php';

        $brjost = $this->showChest();
        $back = $this->showBak();
        $faetur = $this->showLegs();
        $shoulders = $this->showShoulders();
        $hendur = $this->showHands();
        $abs = $this->showAbs();
        $profile = new Aefingar();
        if(isset($username)) {
            $info = $profile->checktrainer($username);
        }
        require APP . 'view/aefingar/index.php';

        require APP . 'view/_templates/footer.php';


    }

    public function showChest()
    {
        $gym = new Aefingar();
        $brjostaefingar =  $gym->getAllChest();
        return $brjostaefingar;
    }

    public function showBak()
    {
        $gym = new Aefingar();
        $bak =  $gym->getAllbBack();
        return $bak;
    }

    public function showLegs()
    {
        $gym = new Aefingar();
        $legs =  $gym->getAllLegs();
        return $legs;
    }

    public function showShoulders()
    {
        $gym = new Aefingar();
        $shoulders =  $gym->getAllShoulders();
        return $shoulders;
    }

    public function showHands()
    {
        $gym = new Aefingar();
        $hendur =  $gym->getAllHands();
        return $hendur;
    }

    public function ShowAbs()
    {
        $gym = new Aefingar();
        $abs =  $gym->getallAbs();
        return $abs;
    }




    function innskra()
    {
        ob_start();
        require APP . 'view/_templates/header.php';

        if (isset($_POST['innskra'])) {
            $notandi = new Innskraning();
            $obj = $notandi->logIn($_POST['user'], $_POST['pass']);
            $ret = array($obj);
            print_r($ret);
            if ($ret[0]->username == $_POST['user']) {
                $_SESSION['username'] = $_POST['user'];
                ob_get_clean();
                header('location:'. URL.'profile' );

            } else {
                print "lykilorð";
            }


        }


    }




}

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

use Mini\Model\Postur;
use Mini\Model\Thjalfun;

class PosturController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {


        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/postur/index.php';
        require APP . 'view/_templates/footer.php';


    }

    public function logoutlink(){
        ob_start();
        require APP . 'view/_templates/header.php';
        session_destroy();
        ob_get_clean();
        header("location:". URL );
    }

    public function postMessage()
    {
        $thjalfun = new Thjalfun();
        $ret = $thjalfun->sendMessage($_POST['nafntrainer'],$_POST['username'],$_POST['subject'],$_POST['message']);
        $message =  array();

        if($ret[0] == true)
        {

            $thjalfun = new Thjalfun();
            if(isset($username)) {
                $info = $thjalfun->getUserInfo($_SESSION['username']);
            }
            $trainers = $thjalfun->getTrainers();
            array_push($message, true);
            array_push($message, $_POST['nafntrainer']);
            require APP . 'view/_templates/header.php';
            require APP . 'view/thjalfun/index.php';

            require APP . 'view/_templates/footer.php';
        }
        else
        {
            array_push($message, false);
            array_push($message, $_POST['nafntrainer']);
            require APP . 'view/_templates/header.php';
            $thjalfun = new Thjalfun();
            if(isset($username)) {
                $info = $thjalfun->getUserInfo($_SESSION['username']);
            }
            $trainers = $thjalfun->getTrainers();
            array_push($message, true);
            array_push($message, $_POST['nafntrainer']);
            require APP . 'view/_templates/header.php';
            require APP . 'view/thjalfun/index.php';

            require APP . 'view/_templates/footer.php';
        }

    }


    public function checkMsg()
    {
        $postur = new Postur();
        $postur->checkMessage();
    }





}

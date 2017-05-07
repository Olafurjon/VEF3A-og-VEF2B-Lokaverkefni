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
use Mini\Model\Profile;

class ProfileController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {


        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        $profile = new Profile();
        $info = $profile->getUserInfo($_SESSION['username']);
        if(!isset($_SESSION['username']))
        {
            header('location:' . URL . 'Innskraning');
        }

        require APP . 'view/profile/index.php';

        require APP . 'view/_templates/footer.php';


    }

    public function logoutlink(){
        ob_start();
        require APP . 'view/_templates/header.php';
        session_destroy();
        ob_get_clean();
        header("location:" . URL);
    }






    public function upload()
    {
        if (isset($_POST['upload'])) {
        $profile = new Profile();
        $profile->UploadDP();
        header('location: ' . URL . 'profile/');

        }
    }


    public function breyta()
    {
        // if we have POST data to create a new song entry
        $pass = $_POST["pass"];
        $password =  password_hash($pass, PASSWORD_BCRYPT);
        if (isset($_POST["breyta"])) {
            // Instance new Model (Song)
            $profile = new Profile();
            // do updateSong() from model/model.php
            $profile->breyta($_POST["nafn"], $password, $_POST["user"]);

        }
        // where to go after song has been added
        header('location: ' . URL . 'profile/');
    }


}

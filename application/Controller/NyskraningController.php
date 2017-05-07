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

use Mini\Model\Nyskraning;

class NyskraningController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/nyskraning/index.php';
        require APP . 'view/_templates/footer.php';

    }

    public function nyskra()
    {

        $pass = $_POST["pass"];
        $password =  password_hash($pass, PASSWORD_BCRYPT);

        ob_start();
        require APP . 'view/_templates/header.php';
        if (isset($_POST["nyskra"])) {
            $notandi = new Nyskraning();

                $ret = $notandi->nyskra($_POST["nafn"], $_POST['kyn'], $_POST['email'], $_POST["username"], $password );
                #print_r($ret);
                if ($ret[0] == true) {
                    $username = $_POST['username'];
                    $_SESSION['username'] = $_POST['username'];
                    mkdir($_SERVER['DOCUMENT_ROOT'] . "/img/profile/" . $username . "/");

                    header('location:' . URL . 'profile');

                }

                else{
                    $fail = true;
                    require  APP. 'view/nyskraning/index.php';

                    require APP . 'view/_templates/footer.php';



                }
                return $ret;



        }
        /*header('location:'. URL.'profile' );*/


        // where to go after song has been added

    }

    public function validation()
    {
        $notandi = new Nyskraning();
        $notandi->validateForm();
    }




}


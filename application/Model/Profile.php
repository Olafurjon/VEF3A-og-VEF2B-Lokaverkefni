<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;

class Profile extends Model
{

    public function getUserInfo($username)
    {

        $sql = "SELECT * FROM userbase WHERE username ='".$username."'";

        $query = $this->db->prepare($sql);
        $query->execute();


        return $query->fetchAll();
    }

    public function validateForm()
    {
        if(!empty($_POST["username"])) {
        $sql = "SELECT count(*) as tala FROM userbase where username ='". $_POST["username"]. "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $object = $query->fetch();
        $row = array($object);
        $user_count = $row[0]->tala;
        if($user_count>0) echo "<span class='status-not-available'> Notendanafn er ekki laust.</span>";
        else echo "<span class='status-available'> Notendanafn er Laust.</span>";
    }
    }

    public function logout()
    {
        ob_start();
        require APP . 'view/_templates/header.php';
        session_destroy();
        ob_get_clean();
    }

    public function checkforpic()
    {
        ob_start();
        require APP . 'view/_templates/header.php';
        $sql = "SELECT profilepic  FROM userbase where username ='". $_SESSION["username"]. "'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $object = $query->fetch();
        $row = array($object);
        $userpic = $row[0]->profilepic;
        print $userpic;
        ob_get_clean();
    }





    public function breyta($name,$pass,$username)
    {
        $sql = "UPDATE userbase SET name = :name, pass = :pass WHERE username = :username";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':pass' => $pass,':username' => $username);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    public function UploadDP()
    {

            ob_start();
            require APP . 'view/_templates/header.php';
            $username = $_SESSION['username'];
            require APP . 'Model/Upload.php';


            $destination = $_SERVER['DOCUMENT_ROOT'] . "/img/profile/".$username."/";;
            $max = 5000000;
            try {
                $loader = new Upload($destination);
                $loader->allowAllTypes(false);
                $loader->setMaxSize($max);
                $loader->upload();
                $result = $loader->getMessages();

                $path = URL . "/img/profile/".$username."/profile.jpg";

                $sql = "update userbase set profilepic = :path WHERE username = :username";
                $query = $this->db->prepare($sql);
                $parameters = array(':path' => $path, ':username' => $username);

                $query->execute($parameters);
                return $query;



            } catch (Exception $e) {
                echo $e->getMessage();

            }

            if (isset($result)){
                echo '<ul>';
                foreach ($result as $message) {
                    echo "<li>$message</li>";
                }
                echo "</ul>";
            }
            ob_get_clean();






    }

}




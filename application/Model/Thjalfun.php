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
use MongoDB\Driver\Query;

class thjalfun extends Model
{

    public function getUserInfo($username)
    {

        $sql = "SELECT * FROM userbase WHERE username ='".$username."'";

        $query = $this->db->prepare($sql);
        $query->execute();


        return $query->fetchAll();
    }

    public function getTrainers()
    {

        $sql = "SELECT * FROM userbase WHERE Status ='Trainer' OR Status =  'Admin'";

        $query = $this->db->prepare($sql);
        $query->execute();


        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function getTrainees($trainer_id)
    {

        $sql = "SELECT * FROM userbase WHERE trainer_id ='".$trainer_id."'";

        $query = $this->db->prepare($sql);
        $query->execute();


        return $query->fetchAll();
    }


    public function sendMessage($to, $from, $subject, $message)
    {
        $sql = "SELECT userid FROM userbase WHERE name = '".$to."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $to = $query->fetchall();
        $to= $to[0]->userid;

        $sql = "SELECT userid FROM userbase WHERE username = '".$from."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $from = $query->fetchall();
        $from= $from[0]->userid;


        $sql = "INSERT INTO messagecentre (to_id,from_id,subject,message) VALUES (:to_id, :from_id, :subject, :message)";
        $query = $this->db->prepare($sql);
        $parameters = array(':to_id' => $to, ':from_id'=> $from, ':subject' => $subject, ':message' => $message);
        $return = array();

        if ($query->execute($parameters)) {
            $success = true;
            array_push($return,$success);
        } else {
            $success = false;
            array_push($return,$success);
        }
        $errorinfo = $this->db->errorInfo();
        array_push($return,$errorinfo);


        return $return;


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

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */



}




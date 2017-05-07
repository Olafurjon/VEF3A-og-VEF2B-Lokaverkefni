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

class Postur extends Model
{
    /**
     * Get all songs from database
     */
    public function getUserInfo($username)
    {

        $sql = "SELECT * FROM userbase WHERE username ='".$username."'";

        $query = $this->db->prepare($sql);
        $query->execute();


        return $query->fetchAll();
    }

    public function checkMessage()
    {
        $sql = "SELECT userid FROM userbase WHERE username = '".$_POST["username"]."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $userid = $query->fetchAll();
        $userid= $userid[0]->userid;

        $sql = "SELECT count(*) as tala FROM messagecentre where to_id ='".$userid . "' AND lesid = 0";
        $query = $this->db->prepare($sql);
        $query->execute();
        $object = $query->fetch();
        $row = array($object);
        $msgcount = $row[0]->tala;
        if($msgcount>0) echo "<span class='undreadmsg'>". $msgcount."</span>";
        else echo "<span class='undreadmsg'>. $msgcount. </span>";

    }

    /**
     * @param $to
     * @param $from
     * @param $subject
     * @param $message
     * @return array
     */
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


}




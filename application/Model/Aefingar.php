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

class Aefingar extends Model
{
    /**
     * Get all songs from database
     */
    public function getAllChest()
    {

        $sql = "SELECT * FROM brjostaefingar";
        $query = $this->db->prepare($sql);
        $query->execute();


        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function getAllbBack()
    {

        $sql = "SELECT * FROM bakaefingar";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllLegs()
    {

        $sql = "SELECT * FROM fotaaefingar";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllShoulders()
    {

        $sql = "SELECT * FROM axlaaefingar";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllHands()
    {

        $sql = "SELECT * FROM handaaefingar	";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getallAbs()
    {

        $sql = "SELECT * FROM magaaefingar	";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }







}




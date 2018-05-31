<?php
/**
  * Generated by ClassGenerator
  * Antoine Plagnol
  * More info : https://github.com/plagnol
  * Date : 31/05/2018 00:00:00
  */
 
class PourcombienUpdater
{

    //Connection PDO
    private $db;

    /**
     * PourcombienUpdater constructor
     * @param $db : database
     */
    public function __construct($db)
    {
        $this->setDb($db);
    }

    /**
     * set the database
     * @param PDO $db database
     */

    public function setDb(PDO $bdd)
    {
        $this->db = $bdd;
    }

    /**
     * Insert into the database
     */

    public function insertPourcombienToDatabase($Pourcombien)
    {
        $insertDb = $this->db->prepare('INSERT INTO `Pourcombien`( `question`, `pourcombien`, `valeur1`, `valeur2`) VALUES ( ' . $Pourcombien->getquestion() . ', ' . $Pourcombien->getpourcombien() . ', ' . $Pourcombien->getvaleur1() . ', ' . $Pourcombien->getvaleur2() . ')');
        $insertDb->execute();
    }

    /**
     * Delete Pourcombien from database with an Id
     */

    public function deletePourcombienFromId($id)
    {
        $deleteDb = $this->db->prepare('DELETE FROM Pourcombien WHERE uniqId = ' . $id);
        $deleteDb->execute();
    }

    /**
     * Select Pourcombien from database with an Id
     */

    public function selectPourcombienFromId($id)
    {
        $selectDb = $this->db->prepare('SELECT * FROM Pourcombien WHERE uniqId = ' . $id);
        $selectDb->execute();
        $check = $selectDb->rowCount();
        if ($check == 1) {
            $Pourcombien = new Pourcombien();
            $info = $selectDb->fetch(PDO::FETCH_ASSOC);
            $Pourcombien->setid($info['uniqId']);
            $Pourcombien->setquestion($info['question']);
            $Pourcombien->setpourcombien($info['pourcombien']);
            $Pourcombien->setvaleur1($info['valeur1']);
            $Pourcombien->setvaleur2($info['valeur2']);
            return $Pourcombien;
        }
    }
}

<?php
/**
 * Class adminController
 * @author Atakan Demircioğlu , Arınç Alp Eren
 * @blog https://www.atakann.com
 * @mail mehata1997@hotmail.com
 * @date 02.02.2020
 * @update 05.02.2020
 */ 
include '../inc/Conn.php';
class adminController
{
    function getAllUsers() {
        $conne = new Mysql();
        $conn = $conne->dbConnect();
        $query = $conn->query("SELECT * FROM users");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $r= $query->fetchAll();
        return $r;
    }

    function getAllQuestions(){
        $conne = new Mysql();
        $conn = $conne->dbConnect();
        $query = $conn->query("SELECT * FROM questions");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $r= $query->fetchAll();
        return $r;
    }

    function getAllCategories(){
        $conne = new Mysql();
        $conn = $conne->dbConnect();
        $query = $conn->query("SELECT * FROM categories");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $r= $query->fetchAll();
        return $r;
    }

}
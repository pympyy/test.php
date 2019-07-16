<?php

class DB
{
    public function connect()
    {

       $mysqli = new mysqli ("localhost", "root", "", "xmlBase");
        // $mysqli = new mysqli ("localhost", "root", "root", "xmlBase");//MAC mamp
        return $mysqli;
    }
}
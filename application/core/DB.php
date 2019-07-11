<?php

class DB
{
    public function connect()
    {
        $mysqli = new mysqli ("localhost", "root", "", "xmlBase");
        return $mysqli;
    }
}
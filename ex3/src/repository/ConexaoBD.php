<?php

class ConexaoBD
{

    private String $DNS = "mysql:host=localhost;dbname=serenatto";
    private String $USERNAME = "root";
    private String $PASSWORD = "1234";

    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO($this->DNS, $this->USERNAME, $this->PASSWORD);
    }


}
<?php

namespace App;


class Database {

    private $connection = null;
    private $is_connect = true;

    function __construct() {

        $this->connection = mysqli_connect(constant("DB_HOST"), constant("DB_USERNAME"), constant("DB_PASSWORD"));
        mysqli_select_db($this->connection, constant("DB_DATABASE"));

    }

    public function getConnection(){
        return $this->connection;
    }

}

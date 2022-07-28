<?php

namespace Repository;

use App\Database;


class RepositoryBase {

    protected $database;
    protected $model;

    function __construct() {

        $this->database = new Database;

    }

    public function getAll() {
        return mysqli_query($this->database->getConnection(), 'SELECT * FROM '.$this->model);
    }

    public function delete($id) {
        return mysqli_query($this->database->getConnection(), 'DELETE FROM '.$this->model.' WHERE id='.$id);
    }

    public function find($id) {
        return mysqli_query($this->database->getConnection(), 'SELECT * FROM '.$this->model.' WHERE id='.$id);
    }



}

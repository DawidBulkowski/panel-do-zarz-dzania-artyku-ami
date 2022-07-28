<?php

namespace Repository;

use App\Database;


class ArticleRepository extends RepositoryBase {

    function __construct() {

        $this->model = "article";
        parent::__construct();
        
    }

    public function add() {

    }

}

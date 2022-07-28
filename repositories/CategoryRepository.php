<?php

namespace Repository;

use App\Database;


class CategoryRepository extends RepositoryBase {

    function __construct() {

        $this->model = "category";

    }

}

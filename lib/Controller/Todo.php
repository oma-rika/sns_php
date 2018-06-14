<?php

namespace MyApp\Controller;

class Signup extends \MyApp\Controller {
    public function getAll(){
        $stmt = $this->_db->query("select * from todos");
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}
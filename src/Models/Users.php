<?php

namespace App\Models;

class Users {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

}
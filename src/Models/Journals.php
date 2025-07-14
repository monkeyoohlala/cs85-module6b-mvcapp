<?php

namespace App\Models;

class Journals {
    private $currentDate;
    private $entry;

    public function __construct($entry) {
        $this->currentDate = $this->getcurrentDate();
        $this->entry = $entry;
    }

    public function getEntry() {
        return $this->entry;
    }

    public function getcurrentDate() {
        date_default_timezone_set('America/Los_Angeles');
        return date("F-d-Y");
    }
    
}
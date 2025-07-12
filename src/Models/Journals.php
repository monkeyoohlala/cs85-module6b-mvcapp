<?php

namespace App\Models;

class Journals {
    private $currentDate;
    private $entry;

    public function __construct($currentDate, $entry) {
        $this->entry = $entry;
        $this->currentDate = $currentDate;
    }

    public function getEntry() {
        return $this->entry;
    }

    public function getcurrentDate() {
        date_default_timezone_set('America/Los_Angeles');
        return "Date: " . date("F-d-Y") . "<br>";
    }

    public function addEntry() {
        return $this->entry;   
    }
}
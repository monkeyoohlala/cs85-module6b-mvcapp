<?php

namespace App\Models;

class Journals {
    private $currentDate;
    private $entry;
    private $wordCount;

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

    //AI generated method
    public function countWords($entry) {
        $cleanText = strip_tags(trim($entry));
        $wordCount = str_word_count($cleanText);
        return $wordCount;
    }
    
}
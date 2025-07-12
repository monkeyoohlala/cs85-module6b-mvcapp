<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Journals;

class Controller {
    public function showJournalEntry () {
        $journalEntry = new Journals("harold", "TEST");
    }
}
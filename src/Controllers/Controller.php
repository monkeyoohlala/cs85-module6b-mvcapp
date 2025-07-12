<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Journals;

class Controller {
    public function showJournalEntry () {
        $user = new Users("Harold");
        $journal = new Journals(getCurrentDate(), "Testing");
        include __DIR__ . '/../../views/views.php';
    }
}
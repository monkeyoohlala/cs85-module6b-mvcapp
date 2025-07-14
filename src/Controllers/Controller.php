<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Journals;

class Controller {
    public function showJournalEntry () {
        $user = new Users("Harold");
        $journal = new Journals("Today, was a beautiful day. Butterflies were in the garden, the sun was shining and warm");
        include __DIR__ . '/../../views/views.php';
    }
}
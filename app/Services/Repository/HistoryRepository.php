<?php

namespace App\Services\Repository;

use App\Models\History;
use App\Services\Interface\HistoryService;

class HistoryRepository implements HistoryService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getHistory()
    {
        return History::first();
    }
}

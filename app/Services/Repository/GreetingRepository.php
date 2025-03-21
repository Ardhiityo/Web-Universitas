<?php

namespace App\Services\Repository;

use App\Models\Greeting;
use App\Services\Interface\GreetingService;

class GreetingRepository implements GreetingService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getGreeting()
    {
        return Greeting::first();
    }
}

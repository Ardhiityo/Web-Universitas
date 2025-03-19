<?php

namespace App\Services\Repository;

use App\Models\Footer;
use App\Services\Interface\FooterService;

class FooterRepository implements FooterService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getFooter()
    {
        return Footer::first();
    }
}

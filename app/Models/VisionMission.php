<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model
{
    protected $guarded = [];

    protected function casts()
    {
        return [
            'image' => 'array'
        ];
    }
}

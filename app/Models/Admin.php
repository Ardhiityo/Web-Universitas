<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = [];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}

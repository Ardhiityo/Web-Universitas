<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    protected $guarded = [];

    public function setNameAttribute($value)
    {
        return $this->attributes['name'] = strtoupper($value);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function studentChoices1()
    {
        return $this->hasMany(Student::class, 'study_program_1_id');
    }

    public function studentChoices2()
    {
        return $this->hasMany(Student::class, 'study_program_2_id');
    }
}

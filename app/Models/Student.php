<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function entryScheme()
    {
        return $this->belongsTo(EntryScheme::class);
    }

    public function studyProgramChoice1()
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_1_id');
    }

    public function studyProgramChoice2()
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_2_id');
    }
}

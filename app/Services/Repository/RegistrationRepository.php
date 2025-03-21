<?php

namespace App\Services\Repository;

use App\Models\EntryScheme;
use App\Models\Student;
use App\Models\StudyProgram;
use App\Services\Interface\RegistrationService;

class RegistrationRepository implements RegistrationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getEntrySchemes()
    {
        return EntryScheme::all();
    }

    public function getStudyPrograms()
    {
        return StudyProgram::all();
    }

    public function createRegistration(array $data)
    {
        $data['image'] = $data['image']->store('Registration');
        return Student::create($data);
    }
}

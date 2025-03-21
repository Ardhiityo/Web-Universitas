<?php

namespace App\Services\Interface;

interface RegistrationService
{
    public function getEntrySchemes();
    public function getStudyPrograms();
    public function createRegistration(array $data);
}

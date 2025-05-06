<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\RegistrationRequest;
use App\Services\Interface\CategoryService;
use App\Services\Interface\RegistrationService;

class RegistrationController extends Controller
{
    public function __construct(
        private CategoryService $categoryRepository,
        private RegistrationService $registrationRepository
    ) {}

    public function registration()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $studyPrograms = $this->registrationRepository->getStudyPrograms();
        $entrySchemes = $this->registrationRepository->getEntrySchemes();

        return view('pages.registration', compact('categories', 'studyPrograms', 'entrySchemes'));
    }

    public function storeRegistration(RegistrationRequest $request)
    {
        $this->registrationRepository->createRegistration($request->validated());
        Alert::success('Sukses', 'Pendaftaran berhasil diterima!');

        return redirect()->route('home');
    }
}

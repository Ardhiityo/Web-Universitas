<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Services\Interface\FooterService;
use App\Http\Requests\RegistrationRequest;
use App\Services\Interface\CategoryService;
use App\Services\Interface\EntrySchemeService;
use App\Services\Interface\RegistrationService;
use App\Services\Interface\StudyProgramService;

class RegistrationController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private CategoryService $categoryRepository,
        private RegistrationService $registrationRepository
    ) {}

    public function registration()
    {
        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();
        $studyPrograms = $this->registrationRepository->getStudyPrograms();
        $entrySchemes = $this->registrationRepository->getEntrySchemes();

        return view('pages.registration', compact('footer', 'categories', 'studyPrograms', 'entrySchemes'));
    }

    public function storeRegistration(RegistrationRequest $request)
    {
        $this->registrationRepository->createRegistration($request->validated());
        Alert::success('Sukses', 'Pendaftaran berhasil diterima!');

        return redirect()->route('home');
    }
}

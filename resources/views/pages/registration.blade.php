@extends('layouts.app')

@section('title', 'B-University - Registration')

@section('content')
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Pendaftaran
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Bergabung bersama kami untuk Masa Depan yang gemilang
        </p>

        <form action="{{ route('storeRegistration') }}" method="post" enctype="multipart/form-data"
            class="space-y-6 mt-[70px]">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 md:gap-[124px] font-montserrat">
                <div class="space-y-10">
                    <div class="flex flex-col gap-3">
                        <label for="fullname" class="text-sm font-semibold text-xneutral-400">Nama Lengkap
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="text" id="fullname" name="fullname" placeholder="Masukan Nama Lengkap Anda"
                            required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg"
                            value="{{ old('fullname') }}" />
                        @error('fullname')
                            <span class="text-secondary-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="email" class="text-sm font-semibold text-xneutral-400">Email
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="email" id="email" name="email" placeholder="Masukan Email Anda" required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg"
                            value="{{ old('email') }}" />
                        @error('email')
                            <span class="text-secondary-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="jalur" class="text-sm font-semibold text-xneutral-400">Jalur
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select id="jalur" name="entry_scheme_id" required
                                class="border w-full peer placeholder:font-semibold appearance-none placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                <option class="font-montserrat text-xneutral-300" value="KIP-K">
                                    Pilih jalur
                                </option>
                                @foreach ($entrySchemes as $entryScheme)
                                    <option class="font-montserrat text-xneutral-300" value="{{ $entryScheme->id }}"
                                        {{ old('entry_scheme_id') == $entryScheme->id ? 'selected' : '' }}>
                                        {{ $entryScheme->name }}
                                    </option>
                                @endforeach
                            </select>
                            <i
                                class="-ml-8 transition-all pointer-events-none bi bi-chevron-down peer-focus:rotate-180"></i>
                        </div>
                        @error('entry_scheme_id')
                            <span class="text-secondary-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="image" class="text-sm font-semibold text-xneutral-400">Image
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center w-full gap-3">
                            <input type="file" id="image" name="image" accept="image/*" required
                                placeholder="Masukkan image Anda"
                                class="border w-full file:hidden placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                            <label for="image"
                                class="border text-nowrap bg-primary-200 text-xneutral-0 font-semibold py-[18px] px-6 rounded-lg">
                                Upload Foto
                            </label>
                        </div>
                        @error('image')
                            <span class="text-secondary-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="space-y-10">
                    <div class="flex flex-col gap-3">
                        <label for="nickname" class="text-sm font-semibold text-xneutral-400">Nama Panggilan
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="text" id="nickname" name="nickname" placeholder="Masukan Nama Panggilan Anda"
                            required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg"
                            value="{{ old('nickname') }}" />
                        @error('nickname')
                            <span class="text-secondary-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="phone" class="text-sm font-semibold text-xneutral-400">Nomor HP
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone" placeholder="Masukan Nomor HP Anda" required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg"
                            value="{{ old('phone') }}" />
                        @error('phone')
                            <span class="text-secondary-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="study_program_1_id" class="text-sm font-semibold text-xneutral-400">Program Studi 1
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select id="study_program_1_id" name="study_program_1_id" required
                                class="border peer appearance-none w-full placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                <option value="">Pilih Program Studi 1</option>
                                @foreach ($studyPrograms as $studyProgram)
                                    <option value="{{ $studyProgram->id }}"
                                        {{ old('study_program_1_id') == $studyProgram->id ? 'selected' : '' }}>
                                        {{ $studyProgram->name }}</option>
                                @endforeach
                            </select>
                            <i
                                class="-ml-8 transition-all pointer-events-none bi bi-chevron-down peer-focus:rotate-180"></i>
                        </div>
                        @error('study_program_1_id')
                            <span class="text-secondary-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="study_program_id_2" class="text-sm font-semibold text-xneutral-400">Program Studi 2
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select id="study_program_2_id" name="study_program_2_id" required
                                class="border peer appearance-none w-full placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                <option value="">Pilih Program Studi 2</option>
                                @foreach ($studyPrograms as $studyProgram)
                                    <option value="{{ $studyProgram->id }}"
                                        {{ old('study_program_2_id') == $studyProgram->id ? 'selected' : '' }}>
                                        {{ $studyProgram->name }}</option>
                                @endforeach
                            </select>
                            <i
                                class="-ml-8 transition-all pointer-events-none bi bi-chevron-down peer-focus:rotate-180"></i>
                        </div>
                        @error('study_program_2_id')
                            <span class="text-secondary-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-12 md:gap-[124px] !mt-[60px]">
                <a href="{{ route('home') }}"
                    class="px-6 py-[14px] w-full text-center font-montserrat text-neutral-0 bg-white border text-lg font-semibold border-primary-200 text-primary-200 rounded-full">
                    Kembali Ke Homepage
                </a>
                <button type="submit"
                    class="px-6 py-[14px] text-center w-full font-montserrat text-neutral-0 bg-primary-200 border text-lg font-semibold border-primary-200 text-xneutral-0 rounded-full">
                    Daftar
                </button>
            </div>
        </form>
    </article>
@endsection

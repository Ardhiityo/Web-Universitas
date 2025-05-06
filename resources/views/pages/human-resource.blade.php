@extends('layouts.app')

@section('title', 'B-University - Human resource')

@section('content')
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Data Dosen
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Dosen berkompeten dibidangnya
        </p>

        <div class="mt-10 space-y-11">
            @forelse ($lectures as $lecture)
                <div class="flex flex-col items-center gap-8 sm:flex-row sm:gap-16">
                    <img class="sm:col-span-2" src="{{ asset('storage/' . $lecture->image) }}" alt="{{ $lecture->name }}" />
                    <div class="sm:col-span-10 font-montserrat">
                        <h3 class="text-base font-semibold sm:text-lg text-primary-200">
                            {{ $lecture->name }}
                        </h3>
                        <table class="mt-5 text-xs font-medium table-auto sm:table-fixed sm:text-sm text-xneutral-300">
                            <tbody>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">NIDN</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>{{ $lecture->nidn }}</td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Pendidikan</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>
                                        {{ $lecture->education }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Jabatan</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>{{ $lecture->job_title }}</td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Email</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>{{ $lecture->email }}</td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Topik</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>{{ $lecture->job_title }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @empty
                <div class="flex flex-col items-center gap-8 sm:flex-row sm:gap-16">
                    <img class="sm:col-span-2" src="{{ asset('images/orang-1.png') }}" alt="Elfan Efendi, S.Kom., M.Kom." />
                    <div class="sm:col-span-10 font-montserrat">
                        <h3 class="text-base font-semibold sm:text-lg text-primary-200">
                            No content available
                        </h3>
                        <table class="mt-5 text-xs font-medium table-auto sm:table-fixed sm:text-sm text-xneutral-300">
                            <tbody>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">NIDN</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>No content available</td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Pendidikan</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>
                                        No content available
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Jabatan</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>Junior Lecturer</td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Email</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>No content available</td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Topik</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>No content available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforelse
        </div>
    </article>

    <article class="container mt-[150px]">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Tenaga Kependidikan
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Tendik B-University
        </p>

        <div class="mt-10 space-y-11">
            @forelse ($admins as $admin)
                <div class="flex flex-col items-center gap-8 sm:flex-row sm:gap-16">
                    <img class="sm:col-span-2" src="{{ asset('storage/' . $admin->image) }}" alt="{{ $admin->name }}" />
                    <div class="sm:col-span-10 font-montserrat">
                        <h3 class="text-base font-semibold sm:text-lg text-primary-200">
                            {{ $admin->name }}
                        </h3>
                        <table
                            class="w-full mt-5 text-xs font-medium table-fixed sm:table-fixed sm:text-sm text-xneutral-300">
                            <tbody>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">NIP</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>{{ $admin->nip }}</td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Jabatan</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>{{ $admin->job_title }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @empty
                <div class="flex flex-col items-center gap-8 sm:flex-row sm:gap-16">
                    <img class="sm:col-span-2" src="{{ asset('images/orang-7.png') }}" alt="Sample" />
                    <div class="sm:col-span-10 font-montserrat">
                        <h3 class="text-base font-semibold sm:text-lg text-primary-200">
                            No content available
                        </h3>
                        <table
                            class="w-full mt-5 text-xs font-medium table-fixed sm:table-fixed sm:text-sm text-xneutral-300">
                            <tbody>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">NIP</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>No content available</td>
                                </tr>
                                <tr>
                                    <td class="w-24 py-1 sm:w-48">Jabatan</td>
                                    <td class="w-4 sm:w-12">:</td>
                                    <td>No content available</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforelse
        </div>
    </article>
@endsection

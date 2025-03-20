@extends('layouts.app')

@section('title', 'B-University - Vison Mission')

@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Sejarah B-University
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 sm:text-base font-montserrat">
            Bersama mengembangkan pendidikan Negeri
        </p>

        <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2">
            <div class="space-y-3">
                <h3 class="text-base font-semibold text-center font-montserrat sm:text-lg text-primary-200">
                    VISI
                </h3>
                <p class="text-lg font-semibold text-center uppercase sm:text-xl font-montserrat text-xneutral-200">
                    {{ $visionMission->vision_tagline ?? 'Menjadi Universitas Yang Inovatif,Profesional dan Islami' }}
                </p>
            </div>
            <div class="space-y-3">
                <h2 class="text-base font-semibold text-center font-montserrat sm:text-lg text-primary-200">
                    MISI
                </h2>
                <ol
                    class="pl-4 text-sm font-semibold text-justify list-decimal font-montserrat text-xneutral-200 sm:text-base">
                    @forelse ($visionMission->mission ?? [] as $mission)
                        <li>
                            {{ $mission['mission'] }}
                        </li>
                    @empty
                        <li>
                            No content available
                        </li>
                    @endforelse
                </ol>
            </div>
        </div>

        <div class="grid grid-cols-1 mt-10 overflow-hidden border sm:grid-cols-3 border-xneutral-100 rounded-2xl">
            @forelse ($visionMission->vision ?? [] as $key => $vision)
                <div class="p-[30px]">
                    <h2 class="text-base font-semibold sm:text-lg text-xneutral-400 font-montserrat">
                        {{ $vision['title'] }}
                    </h2>
                    <p class="mt-4 text-xs font-medium font-montserrat text-xneutral-200 sm:text-sm">
                        {{ $vision['point'] }}
                    </p>
                </div>
                <div>
                    <img src="{{ asset('storage/' . $visionMission->image[$key]) }}" alt="Inovatif" />
                </div>
            @empty
                <div class="p-[30px]">
                    <h2 class="text-base font-semibold sm:text-lg text-xneutral-400 font-montserrat">
                        No content available
                    </h2>
                    <p class="mt-4 text-xs font-medium font-montserrat text-xneutral-200 sm:text-sm">
                        No content available
                    </p>
                </div>
                <div>
                    @empty($visionMission->image)
                        <img src="{{ asset('images/visi-1.png') }}" alt="Inovatif" />
                    @else
                        <img src="{{ asset('storage/' . $visionMission->image[$key]) }}" alt="Inovatif" />
                    @endempty
                </div>
            @endforelse
        </div>
    </article>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

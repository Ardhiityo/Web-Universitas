@extends('layouts.app')

@section('title', 'B-University - History')

@section('content')
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Sejarah B-University
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Bersama mengembangkan pendidikan Negeri
        </p>

        <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-12">
            @empty($history->image)
                <img src="{{ asset('images/tentang-1.png') }}" alt="Sejarah B-University"
                    class="w-full h-[600px] object-cover rounded-[30px] sm:col-span-5" />
            @else
                <img src="{{ asset('storage/' . $history->image) }}" alt="Sejarah B-University"
                    class="w-full h-[600px] object-cover rounded-[30px] sm:col-span-5" />
            @endempty
            <p class="text-sm font-medium text-justify font-montserrat sm:text-base sm:col-span-7 text-xneutral-300">
                {{ $history->content ?? 'No content available' }}
            </p>
        </div>
    </article>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

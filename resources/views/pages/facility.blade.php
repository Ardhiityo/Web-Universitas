@extends('layouts.app')

@section('title', 'B-University - Facility')

@section('content')
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Fasilitas B-University
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Menciptakan lingkungan pembelajaran yang nyaman dan lengkap
        </p>
        @forelse ($facilities as $facility)
            <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-12">
                <img src="{{ asset('storage/' . $facility->image) }}" alt="Laboratorium Sistem dan Teknologi Informasi"
                    class="w-full h-fit object-cover rounded-[30px] sm:col-span-5" />
                <div class="sm:col-span-7">
                    {!! $facility->content !!}
                </div>
            </div>
        @empty
            <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-12">
                <img src="{{ asset('images/fasilitas-1.png') }}" alt="Laboratorium Sistem dan Teknologi Informasi"
                    class="w-full h-fit object-cover rounded-[30px] sm:col-span-5" />
                <div class="sm:col-span-7">
                    No content available
                </div>
            </div>
        @endforelse
    </article>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@extends('layouts.app')

@section('title', 'B-University - Greeting')

@section('content')
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Sambutan Rektor B-University
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 sm:text-base font-montserrat">
            Meraih Masa Depan dengan Semangat Kebersamaan
        </p>

        <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-12">
            @if ($greeting->image ?? false)
                <img src="{{ asset('storage/' . $greeting->image) }}" alt="Rektor B-University"
                    class="w-full h-fit object-cover rounded-[30px] sm:col-span-4" />
                <span class="text-sm font-medium text-justify font-montserrat sm:text-base sm:col-span-8 text-xneutral-300">
                    {!! $greeting->content !!}
                </span>
            @else
                <img src="{{ asset('images/rektor.png') }}" alt="Rektor B-University"
                    class="w-full h-fit object-cover rounded-[30px] sm:col-span-4" />
                <p class="text-sm font-medium text-justify font-montserrat sm:text-base sm:col-span-8 text-xneutral-300">
                    No content available
                </p>
            @endif
        </div>
    </article>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@extends('layouts.app')

@section('title', 'B-University - News')

@section('content')
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Berita terkini untuk Anda
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 sm:text-base font-montserrat">
            Temukan berita terbaru hari ini
        </p>

        <div class="mt-11">
            <div class="space-y-[14px] mb-3">
                <h2 class="uppercase font-montserrat font-semibold text-xneutral-400 text-[22px] sm:text-3xl">
                    {{ $news->title }}
                </h2>
                <div class="flex items-center gap-[18px] font-montserrat text-xs text-xneutral-200 font-semibold">
                    <div class="flex gap-[10px] items-center">
                        <img src="{{ asset('storage/' . $news->admin->image) }}" alt="Admin"
                            style="width: 25px; height: 25px;" />
                        <span class="text-xneutral-400">{{ $news->admin->name }}</span>
                    </div>
                    <span>{{ $news->created_at->translatedFormat('d F Y') }}</span>
                </div>
            </div>
            <p class="text-sm font-medium text-justify font-montserrat sm:text-base sm:col-span-8 text-xneutral-300">
                {{ $news->content }}
            </p>
            <div class="max-h-[430px] rounded-3xl overflow-hidden object-cover w-full mt-4">
                <img src="{{ asset('storage/' . $news->image) }}" alt="Berita" style="width: 100%;" />
            </div>
        </div>
    </article>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@extends('layouts.app')

@section('title', 'B-University - Announcement')

@section('content')
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Pengumuman
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 sm:text-base font-montserrat">
            Dapatkan Pengumuman terbaru
        </p>

        <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2 md:grid-cols-3">
            @forelse ($announcements as $announcement)
                <div class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white">
                    <a href="{{ route('announcementDetail', ['slug' => $announcement->slug]) }}"
                        class="mb-4 text-base font-semibold sm:text-lg font-montserrat text-xneutral-400 line-clamp-2">
                        {{ $announcement->title }}
                    </a>
                    <p class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200 mb-1.5">
                        {{ $announcement->content }}
                    </p>
                    <p class="text-xs font-semibold font-montserrat text-xneutral-200">
                        {{ date_format($announcement->created_at, 'd/m/y') }}
                    </p>
                </div>
            @empty
                <div class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white">
                    <a href=""
                        class="mb-4 text-base font-semibold sm:text-lg font-montserrat text-xneutral-400 line-clamp-2">
                        No content available
                    </a>
                    <p class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200 mb-1.5">
                        No content available
                    </p>
                    <p class="text-xs font-semibold font-montserrat text-xneutral-200">
                        No content available
                    </p>
                </div>
            @endforelse
        </div>
    </article>
@endsection

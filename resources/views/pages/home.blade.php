@extends('layouts.app')

@section('title', 'B-University')

@section('content')
    <!-- HERO SECTION -->
    <section class="container min-h-[90vh] relative mt-28">
        <div id="hero-1"
            class="absolute animate-fade top-0 left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]">
            <div class="w-full px-4 md:pl-12 lg:w-1/2 lg:portrait:w-full">
                <h1 class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7">
                    Menyatukan Ilmu dan Iman untuk Masa Depan Cerah
                </h1>
                <span class="text-lg font-medium text-white md:text-xl font-montserrat">Kami berkomitmen mendidik
                    generasi unggul yang menjunjung tinggi
                    nilai agama dan kecemerlangan akademik.</span>
            </div>
            <img src="{{ asset('images/hero-illustration-1.png') }}"
                class="z-0 w-full mr-12 sm:-mr-12 lg:w-1/2 lg:portrait:w-4/5" alt="Hero Image" />
        </div>
        <div id="hero-2"
            class="absolute top-0 animate-fade left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]">
            <div class="w-full px-4 md:pl-12 lg:w-1/2 lg:portrait:w-full">
                <h1 class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7">
                    Menuju Pendidikan Berdaya Saing Global
                </h1>
                <span class="text-lg font-medium text-white md:text-xl font-montserrat">Teknik pembelajaran yang
                    memadukan tradisi keilmuan Agama dengan
                    inovasi modern.</span>
            </div>
            <img src="{{ asset('images/hero-illustration-2.png') }}"
                class="z-0 w-full mr-12 sm:-mr-12 lg:w-1/2 lg:portrait:w-4/5" alt="Hero Image" />
        </div>
        <div id="hero-3"
            class="absolute animate-fade top-0 left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]">
            <div class="w-full px-4 md:pl-12 lg:w-1/2 lg:portrait:w-full">
                <h1 class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7">
                    Menciptakan Generasi Berakhlak dan Berwawasan
                </h1>
                <span class="text-lg font-medium text-white md:text-xl font-montserrat">Kami hadir untuk membimbing
                    Anda dalam meraih prestasi akademik dan
                    menjadi agen perubahan di dunia.</span>
            </div>
            <img src="{{ asset('images/hero-illustration-3.png') }}"
                class="z-0 w-full mr-12 sm:-mr-12 lg:w-1/2 lg:portrait:w-4/5" alt="Hero Image" />
        </div>
    </section>

    {{-- COOPERATION SECTION --}}
    <div
        class="container relative z-10 py-5 mx-4 -mt-32 overflow-hidden bg-white shadow-2xl w-fit md:px-16 rounded-3xl sm:mx-auto">
        <h3 class="w-full mb-4 text-xl font-semibold text-center sm:text-2xl font-montserrat">
            Bekerjasama Dengan
        </h3>
        <div class="flex gap-16 overflow-x-auto">
            @forelse ($cooperations as $cooperation)
                <img class="w-12 md:w-fit" src="{{ asset('storage/' . $cooperation->image) }}" alt="logo" />
            @empty
                <img class="w-12 md:w-fit" src="{{ asset('images/Waseda.png') }}" alt="logo" />
                <img class="w-12 md:w-fit" src="{{ asset('images/TIT.png') }}" alt="logo" />
                <img class="w-12 md:w-fit" src="{{ asset('images/mit.png') }}" alt="logo" />
            @endforelse
        </div>
    </div>
    {{-- END COOPERATION SECTION --}}
    <!-- END OF HERO SECTION -->

    <!-- ABOUT SECTION -->
    <section class="w-full overflow-hidden py-28">
        <div class="container grid items-center grid-cols-1 gap-12 md:grid-cols-2">
            <div class="space-y-4 lg:ml-20">
                <h3 class="text-xl font-bold text-primary-200 sm:text-2xl font-montserrat">
                    TENTANG KAMI
                </h3>
                <p class="text-2xl font-semibold font-montserrat sm:text-4xl">
                    Membangun generasi
                    <span class="text-secondary-purple">unggul</span> dan
                    <span class="text-secondary-pink">berakhlak</span>
                </p>
                <p class="text-base font-semibold sm:text-lg text-xneutral-200 font-montserrat">
                    Universitas yang berfokus pada integritas, ilmu pengetahuan, dan
                    pengembangan karakter untuk membentuk pemimpin masa depan.
                </p>
                <a href="#"
                    class="px-6 py-[14px] font-montserrat text-neutral-0 bg-white border w-fit text-lg font-semibold border-primary-200 text-primary-200 rounded-full flex gap-[10px]"><span>Tentang
                        kami</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="relative">
                <div class="grid grid-cols-2 gap-6 w-fit">
                @empty($aboutMe->image)
                    <img src="{{ asset('images/about-1.png') }}" alt="Illustration 1" />
                    <img src="{{ asset('images/about-2.png') }}" alt="Illustration 2" />
                    <img class="col-span-2" src="{{ asset('images/about-3.png') }}" alt="Illustration 3" />
                @else
                    <img src="{{ asset('storage/' . $aboutMe->image[0]) }}" alt="Illustration 1" />
                    <img src="{{ asset('storage/' . $aboutMe->image[1]) }}" alt="Illustration 2" />
                    <img class="col-span-2" src="{{ asset('storage/' . $aboutMe->image[2]) }}" alt="Illustration 3" />
                @endempty
            </div>
            <img class="absolute -bottom-32 -left-36 -z-10" src="{{ asset('images/elipse-1.svg') }}" alt="" />
            <img class="absolute -top-24 -right-16 -z-10" src="{{ asset('images/elipse-2.svg') }}" alt="" />
        </div>
    </div>
</section>
<!-- END OF ABOUT SECTION -->

<!-- NEWS SECTION -->
<section class="container relative">
    <div class="flex items-center justify-between mb-10">
        <div>
            <h3 class="text-xl font-semibold sm:text-2xl font-montserrat text-xneutral-400">
                Berita terkini untuk Anda
            </h3>
            <p class="text-sm font-semibold sm:text-base font-montserrat text-xneutral-200">
                Temukan berita terbaru hari ini
            </p>
        </div>
        <div>
            <button
                class="w-10 h-10 transition-all rounded-full text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 hover:bg-xneutral-400">
                <i class="text-4xl bi bi-arrow-left-short"></i>
            </button>
            <button
                class="w-10 h-10 transition-all rounded-full text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 hover:bg-xneutral-400">
                <i class="text-4xl bi bi-arrow-right-short"></i>
            </button>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        @forelse ($latestNews as $news)
            <div class="p-[14px] rounded-[20px] border border-xneutral-100 bg-xneutral-0">
                <div class="max-h-[214px] rounded-2xl overflow-hidden mb-5">
                    <img src="{{ asset('storage/' . $news->image) }}" alt="Foto Berita" />
                </div>
                <a href="{{ route('news', ['slug' => $news->slug]) }}"
                    class="text-base font-semibold sm:text-lg font-montserrat text-xneutral-400 line-clamp-2">
                    {{ $news->title }}
                </a>
                <p class="text-xs font-semibold font-montserrat sm:text-sm text-xneutral-200">
                    {{ date_format($news->created_at, 'd/m/y') }}
                </p>
            </div>
        @empty
            <div class="p-[14px] rounded-[20px] border border-xneutral-100 bg-xneutral-0">
                <div class="max-h-[214px] rounded-2xl overflow-hidden mb-5">
                    <img src="{{ asset('images/berita-1.png') }}" alt="Foto Berita" />
                </div>
                <a href="{{ route('home') }}"
                    class="text-base font-semibold sm:text-lg font-montserrat text-xneutral-400 line-clamp-2">
                    No content available
                </a>
                <p class="text-xs font-semibold font-montserrat sm:text-sm text-xneutral-200">
                    No content available
                </p>
            </div>
        @endforelse
    </div>
    <div class="absolute top-12 -left-24 -z-10">
        <img src="{{ asset('images/elipse-1.svg') }}" alt="elipse1" />
    </div>
</section>
<!-- END OF NEWS SECTION -->

<!-- RECTOR SECTION -->
<section class="container mt-28">
    <div class="space-y-2 text-center">
        <h3 class="text-xl font-semibold font-montserrat text-xneutral-400 sm:text-2xl">
            Rektorat B-Universitas
        </h3>
        <p class="text-sm font-semibold font-montserrat sm:text-base text-xneutral-200">
            Berkomitmen untuk meningkatkan kualitas Pendidikan
        </p>
    </div>
    <div class="grid grid-cols-2 gap-12 text-center lg:grid-cols-4 mt-11">
        @forelse ($rectors as $rector)
            <div class="flex flex-col items-center">
                <div class="mb-6 overflow-hidden rounded-full w-fit">
                    <img src="{{ asset('storage/' . $rector->image) }}" alt="avatar" />
                </div>
                <p class="mb-[2px] text-sm sm:text-base text-xneutral-400 font-semibold font-montserrat">
                    {{ $rector->name }}
                </p>
                <p class="mb-[2px] text-xs sm:text-sm text-xneutral-200 font-semibold font-montserrat">
                    {{ $rector->job_title }}
                </p>
            </div>
        @empty
            <div class="flex flex-col items-center">
                <div class="mb-6 overflow-hidden rounded-full w-fit">
                    <img src="{{ asset('images/orang-1.png') }}" alt="avatar" />
                </div>
                <p class="mb-[2px] text-sm sm:text-base text-xneutral-400 font-semibold font-montserrat">
                    No content available
                </p>
                <p class="mb-[2px] text-xs sm:text-sm text-xneutral-200 font-semibold font-montserrat">
                    No content available
                </p>
            </div>
        @endforelse
    </div>
</section>
<!-- END OF RECTOR SECTION -->

<!-- ANNOUNCEMENT SECTION -->
<section class="w-full mt-28 x-announcement">
    <div class="container pb-16 pt-9">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h3 class="text-xl font-semibold sm:text-2xl font-montserrat text-xneutral-0">
                    Pengumuman
                </h3>
                <p class="text-sm font-semibold font-montserrat sm:text-base text-xneutral-0">
                    Dapatkan pengumuman terbaru
                </p>
            </div>
            <div>
                <button
                    class="w-10 h-10 transition-all rounded-full text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 hover:bg-xneutral-400">
                    <i class="text-4xl bi bi-arrow-left-short"></i>
                </button>
                <button
                    class="w-10 h-10 transition-all rounded-full text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 hover:bg-xneutral-400">
                    <i class="text-4xl bi bi-arrow-right-short"></i>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            @forelse ($latestAnnouncements as $announcement)
                <div class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white">
                    <a href=""
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
    </div>
</section>
<!-- END OF ANNOUNCEMENT SECTION -->
@endsection

@section('footer')
@include('partials.home-footer')
@endsection

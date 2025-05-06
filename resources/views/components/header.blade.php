<header class="fixed top-0 z-50 w-full bg-white">
    <x-nav :categories="$categories" />

    <!-- Mobile Menu -->
    <div class="hidden shadow-xl" id="mobile-menu">
        <ul class="px-4 pt-2 pb-3 space-y-2">
            <li class="w-full h-full">
                <div class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
                    data-target="menu1">
                    <span class="font-semibold">Tentang Kami</span>
                    <i class="transition-all bi bi-chevron-down"></i>
                </div>
                <div class="hidden x-dropdown-menu" id="menu1">
                    <div>
                        <ul class="px-3 bg-white text-nowrap rounded-xl">
                            <li>
                                <a href="{{ route('history') }}" class="block w-full py-1 pl-2 pr-8">Sejarah</a>
                            </li>
                            <li>
                                <a href="{{ route('visionMission') }}" class="block w-full py-1 pl-2 pr-8">Visi &
                                    Misi</a>
                            </li>
                            <li>
                                <a href="{{ route('visionMission') }}" class="block w-full py-1 pl-2 pr-8">Sambutan
                                    Rektor</a>
                            </li>
                            <li>
                                <a href="{{ route('facility') }}" class="block w-full py-1 pl-2 pr-8">Fasilitas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('humanResource') }}" class="font-semibold">SDM</a>
            </li>
            <li class="w-full h-full">
                <div class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
                    data-target="menu2">
                    <span class="font-semibold">Akademik</span>
                    <i class="transition-all bi bi-chevron-down"></i>
                </div>
                <div class="hidden w-full mt-4 x-dropdown-menu" id="menu2">
                    <div class="space-y-4">
                        @forelse ($categories as $category)
                            <div class="pl-3">
                                <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                    data-target="menu-{{ Str::slug($category->name) }}">{{ $category->name }}
                                    <i class="transition-all bi bi-chevron-down"></i></span>
                                @foreach ($category->studyPrograms as $studyProgram)
                                    <ul id="menu-{{ Str::slug($category->name) }}"
                                        class="hidden space-y-1 x-dropdown-menu text-nowrap">
                                        <li>
                                            <a href="#" class="block w-full py-1 pl-2 pr-8"
                                                style="text-transform: capitalize">{{ $studyProgram->name }}</a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        @empty
                            <div class="pl-3">
                                <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                    data-target="menu-ilmu-kesehatan">Ilmu Kesehatan
                                    <i class="transition-all bi bi-chevron-down"></i></span>
                                <ul id="menu-ilmu-kesehatan" class="hidden space-y-1 x-dropdown-menu text-nowrap">
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">D3 Farmasi</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pl-3">
                                <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                    data-target="menu-ekonomi-bisnis">Ekonomi & Bisnis
                                    <i class="transition-all bi bi-chevron-down"></i></span>
                                <ul id="menu-ekonomi-bisnis" class="hidden space-y-1 x-dropdown-menu text-nowrap">
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 Manajemen</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pl-3">
                                <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                    data-target="menu-sains">Sains, Teknologi, & Pendidikan
                                    <i class="transition-all bi bi-chevron-down"></i></span>
                                <ul id="menu-sains" class="hidden space-y-1 x-dropdown-menu text-nowrap">
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 Teknik
                                            Informatika</a>
                                    </li>
                                </ul>
                            </div>
                        @endforelse
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('announcement') }}" class="font-semibold">Pengumuman</a>
            </li>
            <li>
                <a href="{{ route('registration') }}" class="font-semibold">Pendaftaran</a>
            </li>
        </ul>
    </div>
</header>

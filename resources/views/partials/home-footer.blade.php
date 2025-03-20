    <!-- FOOTER SECTION -->
    <footer class="w-full pt-20 mt-14">
        <div class="container grid grid-cols-1 gap-12 sm:grid-cols-2 md:grid-cols-3 lg:gap-36">
            <div>

                @empty($footer->image)
                    <img class="mb-10" src="{{ asset('images/B-Uni.png') }}" alt="Logo B-Universitas" />
                @else
                    <img class="mb-10" src="{{ asset('storage/' . $footer->image) }}" alt="Logo B-Universitas" />
                @endempty

                <p class="mb-6 text-sm text-medium text-xneutral-200 font-poppins">
                    Lihat Perkembangan kami diakun sosial media
                </p>
                <div class="flex items-center gap-11">

                    <a href="{{ $footer->instagram ?? 'www.instagram.com' }}" target="_blank"
                        class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                        <i class="text-lg bi bi-instagram text-xneutral-0"></i>
                    </a>

                    <a href="{{ $footer->youtube ?? 'www.youtube.com' }}" target="_blank"
                        class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                        <i class="text-lg bi bi-youtube text-xneutral-0"></i>
                    </a>
                    <a href="{{ $footer->linkedin ?? 'www.youtube.com' }}" target="_blank"
                        class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                        <i class="text-sm bi bi-linkedin text-xneutral-0"></i>
                    </a>
                    <a href="{{ $footer->facebook ?? 'www.youtube.com' }}" target="_blank"
                        class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                        <i class="text-lg bi bi-facebook text-xneutral-0"></i>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="mb-10 text-lg font-semibold font-poppins text-xneutral-300">
                    Contact us
                </h4>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <i class="bi bi-geo-alt-fill text-xneutral-200"></i>
                        <p class="text-sm font-poppins text-xneutral-200">
                            {{ $footer->address ?? 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111' }}
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <i class="bi bi-envelope text-xneutral-200"></i>
                        <p class="text-sm font-poppins text-xneutral-200">
                            {{ $footer->email ?? 'admin@b-university.ac.id' }}
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <i class="bi bi-whatsapp text-xneutral-200"></i>
                        <p class="text-sm font-poppins text-xneutral-200">
                            {{ $footer->whatsapp ?? '+62 896-5055-7420' }}
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="mb-10 text-lg font-semibold font-poppins text-xneutral-300">
                    Contact us
                </h4>
                <div class="max-h-24">
                    <a href="{{ $footer->gmaps ?? 'https://www.google.com/maps?ll=-6.01682,106.042262&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=12302382947172330570' }}"
                        target="_blank" rel="noopener noreferrer">
                        <button
                            class="px-6 py-[14px] text-center w-full font-montserrat text-neutral-0 bg-white border text-lg font-semibold border-primary-200 text-primary-200 rounded-full">
                            View GMaps
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="border-2 mt-14 border-xneutral-300" />
            <p class="my-6 text-center font-poppins text-xneutral-200">
                Copyright © 2024 | B University
            </p>
        </div>
    </footer>
    <!-- END OF FOOTER SECTION -->

    </body>

    </html>

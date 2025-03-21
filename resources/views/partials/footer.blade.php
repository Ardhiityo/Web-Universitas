    <!-- FOOTER SECTION -->
    <footer class="w-full pt-20 mt-14">
        <div class="container grid grid-cols-1 gap-12 sm:grid-cols-2 md:grid-cols-3 lg:gap-36">
            <div>
                <img class="mb-10" src="{{ asset('storage/' . $footer->image) }}" alt="Logo B-Universitas" />
                <p class="mb-6 text-sm text-medium text-xneutral-200 font-poppins">
                    Lihat Perkembangan kami diakun sosial media
                </p>
                <div class="flex items-center gap-11">
                    <a href="{{ $footer->instagram }}"
                        class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                        <i class="text-lg bi bi-instagram text-xneutral-0"></i>
                    </a>
                    <a href="{{ $footer->youtube }}"
                        class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                        <i class="text-lg bi bi-youtube text-xneutral-0"></i>
                    </a>
                    <a href="{{ $footer->linkedin }}"
                        class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                        <i class="text-sm bi bi-linkedin text-xneutral-0"></i>
                    </a>
                    <a href="{{ $footer->facebook }}"
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
                            {{ $footer->address }}
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <i class="bi bi-envelope text-xneutral-200"></i>
                        <p class="text-sm font-poppins text-xneutral-200">
                            {{ $footer->email }}
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <i class="bi bi-whatsapp text-xneutral-200"></i>
                        <p class="text-sm font-poppins text-xneutral-200">
                            {{ $footer->whatsapp }}
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="mb-10 text-lg font-semibold font-poppins text-xneutral-300">
                    Contact us
                </h4>
                <div class="max-h-24">
                    {{-- <iframe class="w-full h-full" width="425" height="350" src="{{ $footer->gmaps }}"
                        style="border: 1px solid black"></iframe> --}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.839076288159!2d106.03968747480148!3d-6.016819993968514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e153492ffff%3A0xaabad81c1107ac4a!2sUNIVERSITAS%20AL-KHAIRIYAH!5e0!3m2!1sen!2sid!4v1742485957071!5m2!1sen!2sid"
                        width="425" height="350" class="w-full h-full" loading="lazy"></iframe>
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

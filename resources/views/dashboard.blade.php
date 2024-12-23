<x-app-layout>
    <section class="flex flex-col min-h-screen bg-slate-600 text-white bg-center bg-cover bg-blend-overlay bg-black/30 "
             style="background-image:url({{asset('images/SCC_building.png')}});">
        <div class="flex-1 flex items-center">
            <div class="text-center mx-auto">
                <h1 class="sm:text-5xl text-2xl px-4 font-semibold">Penuhi Kebutuhan Kreatifmu di <br> <span
                        class="text-orange-400">Sumedang Creative Center</span></h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container p-2 max-w-md mx-auto sm:max-w-xl sm:max-w-full lg:max-w-full">
            <div class=" shadow-1lg p-6 ">
                <div class="flex">
                    <div class="lg:block lg:flex lg:w-1/2 hidden">
                        <img class=" rounded-xl" src="{{asset('images/SCC_building.png')}}" alt="sccimg">
                    </div>
                    <div class="lg:flex-1 lg:p-8">
                        <h2 class="text-2xl font-bold"><span
                                class="underline decoration-2 underline-offset-8 decoration-orange-400 ">Ap</span>a itu
                            SCC?</h2>
                        <img class="mt-2 rounded-xl lg:hidden sm:w-full" src="{{asset('images/SCC_building.png')}}"
                             alt="sccimg">
                        <p class="text-sm mt-4">Sumedang Crative Center (SCC) adalah pusat kreativitas di Kabupaten
                            Sumedang yang didedikasikan untuk mendukung perkembangan seni, budaya dan inovasi. Dengan
                            fasilitas modern seperti ruang pertemuan, studio kreatif, ruang pameran, ruang editing, area
                            diskusi dan ruang lainnya, SCC memberikan tempat yang nyaman dan inspiratif untuk berbagai
                            kegiatan mulai dari workshop, pameran seni, hingga acara komunitas.</p>
                        <div class="mt-6">
                            <a href="/"
                               class=" px-5 py-3 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <section>

                    <div class="mt-8 ">
                        <h2 class="text-2xl font-bold"><span
                                class="underline decoration-2 underline-offset-8 decoration-orange-400">Ru</span>angan
                            yang tersedia</h2>
                    </div>
                    <div class="swiper mt-5">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach($rooms as $room)
                                <div class="swiper-slide">
                                    <x-card>
                                        <x-card.image-container>
                                            <x-card.image alt="ruangan"
                                                          src="{{\Illuminate\Support\Facades\Storage::url($room->images)}}"/>
                                        </x-card.image-container>
                                        <x-card.container>
                                            <x-card.title>{{$room->room_name}}</x-card.title>
                                            <x-card.description>{{Str::limit($room->description, 50)}}</x-card.description>
                                            <a href="{{route('booking.details', $room->id)}}">
                                                <x-card.button/>
                                            </a>
                                        </x-card.container>
                                    </x-card>
                                </div>
                            @endforeach
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev absolute top-1/2 z-10 p-2">
                            <div class="border p-1 rounded-full text-gray-900 bg-white/75">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 19.5 8.25 12l7.5-7.5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-button-next absolute top-1/2 right-0 z-10 p-2">
                            <div class="border p-1 rounded-full text-gray-900 bg-white/75">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                                </svg>
                            </div>
                        </div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</x-app-layout>

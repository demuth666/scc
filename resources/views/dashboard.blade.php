<x-app-layout>

    <!-- Hero Section -->
    <section class="flex flex-col min-h-screen bg-slate-600 text-white bg-center bg-cover bg-blend-overlay bg-black/30 " style="background-image:url({{asset('images/SCC_building.png')}});">
        <div class="flex-1 flex items-center">
            <div class="text-center mx-auto">
                <h1 class="sm:text-5xl text-2xl px-4 font-semibold">Penuhi Kebutuhan Kreatifmu di <br> <span class="text-orange-400">Sumedang Creative Center</span> </h1>
            </div>
        </div>
    </section>

    <!-- content section -->
    <section class="h-screen">
        <!-- content -->
        <div class="container p-2 max-w-md mx-auto sm:max-w-xl sm:max-w-full lg:max-w-full">
            <div class=" shadow-1lg p-6 ">
                <!-- Pengenalan SCC -->
                <div class="flex">
                    <div class="lg:block lg:flex lg:w-1/2 hidden">
                       <img class=" rounded-xl" src="{{asset('images/scc_building.png')}}" alt="sccimg">
                   </div>
                   <div class="lg:flex-1 lg:p-8">
                       <h2 class="text-2xl font-bold">Apa itu SCC?</h2>
                       <img class="mt-2 rounded-xl lg:hidden sm:w-full" src="{{asset('images/scc_building.png')}}" alt="sccimg">
                       <p class="text-sm mt-4">Sumedang Crative Center (SCC) adalah pusat kreativitas di Kabupaten Sumedang yang didedikasikan untuk mendukung perkembangan seni, budaya dan inovasi. Dengan fasilitas modern seperti ruang pertemuan, studio kreatif, ruang pameran, ruang editing, area diskusi dan ruang lainnya, SCC memberikan tempat yang nyaman dan inspiratif untuk berbagai kegiatan mulai dari workshop, pameran seni, hingga acara komunitas.</p>
                       <div class="mt-6">
                           <a href="/" class=" px-5 py-3 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out">Selengkapnya</a>
                       </div>
                   </div>    
                </div>
                <!-- Pengenalan SCC END -->

                <!-- Card Ruangan -->
                <div class="mt-8 ">
                    <h2 class="text-2xl font-bold">Ruangan yang tersedia</h2>
                </div>
                <div class="container">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="mx-auto rounded-xl bg-base-100 w-72 shadow-lg my-4">
                                <figure>
                                    <img class="rounded"
                                    src="{{asset('images/scc_building.png')}}"
                                    alt="Ruang Kelas" />
                                </figure>
                                <div class="p-4">
                                    <h2 class="font-semibold text-lg">Ruang Kelas</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <button class="mt-2 px-5 py-2 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out"><a href="">Booking</a></button>
                                </div>
                            </div>
                            <div class="mx-auto rounded-xl bg-base-100 w-72 shadow-lg my-4">
                                <figure>
                                    <img class="rounded"
                                    src="{{asset('images/scc_building.png')}}"
                                    alt="Ruang Kelas" />
                                </figure>
                                <div class="p-4">
                                    <h2 class="font-semibold text-lg">Ruang Kelas</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <button class="mt-2 px-5 py-2 rounded-lg  text-white font-semibold bg-orange-400 hover:bg-orange-500 transition ease-in-out"><a href="">Booking</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div >
                
                <!-- Card Ruangan END -->

            </div>
        </div>
        <!-- Content END -->
    </section>

</x-app-layout>

<div class="sm:px-6 lg:px-24">
    <x-bg-card>
        <div>
            <div class="bg-orange-200 rounded-b-lg">
                <div class="p-5">
                    <h2 class="font-bold text-xl ">{{ $pages[$currentPage]['heading'] }}</h2>
                    <p class="text-sm">{{ $pages[$currentPage]['subheading'] }}</p>
                </div>
            </div>
            @if ($currentPage == 1)
                <div class="m-4 text-sm whitespace-pre-line">
                    <p class="leading-8"> <span class="font-bold underline" >KETENTUAN PENGGUNAAN RUANGAN GEDUNG SCC</span><br>
                    <div class="pl-4">
                    <span>1. Sesuai SOP Gedung Sumedang Creative Center, Jenis kegiatan <span class="font-bold italic">WAJIB berhubungan dengan 17 sub sektor ekonomi kreatif</span> (apabila terdapat kegiatan menyimpang dari 17 sub sektor ekonomi kreatif, pihak pengelola berhak memberhentikan kegiatan). <br>
                2. penggunaan ruangan/ kelas <span class="font-bold underline italic">MAKSIMAL DURASI 3 JAM PEMAKAIAN, DIMULAI PUKUL 08.00 WIB - KELIPATANNYA  DAN DI TUTUP PADA PUKUL 20.00 WIB </span>(apabila terdapat kegiatan kelas melewati durasi yang ditentukan, pihak pengelola berhak memberhentikan kegiatan)</span> <br>
                    </div>

                    <span class="font-bold" >SEBELUM MENGISI SILAHKAN MELIHAT JADWAL KETERSEDIAAN KELAS TERLEBIH DAHULU UNTUK MENGHINDARI MENUMPUKNYA JADWAL DI WAKTU DAN RUANGAN YANG SAMA.</span> <br>
                    <span class="font-bold" >Klik Disini <a href="https://docs.google.com/spreadsheets/d/1Dq2AW46XR-v0pRXNvO7Gm3enzWvqIk_4_C-tsl3gaps/edit?resourcekey#gid=440145345" class="underline decoration-solid text-blue-400">Lihat Jadwal</a>.</span><br>
                    <span class="font-bold underline" >KETERSEDIAAN RUANGAN/ KELAS UNTUK LATIHAN SENI PERTUNJUKAN YANG BISA DIPAKAI :</span><br>
                    <div class="pl-4">
                    <span class="font-semibold">1. RUANG AUDITORIUM ( KAPASITAS 30 ORANG ) <br>
                    2. RUANG THEATER ( KAPASITAS 15 ORANG ) <br>
                    3. RUANG SENI RUPA ( KAPASITAS 15 ORANG ) <br>
                    </div>
                    <span >Contact Person Pengelola Gedung SCC :
                - 087885550056 (Abah Yadi Piteuk)
                - 085793589992 ( Iwan )</span> <br>

                    </p>
                </div>
            @endif
            @if ($currentPage == 2)
                <form class="m-4" method="POST" wire:submit.prevent="register">
                    @csrf
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2">
                        <div class="sm:col-span-full mb-6">
                            <x-input-label for="namaLengkap" class="block text-sm/6 font-medium text-gray-900">Nama (Sesuai KTP)</x-input-label>
                            <x-text-input id="namaLengkap" placeholder="Nama Lengkap" class="block mt-1 w-full p-2.5 border-gray-300" type="text" name="nama_lengkap" :value="old('text')" wire:model="nama_lengkap" />

                            <span class="text-red-500 text-xs">@error('nama_lengkap'){{$message}}@enderror</span>
                        </div>

                        <div class="sm:col-span-full mb-6">
                            <x-input-label for="namaKomunitas" class="block text-sm/6 font-medium text-gray-900">Nama Komunitas/Organisasi/Instansi</x-input-label>
                            <x-text-input id="namaKomunitas" placeholder="Nama Komunitas/Organisasi/Instansi" class="block mt-1 w-full p-2.5 border-gray-300 " type="text" name="nama_komunitas" :value="old('text')" wire:model="nama_komunitas" />
                            <span class="text-red-500 text-xs">@error('nama_komunitas'){{$message}}@enderror</span>
                        </div>

                        <div class="sm:col-span-full mb-6">
                            <x-input-label for="alamat" class="block text-sm/6 font-medium text-gray-900">Alamat</x-input-label>
                            <x-text-input id="alamat" placeholder="Alamat" class="block mt-1 w-full p-2.5 border-gray-300 " type="text" name="alamat" :value="old('text')" wire:model="alamat" />
                            <span class="text-red-500 text-xs">@error('alamat'){{$message}}@enderror</span>
                        </div>

                        <div class="m:col-span-2 sm:col-start-1 mb-6 sm:ml-1 mr-4">
                            <x-input-label for="desa" class="block text-sm/6 font-medium text-gray-900">Nama Desa</x-input-label>
                            <x-text-input id="desa" placeholder="Nama Desa" class="block mt-1 w-full p-2.5 border-gray-300 " type="text" name="desa" :value="old('text')" wire:model="desa" />
                            <span class="text-red-500 text-xs">@error('desa'){{$message}}@enderror</span>
                        </div>

                        <div class="m:col-span-2 mb-6">
                            <x-input-label for="kecamatan" class="block text-sm/6 font-medium text-gray-900">Nama Kecamatan</x-input-label>
                            <x-text-input id="kecamatan" placeholder="Nama Kecamatan" class="block mt-1 w-full p-2.5 border-gray-300 " type="text" name="kecamatan" :value="old('text')" wire:model="kecamatan"/>
                            <span class="text-red-500 text-xs">@error('kecamatan'){{$message}}@enderror</span>
                        </div>

                        <div class="sm:col-span-full mb-6">
                            <x-input-label for="telepon" class="block text-sm/6 font-medium text-gray-900">No. Whatsapp aktif</x-input-label>
                            <x-text-input id="telepon" placeholder="+62812345678" class="block mt-1 w-full p-2.5 border-gray-300 " type="number" name="telepon" :value="old('text')" wire:model="telepon" />
                            <span class="text-red-500 text-xs">@error('telepon'){{$message}}@enderror</span>
                        </div>
                        @endif
                        @if ($currentPage == 3)
                            <div class="px-4 m-4 sm:grid-cols-2">
                                <div class="sm:col-span-full mb-6">
                                    <x-input-label for="nama_kegiatan" class="block text-sm/6 font-medium text-gray-900">Nama Kegiatan</x-input-label>
                                    <x-text-input id="nama_kegiatan" placeholder="Nama Kegiatan" class="block mt-1 w-full p-2.5 border-gray-300 " type="text" name="nama_kegiatan" :value="old('text')" wire:model="nama_kegiatan"/>
                                    <span class="text-red-500 text-xs">@error('nama_kegiatan'){{$message}}@enderror</span>
                                </div>

                                <div class="sm:col-span-full mb-6">
                                    <x-input-label for="nama-kegiatan" class="block text-sm/6 font-medium text-gray-900">Deskripsi Kegiatan</x-input-label>
                                    <div class="mt-2">
                                        <textarea name="deskripsi_kegiatan" id="deskripsi_kegiatan" rows="3" class="block w-full rounded-md focus:border-[#FF852F] focus:ring-[#FF852F] bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:border-[#FF852F] sm:text-sm/6" wire:model="deskripsi_kegiatan"></textarea>
                                    </div>
                                    <span class="text-red-500 text-xs">@error('deskripsi_kegiatan'){{$message}}@enderror</span>
                                </div>

                                <div class="sm:col-span-full mb-6">
                                    <x-input-label for="tanggal" class="block text-sm/6 font-medium text-gray-900">Tanggal</x-input-label>
                                    <x-text-input id="tanggal" placeholder="DD/MM/YYYY" class="block mt-1 w-full p-2.5 border-gray-300 " type="date" name="tanggal" :value="old('text')" wire:model="tanggal"/>
                                    <span class="text-red-500 text-xs">@error('tanggal'){{$message}}@enderror</span>
                                </div>
                                <div class="m:col-span-2 sm:col-start-1 mb-6 sm:ml-1">
                                    <x-input-label for="start_time" class="block text-sm/6 font-medium text-gray-900">Waktu Mulai</x-input-label>
                                    <x-text-input id="start_time" placeholder="" class="block mt-1 w-full p-2.5 border-gray-300 " type="time" name="start_time" wire:model="start_time"/>
                                    <span class="text-red-500 text-xs">@error('start_time'){{$message}}@enderror</span>
                                </div>
                                <x-input-error :messages="$errors->get('text')" class="mt-2" />

                                <div class="m:col-span-2 mb-6">
                                    <x-input-label for="end_time" class="block text-sm/6 font-medium text-gray-900">Waktu Selesai</x-input-label>
                                    <x-text-input id="end_time" placeholder="" class="block mt-1 w-full p-2.5 border-gray-300 " type="time" name="end_time" wire:model="end_time"/>
                                    <span class="text-red-500 text-xs">@error('end-time'){{$message}}@enderror</span>
                                </div>
                                <x-input-error :messages="$errors->get('text')" class="mt-2" />
                                @if (session()->has('error'))
                                    <div class="mt-2 text-sm text-red-600 space-y-1">{{ session('error') }}</div>
                                @endif
                            </div>
                        @endif

                    </div>
                    <div class="flex items-center justify-between px-4 py-2 w-full bg-gray-50 text-right sm:px-6">
                        @if ($currentPage == 1)
                            <div></div>
                        @else
                            <button wire:click="goToPreviousPage" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">Back</button>
                        @endif
                        @if ($currentPage == 3)
                            <button wire:click="store" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#FF852F] hover:bg-[#ff7636] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF852F]">Submit</button>
                        @else
                            <button wire:click="goToNextPage" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#FF852F] hover:bg-[#ff7636] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF852F]">Next</button>
                        @endif
                    </div>
                </form>
        </div>
    </x-bg-card>
</div>

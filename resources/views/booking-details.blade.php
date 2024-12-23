<x-app-layout>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
         style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        <div class="@container">
            <div class="@[480px]:px-4 @[480px]:py-3">
                <div
                    class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden bg-white @[480px]:rounded-xl min-h-80"
                    style='background-image: url("{{\Illuminate\Support\Facades\Storage::url($room->images)}}");'
                >
                </div>
            </div>
        </div>
        <h3 class=" text-[#111517] text-[22px] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2
                         pt-4">{{$room->room_name}}</h3>
        <h2 class="text-[#111517] font-semibold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Fasilitas
            Ruangan</h2>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 items-center">
                <div class="text-[#111517]" data-icon="Car" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                         viewBox="0 0 256 256">
                        <path
                            d="M240,112H229.2L201.42,49.5A16,16,0,0,0,186.8,40H69.2a16,16,0,0,0-14.62,9.5L26.8,112H16a8,8,0,0,0,0,16h8v80a16,16,0,0,0,16,16H64a16,16,0,0,0,16-16V192h96v16a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16V128h8a8,8,0,0,0,0-16ZM69.2,56H186.8l24.89,56H44.31ZM64,208H40V192H64Zm128,0V192h24v16Zm24-32H40V128H216ZM56,152a8,8,0,0,1,8-8H80a8,8,0,0,1,0,16H64A8,8,0,0,1,56,152Zm112,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H176A8,8,0,0,1,168,152Z"
                        ></path>
                    </svg>
                </div>
                <h2 class="text-[#111517] text-base font-semibold leading-tight">Free parking</h2>
            </div>
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 items-center">
                <div class="text-[#111517]" data-icon="Broadcast" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                         viewBox="0 0 256 256">
                        <path
                            d="M128,88a40,40,0,1,0,40,40A40,40,0,0,0,128,88Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,152Zm73.71,7.14a80,80,0,0,1-14.08,22.2,8,8,0,0,1-11.92-10.67,63.95,63.95,0,0,0,0-85.33,8,8,0,1,1,11.92-10.67,80.08,80.08,0,0,1,14.08,84.47ZM69,103.09a64,64,0,0,0,11.26,67.58,8,8,0,0,1-11.92,10.67,79.93,79.93,0,0,1,0-106.67A8,8,0,1,1,80.29,85.34,63.77,63.77,0,0,0,69,103.09ZM248,128a119.58,119.58,0,0,1-34.29,84,8,8,0,1,1-11.42-11.2,103.9,103.9,0,0,0,0-145.56A8,8,0,1,1,213.71,44,119.58,119.58,0,0,1,248,128ZM53.71,200.78A8,8,0,1,1,42.29,212a119.87,119.87,0,0,1,0-168,8,8,0,1,1,11.42,11.2,103.9,103.9,0,0,0,0,145.56Z"
                        ></path>
                    </svg>
                </div>
                <h2 class="text-[#111517] text-base font-semibold leading-tight">Wifi</h2>
            </div>
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 items-center">
                <div class="text-[#111517]" data-icon="Television" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                         viewBox="0 0 256 256">
                        <path
                            d="M216,64H147.31l34.35-34.34a8,8,0,1,0-11.32-11.32L128,60.69,85.66,18.34A8,8,0,0,0,74.34,29.66L108.69,64H40A16,16,0,0,0,24,80V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64ZM40,80H144V200H40ZM216,200H160V80h56V200Zm-16-84a12,12,0,1,1-12-12A12,12,0,0,1,200,116Zm0,48a12,12,0,1,1-12-12A12,12,0,0,1,200,164Z"
                        ></path>
                    </svg>
                </div>
                <h2 class="text-[#111517] text-base font-semibold leading-tight">Cable TV</h2>
            </div>
        </div>
        <x-table>
            <h2 class="text-[#111517] text-base font-semibold leading-tight pb-3">History Booking</h2>
            <x-table.container>
                <x-table.table>
                    <x-table.thead>
                        <x-table.tr>
                            <x-table.th>
                                Nama
                            </x-table.th>
                            <x-table.th>
                                Tanggal
                            </x-table.th>
                            <x-table.th>
                                Dari jam
                            </x-table.th>
                            <x-table.th>
                                Sampai jam
                            </x-table.th>
                            <x-table.th>
                                Status
                            </x-table.th>
                        </x-table.tr>
                    </x-table.thead>
                    <x-table.tbody>
                        @foreach($booking as $booking)
                            <x-table.tr class="border-t border-t-[#d1dce6]">
                                <x-table.td>
                                    {{$booking->nama_lengkap}}
                                </x-table.td>
                                <x-table.td>
                                    {{$booking->tanggal}}
                                </x-table.td>
                                <x-table.td>
                                    {{$booking->start_time}}
                                </x-table.td>
                                <x-table.td>
                                    {{$booking->end_time}}
                                </x-table.td>
                                <x-table.td class="w-60">
                                    @if($booking->status == 'belum diverifikasi')
                                        <button
                                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-orange-400 text-white text-sm font-medium leading-normal"
                                        >
                                            <span class="truncate">{{$booking->status}}</span>
                                        </button>
                                    @elseif($booking->status == 'diverifikasi')
                                        <button
                                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-green-400 text-white text-sm font-medium leading-normal"
                                        >
                                            <span class="truncate">{{$booking->status}}</span>
                                            @else
                                                <button
                                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-red-400 text-white. text-sm font-medium leading-normal"
                                                >
                                                    <span class="truncate">{{$booking->status}}</span>
                                    @endif
                                </x-table.td>
                            </x-table.tr>
                        @endforeach
                    </x-table.tbody>
                </x-table.table>
            </x-table.container>
        </x-table>
        <div class="flex justify-center">
            <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 max-w-[480px] justify-center">
                <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-orange-400 hover:bg-orange-500 transition ease-in-out text-white text-base font-bold leading-normal tracking-[0.015em] grow"
                    onclick="window.location.href='{{route('booking', $room->id)}}'">
                    <span class="truncate">Booking</span>
                </button>
            </div>
        </div>
        <div class="h-5 bg-white"></div>
    </div>
</x-app-layout>

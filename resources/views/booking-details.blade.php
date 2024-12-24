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
        <h1 class=" text-[#111517] text-xl font-bold leading-tight tracking-[-0.015em] px-4 pb-2
                         pt-4 uppercase">{{$room->room_name}}</h1>
        <h3 class="text-[#111517] font-semibold leading-tight tracking-[-0.015em] px-4 pt-5">Fasilitas
            Ruangan
        <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
            @foreach($room->facility as $facility)
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 items-center">
                <div class="text-[#111517]" data-icon="Car" data-size="15px" data-weight="regular">
                    <img alt="icon" src="{{\Illuminate\Support\Facades\Storage::url($facility->icon)}}" class="w-8 h-8">
                </div>
                <h2 class="text-[#111517] text-base font-semibold leading-tight">{{$facility->facility_name}}</h2>
            </div>
            @endforeach
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
                                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-red-400 text-white text-sm font-medium leading-normal"
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

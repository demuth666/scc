<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking History') }}
        </h2>
    </x-slot>

    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
         style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        @foreach($booking as $booking)
            <div class="flex items-center gap-4 bg-white px-4 py-3 justify-between">
                <div class="flex items-center gap-4">
                    <div
                        class="bg-center bg-no-repeat aspect-video bg-cover rounded-lg h-11 w-fit"
                        style='background-image: url("{{\Illuminate\Support\Facades\Storage::url($booking->room->images)}}");'
                    ></div>
                    <div class="flex flex-col justify-center">
                        <p class="text-[#111517] text-base font-medium leading-normal line-clamp-1">
                            {{$booking->room->room_name}}
                        </p>
                        <p class="text-[#647987] text-sm font-normal leading-normal line-clamp-2">{{ \Carbon\Carbon::parse($booking->tanggal)->translatedFormat('d F Y') }}</p>
                    </div>
                </div>
                <div class="shrink-0">@if($booking->status == 'belum diverifikasi')
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
                    @endif</div>
            </div>
        @endforeach
    </div>
</x-app-layout>

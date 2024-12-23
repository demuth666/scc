<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Rooms;
use Livewire\Component;

class BookingForm extends Component
{
    public $room;
    public $nama_lengkap;
    public $nama_komunitas;
    public $alamat;
    public $desa;
    public $kecamatan;
    public $telepon;
    public $nama_kegiatan;
    public $deskripsi_kegiatan;
    public $tanggal;
    public $start_time;
    public $end_time;

    public $totalPage = 3;
    public $currentPage = 1;

    public function mount($id){
        $this->currentPage = 1;
        $this->room = Rooms::find($id);
    }

    public function store()
    {
        $isBooked = Booking::where('room_id', $this->room->id)
            ->where('tanggal', $this->tanggal)
            ->where(function ($query) {
                $query->whereBetween('start_time', [$this->start_time, $this->end_time])
                    ->orWhereBetween('end_time', [$this->start_time, $this->end_time]);
            })
            ->exists();

        if ($isBooked) {
            session()->flash('error', 'Ruangan sudah dibooking di tanggal dan jam tersebut.');
            return;
        }

        $booking = new Booking();

        $booking->room_id = $this->room->id;
        $booking->nama_lengkap = $this->nama_lengkap;
        $booking->nama_komunitas = $this->nama_komunitas;
        $booking->alamat = $this->alamat;
        $booking->desa = $this->desa;
        $booking->kecamatan = $this->kecamatan;
        $booking->telepon = $this->telepon;
        $booking->nama_kegiatan = $this->nama_kegiatan;
        $booking->deskripsi_kegiatan = $this->deskripsi_kegiatan;
        $booking->tanggal = $this->tanggal;
        $booking->start_time = $this->start_time;
        $booking->end_time = $this->end_time;

        $booking->save();
        return redirect(route('booking.success'));
    }


    public $pages = [
        1 => [
            'heading' => 'Ketentuan Penggunaan',
            'subheading' => '',
        ],
        2 => [
            'heading' => 'DATA PEMINJAMAN',
            'subheading' => 'Isi data diri dengan benar',
        ],
        3 => [
            'heading' => 'DATA PEMINJAMAN',
            'subheading' => 'Isi kegiatan dengan jelas',
        ],
    ];

    public function goToNextPage()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->resetErrorBag();
        $this->currentPage--;
    }

    public function validateData(){
        if($this->currentPage == 2){
            $this->validate([
                'nama_lengkap' => 'required|string',
                'nama_komunitas' => 'required|string',
                'alamat' => 'required|string',
                'desa' => 'required|string',
                'kecamatan' => 'required|string',
                'telepon' => 'required',
            ]);
        }
        if($this->currentPage == 3){
            $this->validate([
                'nama_kegiatan' => 'required',
                'deskripsi_kegiatan' => 'required',
                'tanggal' => 'required',
                'start_time' => 'required',
                'end_time' => 'required',
            ]);
        }
    }

    protected $messages = [
        'nama_lengkap.required' => 'Nama Lengkap wajib diisi.',
        'nama_lengkap.string' => 'Nama Lengkap harus berupa string.',
        'nama_komunitas.required' => 'Nama Komunitas wajib diisi.',
        'alamat.required' => 'Alamat wajib diisi.',
        'desa.required' => 'Desa wajib diisi.',
        'kecamatan.required' => 'Kecamatan wajib diisi.',
        'telepon.required' => 'Telepon wajib diisi.',
        'nama_kegiatan.required' => 'Nama Kegiatan wajib diisi.',
        'deskripsi_kegiatan.required' => 'Deskripsi Kegiatan wajib diisi.',
        'tanggal.required' => 'Tanggal wajib diisi.',
        'start_time.required' => 'Tanggal Wajib diisi.',
        'end_time.required' => 'Tanggal Wajib diisi.',
    ];

    public function render()
    {
        return view('livewire.booking-form');
    }
}


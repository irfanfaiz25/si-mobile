@extends('admin.layouts.main')

@section('content')
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>
            <ul class="flex items-center text-sm ml-4">
                <li class="text-gray-600 mr-2 font-semibold">Dashboard</li>
            </ul>
        </div>
        <div class="p-6">

            @livewire('card-dashboard')

            <div class="grid grid-cols-1 gap-6 mb-6">
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                    <div class="flex justify-center mb-6">
                        <p class="font-bold text-2xl">SI-MOBILE</p>
                    </div>
                    <div class="text-md font-normal justify-center">
                        <p>
                            Aplikasi "Simobile RSUD Simo Boyolali" adalah sebuah aplikasi yang dirilis
                            pada 01 Juli 2019 dikembangkan untuk membantu pengelolaan informasi dan pelayanan di RSUD Simo
                            Boyolali. Aplikasi ini dirancang untuk mempermudah berbagai kegiatan administratif dan layanan
                            di
                            RSUD Simo, seperti manajemen pasien, rekam medis, jadwal dokter, daftar anggota keluarga, cek
                            riwayat kunjunga, kartu elektronik pasien, reservasi pendaftaran rawat jalan online, informasi
                            ketersediaan bed secara real time, informasi jadwal poli dan dokter, chat online dengan admin,
                            kirim
                            kritik dan saran online, verifikasi kode lewat email, dan informasi layanan kesehatan lainnya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mb-6">
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                    @livewire('gender-chart')
                </div>
            </div>
        </div>
    </main>
@endsection

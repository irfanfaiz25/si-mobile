@extends('user.layouts.main')

@section('content')
    <div class="bg-gray-200 flex justify-center">
        <div class="my-5 container mx-auto">
            <div class="lg:max-w-2xl mx-auto bg-white rounded-md shadow-md overflow-hidden border-t-4 border-indigo-500">
                <div class="px-6 py-4">
                    <h2 class="text-3xl text-center font-semibold text-gray-800">KUISIONER</h2>
                    <p class="mt-6 text-gray-600">Aplikasi "Simobile RSUD Simo Boyolali" adalah sebuah aplikasi yang dirilis
                        pada 01 Juli 2019 dikembangkan untuk membantu pengelolaan informasi dan pelayanan di RSUD Simo
                        Boyolali. Aplikasi ini dirancang untuk mempermudah berbagai kegiatan administratif dan layanan di
                        RSUD Simo, seperti manajemen pasien, rekam medis, jadwal dokter, daftar anggota keluarga, cek
                        riwayat kunjunga, kartu elektronik pasien, reservasi pendaftaran rawat jalan online, informasi
                        ketersediaan bed secara real time, informasi jadwal poli dan dokter, chat online dengan admin, kirim
                        kritik dan saran online, verifikasi kode lewat email, dan informasi layanan kesehatan lainnya.</p>
                </div>
                <hr>

                @livewire('user-questions')

                <div class="px-6 py-4 bg-gray-100 flex justify-center">
                    <span><i class="fa fa-copyright pr-1"></i>Si-Mobile</span>
                    {{-- <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#tag1</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#tag2</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#tag3</span> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

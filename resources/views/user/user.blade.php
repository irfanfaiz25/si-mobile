@extends('user.layouts.main')

@section('content')
    <div class="bg-gray-200 flex justify-center h-screen">
        <div class="mt-4 container mx-auto">
            <div class="lg:max-w-2xl mx-auto bg-white rounded-md shadow-md overflow-hidden border-t-4 border-indigo-500">
                <div class="px-6 py-4">
                    <h2 class="text-3xl text-center font-semibold text-gray-800">KUISIONER</h2>
                    <p class="mt-6 text-gray-600">Si-Mobile adalah lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Asperiores
                        exercitationem, vero corporis laborum quam autem maxime quia et, aliquid illo nemo doloribus in
                        soluta! Autem, aliquid? Et delectus, eos eum tempora repellendus numquam fugiat atque architecto
                        repudiandae sunt molestiae! Accusamus porro odit dolores, excepturi illum reprehenderit hic
                        dignissimos suscipit maiores.</p>
                </div>
                <hr>
                <div class="px-6 py-4">
                    <div class="flex">
                        <div class="flex-none p-4 w-3/12 items-center">
                            <label class="block text-gray-700 text-sm font-medium text-lg" for="name">
                                Nama
                            </label>
                        </div>
                        <div class="flex-grow p-4">
                            <input
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                id="name" type="text" placeholder="Enter your name">
                            <div class="border-b border-gray-500"></div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-none p-4 w-3/12 items-center">
                            <label class="block text-gray-700 text-sm font-medium text-lg" for="gender">
                                Jenis Kelamin
                            </label>
                        </div>
                        <div class="flex-grow p-4">
                            <select
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                id="gender" type="text">
                                <option value="" selected disabled>pilih jenis kelamin</option>
                                <option value="">laki-laki</option>
                                <option value="">perempuan</option>
                            </select>
                            <div class="border-b border-gray-500"></div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-none p-4 w-3/12 items-center">
                            <label class="block text-gray-700 text-sm font-medium text-lg" for="date">
                                Tanggal
                            </label>
                        </div>
                        <div class="flex-grow p-4">
                            <input
                                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                                id="date" type="date">
                            <div class="border-b border-gray-500"></div>
                        </div>
                    </div>
                </div>
                <hr>

                <livewire:user-questions />

                <div class="px-6 py-4 bg-gray-100">
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

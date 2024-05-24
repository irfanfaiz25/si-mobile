<div class="px-6 py-4">

    <form wire:submit.prevent='submit'>
        <div class="flex">
            <div class="flex-none p-4 w-3/12 items-center">
                <label class="block text-gray-700 text-sm font-medium text-lg" for="name">
                    Nama
                </label>
            </div>
            <div class="flex-grow p-4">
                <input wire:model='respondentName'
                    class="@error('respondentName') border-red-500 @enderror appearance-none bg-transparent w-full text-gray-700 mr-3 py-1 px-2 border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                    id="name" type="text" placeholder="Enter your name">
                @error('respondentName')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div class="flex">
            <div class="flex-none p-4 w-3/12 items-center">
                <label class="block text-gray-700 text-sm font-medium text-lg" for="gender">
                    Jenis Kelamin
                </label>
            </div>
            <div class="flex-grow p-4">
                <select wire:model='respondentGender'
                    class="@error('respondentGender') border-red-500 @enderror appearance-none bg-transparent w-full text-gray-700 mr-3 py-1 px-2 border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                    id="gender" type="text">
                    <option value="" selected>-- Pilih --</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                </select>
                @error('respondentGender')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div class="flex">
            <div class="flex-none p-4 w-3/12 items-center">
                <label class="block text-gray-700 text-sm font-medium text-lg" for="date">
                    Tanggal
                </label>
            </div>
            <div class="flex-grow p-4">
                <input wire:model='date'
                    class="@error('date') border-red-500 @enderror appearance-none bg-transparent w-full text-gray-700 mr-3 py-1 px-2 border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-indigo-600 peer"
                    id="date" type="date">
                @error('date')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <hr>

        <h2 class="mt-4 text-xl text-center font-bold text-gray-800">PERTANYAAN</h2>
        @foreach ($categories as $category)
            <h2 class="mt-4 text-xl text-left font-semibold text-gray-800 uppercase">{{ $category->name }}</h2>
            @foreach ($category->questions as $question)
                <h4 class="text-lg mt-3 font-medium text-gray-800">
                    <li>{{ $question->text }}</li>
                </h4>
                {{-- <label class="block text-gray-700 text-sm font-bold mb-2">
                Pilih salah satu:
            </label> --}}
                <div class="block md:flex items-center text-gray-700 mt-1 ml-5">
                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option1{{ $question->id }}"
                        class="mr-1" value="sangat tidak {{ $question->answer_option }}">
                    <label for="option1{{ $question->id }}" class="mr-4">sangat tidak
                        {{ $question->answer_option }}</label>

                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option2{{ $question->id }}"
                        class="mr-1" value="tidak {{ $question->answer_option }}">
                    <label for="option2{{ $question->id }}" class="mr-4">tidak
                        {{ $question->answer_option }}</label>

                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option3{{ $question->id }}"
                        class="mr-1" value="ragu-ragu">
                    <label for="option3{{ $question->id }}" class="mr-4">ragu-ragu</label>

                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option4{{ $question->id }}"
                        class="mr-1" value="{{ $question->answer_option }}">
                    <label for="option4{{ $question->id }}" class="mr-4">{{ $question->answer_option }}</label>

                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option5{{ $question->id }}"
                        class="mr-1" value="sangat {{ $question->answer_option }}">
                    <label for="option5{{ $question->id }}" class="mr-4">sangat
                        {{ $question->answer_option }}</label>

                </div>
            @endforeach
        @endforeach
        <div class="flex justify-end mb-2 mt-8">
            <button wire:click='resetForm' type="button"
                class="bg-gray-200 hover:bg-gray-600 text-gray-600 hover:text-gray-200 font-bold py-2 px-6 mr-2 rounded">Reset</button>
            <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-6 rounded">Submit</button>
        </div>
    </form>

    @if (session('success'))
        <div id="alert-notification" class="mb-3 px-8 py-6 bg-green-500 text-white flex justify-between rounded">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28"
                    fill="currentColor">
                    <path
                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z">
                    </path>
                </svg>
                <p class="pl-3">{{ session('success') }}</p>
            </div>
            <button onclick="hideAlert()" class="text-green-100 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    @endif

</div>

@push('script')
    <script>
        function hideAlert() {
            var alert = document.getElementById("alert-notification")
            alert.classList.add("hidden")
        }
    </script>
@endpush

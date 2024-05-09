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
                <select wire:model='respondentGender'
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                    id="gender" type="text">
                    <option value="" selected>-- Pilih --</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
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
                <input wire:model='date'
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                    id="date" type="date">
                <div class="border-b border-gray-500"></div>
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
                        class="mr-1" value="sangat tidak {{ $this->optionCategory($question->category->name) }}">
                    <label for="option1{{ $question->id }}" class="mr-4">sangat tidak
                        {{ $this->optionCategory($question->category->name) }}</label>

                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option2{{ $question->id }}"
                        class="mr-1" value="tidak {{ $this->optionCategory($question->category->name) }}">
                    <label for="option2{{ $question->id }}" class="mr-4">tidak
                        {{ $this->optionCategory($question->category->name) }}</label>

                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option3{{ $question->id }}"
                        class="mr-1" value="ragu-ragu">
                    <label for="option3{{ $question->id }}" class="mr-4">ragu-ragu</label>

                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option4{{ $question->id }}"
                        class="mr-1" value="{{ $this->optionCategory($question->category->name) }}">
                    <label for="option4{{ $question->id }}"
                        class="mr-4">{{ $this->optionCategory($question->category->name) }}</label>

                    <input wire:model='answers.{{ $question->id }}' type="radio" id="option5{{ $question->id }}"
                        class="mr-1" value="sangat {{ $this->optionCategory($question->category->name) }}">
                    <label for="option5{{ $question->id }}" class="mr-4">sangat
                        {{ $this->optionCategory($question->category->name) }}</label>

                </div>
            @endforeach
        @endforeach
        <div class="flex justify-center mb-2 mt-6">
            <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-6 rounded">Submit</button>
        </div>
    </form>
</div>

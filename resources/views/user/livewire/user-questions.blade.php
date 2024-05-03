<div class="px-6 py-4">
    <h2 class="text-xl text-center font-bold text-gray-800">PERTANYAAN</h2>
    @foreach ($categories as $category)
        <h2 class="mt-4 text-xl text-left font-semibold text-gray-800 uppercase">{{ $category->category }}</h2>
        @foreach ($category->questions as $question)
            <h4 class="text-lg mt-3 font-medium text-gray-800">
                <li>{{ $question->question }}</li>
            </h4>
            {{-- <label class="block text-gray-700 text-sm font-bold mb-2">
                Pilih salah satu:
            </label> --}}
            <div class="block md:flex items-center text-gray-700 mt-1 ml-5">
                <input type="radio" id="option1" name="value1" class="mr-1">
                <label for="option1" class="mr-4">sangat tidak {{ $question->option }}</label>

                <input type="radio" id="option2" name="value2" class="mr-1">
                <label for="option2" class="mr-4">tidak {{ $question->option }}</label>

                <input type="radio" id="option3" name="value3" class="mr-1">
                <label for="option3" class="mr-4">ragu-ragu</label>

                <input type="radio" id="option4" name="value4" class="mr-1">
                <label for="option4" class="mr-4">{{ $question->option }}</label>

                <input type="radio" id="option5" name="value5" class="mr-1">
                <label for="option5" class="mr-4">sangat {{ $question->option }}</label>
            </div>
        @endforeach
    @endforeach
</div>

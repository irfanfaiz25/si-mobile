<div class="px-6 py-4">
    <h2 class="text-xl text-left font-bold text-gray-800">PERTANYAAN</h2>
    @foreach ($categories as $category)
        <h2 class="mt-4 text-xl text-left font-semibold text-gray-800">{{ $category->category }}</h2>
        @foreach ($category->questions as $question)
            <h4 class="text-lg mt-2 font-medium">
                <li>{{ $question->question }}</li>
            </h4>
            {{-- <label class="block text-gray-700 text-sm font-bold mb-2">
                Pilih salah satu:
            </label> --}}
            <div class="flex items-center text-gray-800 mt-1">
                <input type="radio" id="option1" name="value" class="mr-2">
                <label for="option1" class="mr-4">sangat kurang baik</label>

                <input type="radio" id="option2" name="value" class="mr-2">
                <label for="option2" class="mr-4">kurang baik</label>

                <input type="radio" id="option3" name="value" class="mr-2">
                <label for="option3" class="mr-4">baik</label>

                <input type="radio" id="option4" name="value" class="mr-2">
                <label for="option4" class="mr-4">cukup baik</label>

                <input type="radio" id="option5" name="value" class="mr-2">
                <label for="option5" class="mr-4">sangat baik</label>
            </div>
        @endforeach
    @endforeach
</div>

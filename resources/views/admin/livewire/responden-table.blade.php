<div>

    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">

        <div class="flex justify-between mb-4 items-start">
            <div class="font-semibold capitalize">Data Responden</div>
            <button wire:click='exportReport' type="button"
                class="bg-gray-200 hover:bg-gray-600 text-gray-600 hover:text-gray-200 font-bold py-2 px-6 mr-2 rounded">Export</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[540px]" wire:poll.keep-alive.10s='refreshData'>
                <thead>
                    <tr>
                        <th rowspan="2"
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-500 py-2 px-4 bg-gray-200 text-left">
                            NO</th>
                        <th rowspan="2"
                            class="text-[12px] uppercase tracking-wide font-medium text-gray-500 py-2 px-4 bg-gray-200 text-left">
                            Nama</th>
                        @foreach ($questionsGroupedByCategory as $category => $questions)
                            <th colspan="{{ $questions->count() }}"
                                class="text-[12px] uppercase tracking-wide font-medium text-gray-500 py-2 px-4 bg-gray-200 text-center">
                                {{ $category }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($questionsGroupedByCategory as $category => $questions)
                            @foreach ($questions as $index => $question)
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-500 py-2 px-4 bg-gray-200 text-left">
                                    P{{ $index + 1 }}</th>
                            @endforeach
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @php $serialNumber = 1; @endphp
                    @foreach ($respondents as $respondent)
                        <tr>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span class="text-[13px] font-medium text-gray-700">{{ $serialNumber++ }}</span>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <span
                                    class="text-[13px] font-medium text-gray-700">{{ $respondent['respondent_name'] }}</span>
                            </td>
                            @foreach ($questionsGroupedByCategory as $category => $questions)
                                @foreach ($questions as $question)
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <span
                                            class="text-[13px] font-medium text-gray-700">{{ $respondent['Q' . $question->id] ?? 'N/A' }}</span>
                                    </td>
                                @endforeach
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

</div>

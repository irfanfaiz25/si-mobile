<div>
    <ul class="mt-4">
        <li class="mb-1 group {{ $active_link == 'dashboard' ? 'active' : '' }}">
            <a href="/dashboard"
                class="{{ request()->is('dashboard') ? 'active' : '' }} flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group {{ isset($tab) && $tab == 'question' ? 'active' : '' }}">
            <a
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-questionnaire-line mr-3 text-lg"></i>
                <span class="text-sm">Data Pertanyaan</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                @foreach ($categories as $category)
                    <li class="mb-4">
                        <a href="/question-data/{{ $category }}"
                            class="{{ $active_link == $category ? 'text-red-500' : 'text-gray-300' }} text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3 capitalize">{{ $category }}</a>
                    </li>
                @endforeach

            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-pages-line mr-3 text-lg"></i>
                <span class="text-sm">Data Responden</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-bar-chart-box-line mr-3 text-lg"></i>
                <span class="text-sm">Lihat Hasil</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Performance</a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Information</a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Control</a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ri-settings-2-line mr-3 text-lg"></i>
                <span class="text-sm">Settings</span>
            </a>
        </li>
    </ul>
</div>

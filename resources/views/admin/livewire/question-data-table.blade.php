<div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
    <div class="flex justify-between mb-4 items-start">
        <div class="font-semibold capitalize">{{ $category }}</div>
    </div>
    <form action="" class="flex items-center mb-4">
        <div class="relative w-full mr-2">
            <input type="text"
                class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                placeholder="Search...">
            <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
        </div>
        <select
            class="text-sm py-2 pl-4 pr-10 bg-gray-50 border border-gray-100 rounded-md focus:border-blue-500 outline-none appearance-none bg-select-arrow bg-no-repeat bg-[length:16px_16px] bg-[right_16px_center]">
            <option value="">All</option>
        </select>
    </form>
    <div class="overflow-x-auto">
        <table class="w-full min-w-[540px]">
            <thead>
                <tr>
                    <th
                        class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                        Service</th>
                    <th
                        class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                        Price</th>
                    <th
                        class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                        Clicks</th>
                    <th
                        class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                        <div class="flex items-center">
                            <a href="#"
                                class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create
                                landing page</a>
                        </div>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                        <span class="text-[13px] font-medium text-gray-400">$235</span>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                        <span class="text-[13px] font-medium text-gray-400">1K</span>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                        <div class="dropdown">
                            <button type="button"
                                class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i
                                    class="ri-more-2-fill"></i></button>
                            <ul
                                class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                <li>
                                    <a href="#"
                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

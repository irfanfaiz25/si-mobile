<!-- start: Sidebar -->
<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover">
        <span class="text-lg font-bold text-white ml-3">Logo</span>
    </a>

    @livewire('admin-sidebar', ['active_link' => $active_link])

</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end: Sidebar -->

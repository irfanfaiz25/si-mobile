<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <div class="flex justify-center">
                <img class="mr-2" src="{{ asset('img/simobile-logo.png') }}" alt="simobile-logo" height="100"
                    width="100">
            </div>
            <form wire:submit.prevent='login' class="space-y-4 md:space-y-6" action="#">
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">
                        Username
                    </label>
                    <input wire:model='username' type="text" name="username" id="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input wire:model='password' type="password" name="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        required="">
                </div>
                <div class="pb-7 pt-3">
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                        in</button>
                </div>
            </form>
            @if (session('invalid'))
                <p class="text-red-500">Error</p>
            @endif
        </div>
    </div>
</div>

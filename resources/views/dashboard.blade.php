<x-app-layout>
    <x-slot name="header">

        <div class="relative">

            <div class="h-80 overflow-hidden">
                <img src="https://assets.autoweek.nl/m/5gpya3tbfydx_800.jpg" alt="Banner" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <h2 class="font-semibold text-3xl text-gray-100 bg-gray-800 bg-opacity-50 px-4 py-2 rounded-md shadow-md">
                    {{ __('R4 Club België') }}
                </h2>
            </div>
        </div>

        <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-4"></h2>

            <div class="mb-6 flex flex-col items-center">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">Evenementen die binnenkort plaatsvinden</h3>
                <ul class="flex space-x-4 justify-center">
                    <li class="relative w-48 h-32 bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('https://www.wearetravellers.nl/wp-content/uploads/Belgie-dinant.jpg');">
                        <a href="{{ route('events.detail', ['id' => 57]) }}" class="absolute inset-0 flex items-center justify-center text-blue-500 hover:underline bg-black bg-opacity-50 p-2">Groepsrid Ardennen</a>
                    </li>
                    <li class="relative w-48 h-32 bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('https://mens-en-werk.net/wp-content/uploads/2019/12/bernd-schulz-1JNEZUk3-CU-unsplash-1024x681.jpg');">
                        <a href="{{ route('events.detail', ['id' => 55]) }}" class="absolute inset-0 flex items-center justify-center text-blue-500 hover:underline bg-black bg-opacity-50 p-2">Herfst Meeting</a>
                    </li>
                    <li class="relative w-48 h-32 bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('https://cdn.weerplaza.nl/weerinhetnieuws/articles/article_5666_92e7b423-960_thumb_large.png');">
                        <a href="{{ route('events.detail', ['id' => 56]) }}" class="absolute inset-0 flex items-center justify-center text-blue-500 hover:underline bg-black bg-opacity-50 p-2">Kerst Meeting</a>
                    </li>
                </ul>
            </div>

            <div class="mb-6 flex flex-col items-center">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">Recentste posts van de community</h3>
                <ul class="flex space-x-4 justify-center">
                    <li class="relative w-48 h-32 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                        <a href="{{ route('posts.detail', ['id' => 1]) }}" class="absolute inset-0 flex items-center justify-center text-blue-500 hover:underline p-2">Reservestuk?</a>
                    </li>
                    <li class="relative w-48 h-32 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                        <a href="{{ route('posts.detail', ['id' => 2]) }}" class="absolute inset-0 flex items-center justify-center text-blue-500 hover:underline p-2">Streetrace?</a>
                    </li>
                    <li class="relative w-48 h-32 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                        <a href="{{ route('posts.detail', ['id' => 142]) }}" class="absolute inset-0 flex items-center justify-center text-blue-500 hover:underline p-2">Keuring</a>
                    </li>
                </ul>
            </div>

        </div>
        </div>
        </div>
    </x-slot>


</x-app-layout>
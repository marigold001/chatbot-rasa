<x-app-layout>
    <x-slot name="header">
        <x-header></x-header>
    </x-slot>


    <x-slot name="slot">

        <div class="md:flex sm:justify-center md:justify-evenly bg-gray-800 text-white">
            <div>
                <h2 class="text-center sm:text-center font-black text-6xl pt-48">CSS</h2>
                <h4 class="text-center sm:text-center font-black text-lg m-4 ">The language for styling web pages</h4>
                <div class="flex justify-center">
                    <button class="text-center sm:text-center bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-10 rounded-full">
                        <a href="/tutorials/what-is-css">Learn CSS</a>
                    </button>
                </div>
            </div>
            <div>
                <img style="width: 800px" class="m-auto p-28" src="{{asset('/images/css-frontpage.jpg')}}" alt="CSS">
            </div>
        </div>
    </x-slot>
</x-app-layout>

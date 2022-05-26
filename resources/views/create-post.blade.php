<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!--FormPost-->
                    <div class="w-full ">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST"  action="{{ route('create-post') }}" novalidate>
                            @csrf
                          <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">
                              Titulo
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="titulo" id="titulo" type="text" placeholder="Titulo" required>
                          </div>
                          <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="post">
                              Post
                            </label>
                            <textarea name="post" id="post" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe tu post" required></textarea>
                          </div>
                          <div class="flex items-center justify-between">
                            <input
                            type="submit"
                            value="Crear Post"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg text-center"/>
                          </div>
                        </form>
                        <p class="text-center text-gray-500 text-xs">
                          &copy;{{date('Y')}} Ip-Global.
                        </p>
                      </div>
                    <!--FormPost-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

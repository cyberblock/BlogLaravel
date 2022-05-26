<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if (isset($post))
            @foreach ($post as $value )
            <h4 class="text-xl">Autor: {{$value->user->name}}  </h4>
              <small class="text-slate-600">Creado {{$value->created_at}}</small>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        <h3  class="text-xl m-3 font-semibold inline-block py-1 px-2  rounded text-slate-600  uppercase last:mr-0 mr-1">{{ $value->titulo }}</h3>
                    </div>
                    {{$value->post}}
                </div>
            </div>
            @endforeach
        @endif


            <!--@ (/*$user as $value*/)
              <h4 class="text-xl">Autor: } </h4>
              <small class="text-slate-600">Creado </small>
            @-->



            <!--@ (/*$post as $value*/)

        @-->

        </div>
    </div>
</x-app-layout>

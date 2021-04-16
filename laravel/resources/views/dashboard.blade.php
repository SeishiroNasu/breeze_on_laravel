<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('勤怠管理システム') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="sidebar">
                @include('components/sidebar')
            </div>
            <p></p>

            <div class="col-md-9" mt-5 pr-5>
                <div class="p-4 bg-white shadow w-128 my-2">
                {{ Auth::user()->name_kanji }}さんとしてログインしています！
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

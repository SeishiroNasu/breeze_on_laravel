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

        <div class="col-md-9" mt-5 pr-5>
            <div class="font-bold text-3xl my-2 p-2">
                勤務時間入力
            </div>
            @include('components.attend_form')
            </div>
        </div>
    </div>

</x-app-layout>
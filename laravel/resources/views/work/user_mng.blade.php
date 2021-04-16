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
            ユーザ一覧
          </div>
          <table class="table text-center bg-white my-2 shadow">
            <tr>
              <th class="text-center w-1/12">ID</th>
              <th class="text-center w-1/8">名前</th>
              <th class="text-center w-1/8">所属グループ</th>
              <th class="text-center w-1/2">email</th>
              <th class="text-center w-1/8"></th>
            </tr>
            @foreach($users as $user)
            <tr>
              <td>
                <a href="/project/#">{{ $user->id }}</a>
              </td>
              <td>{{ $user->name_kanji }}</td>
              <td>{{ $user->groups }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <div class="inline-flex">
                  <button type="submit" class="btn btn-xs btn-success" aria-label="Left Align">編集</button>
                  <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align">削除</button>
                </div>
              </td>
            </tr>
            @endforeach
          </table>
          <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="location.href='http://localhost:8080/register'">
            ユーザ追加
          </button>
        </div>
      </div>
    </div>

</x-app-layout>

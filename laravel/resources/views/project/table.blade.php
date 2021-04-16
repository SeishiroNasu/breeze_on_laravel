<table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">名前</th>
        <th class="text-center">email</th>
        <th class="text-center">password</th>
      </tr>
      @foreach($names as $name_en => $name_jp)
      <tr>
        <td>
          <a href="/project/{{ $Users->id }}/edit">{{ $Users->id }}</a>
        </td>
        <td>{{ $Users->name }}</td>
        <td>{{ $Users->email }}</td>
        <td>{{ $Users->password }}</td>
        <td>
          <form action="/project/{{ $Users->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align">削除</button>
          </form>
        </td>
      </tr>
      @endforeach
</table>

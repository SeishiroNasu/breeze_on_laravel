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
            勤務時間閲覧
          </div>
          <table class="table text-center bg-white my-2 shadow" style="border-collapse: collapse">
            <tr class="border border-gray-400">
              <th class="text-center border border-gray-400">日付</th>
              <th class="text-center border border-gray-400">午前勤務開始</th>
              <th class="text-center border border-gray-400">午前勤務終了</th>
              <th class="text-center border border-gray-400">午前勤務場所</th>
              <th class="text-center border border-gray-400">午後勤務開始</th>
              <th class="text-center border border-gray-400">午後勤務終了</th>
              <th class="text-cente border border-gray-400r">午後勤務場所</th>
              <th class="text-cente border border-gray-400r" colspan="2">編集・削除</th>
            </tr>
            <?php $date=\Carbon\Carbon::now('Asia/Tokyo')->startOfMonth(); ?>
            <?php $end_of_month=$date->copy()->endOfMonth(); ?>
            <?php $end_of_month=intval($end_of_month->day); ?>
            @for($i = 1; $i <= $end_of_month; $i++)
                <tr class="border border-gray-400">
                <td class="border border-gray-400">{{ $date->format("Y-m-d") }}</td>
                <?php $date=$date->addDay(); ?>
                <?php $f2=0; ?>
                @foreach($attendances as $attendance)
                  <?php $dt=$attendance->work_date; ?>
                  <?php $f = strcmp( substr($dt, -2), $i) ?>
                  @if( $f == 0 )
                    <td class="border border-gray-400">{{ substr($attendance->am_start_time,0,5) }}</td>
                    <td class="border border-gray-400">{{ substr($attendance->am_end_time,0,5) }}</td>
                    <td class="border border-gray-400">{{ $attendance->am_place }}</td>
                    <td class="border border-gray-400">{{ substr($attendance->pm_start_time,0,5) }}</td>
                    <td class="border border-gray-400">{{ substr($attendance->pm_end_time,0,5) }}</td>
                    <td class="border border-gray-400">{{ $attendance->pm_place }}</td>
                    <td  class="border border-gray-400" colspan="2">
                      <div class="inline-block">
                        <form action="/work/{{ $attendance->id }}/edit" method="get">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type=submit class="btn btn-xs btn-success" aria-label="Left Align">
                            <i class="fas fa-pen"></i>
                            </button>
                      </div>
                      <div class="inline-block">
                        </form>
                        <form action="/work/{{ $attendance->id }}" method="post">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type=submit class="btn btn-xs btn-danger" aria-label="Left Align">
                            <i class="fas fa-trash-alt"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @else
                  <?php $f2 = $f2 + 1; ?>
                  @if($f2 == $counts)
                    <td class="border border-gray-400">　</td>
                    <td class="border border-gray-400">　</td>
                    <td class="border border-gray-400">　</td>
                    <td class="border border-gray-400">　</td>
                    <td class="border border-gray-400">　</td>
                    <td class="border border-gray-400">　</td>
                    <td class="border border-gray-400" colspan="2">　</td>
                  </tr>
                  @endif
                @endif
              @endforeach
            @endfor
          </table>
        </div>
      </div>
    </div>

</x-app-layout>
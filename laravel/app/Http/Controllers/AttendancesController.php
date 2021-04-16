<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attendance;

class AttendancesController extends Controller
{
    public function index()
    {
        $attendances = Attendance::whereYear('created_at', 2021)
        ->whereMonth('created_at', 4)
        ->get();
        $counts = Attendance::whereYear('created_at', 2021)
        ->whereMonth('created_at', 4)
        ->get()
        ->count();
        return view('work/attend_list', compact('attendances','counts'));
    }

    public function edit($id)
    {
        // DBよりURIパラメータと同じIDを持つBookの情報を取得
        $attendance = Attendance::findOrFail($id);
  
        // 取得した値をビュー「book/edit」に渡す
        return view('work/attend_edit', compact('attendance'));
    }

    public function create()
    {
        $attendance = new Attendance();
        return view('work/attend_ent', compact('attendance'));
    }

    public function store(Request $request)
    {
        $attendance = new Attendance();
        $attendance->user_id = 1;
        $attendance->work_date = $request->work_date;
        $attendance->am_start_time = $request->am_start_h.":".$request->am_start_m;
        $attendance->am_end_time = $request->am_end_h.":".$request->am_end_m;
        $attendance->am_place = $request->am_place;
        $attendance->pm_start_time = $request->pm_start_h.":".$request->pm_start_m;
        $attendance->pm_end_time = $request->pm_end_h.":".$request->pm_end_m;
        $attendance->pm_place = $request->pm_place;
        $attendance->save();
    
        return redirect("work");
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->user_id = $request->user_id;
        $attendance->work_date = $request->work_date;
        $attendance->am_start_time = $request->am_start_time;
        $attendance->am_end_time = $request->am_end_time;
        $attendance->am_place = $request->am_place;
        $attendance->pm_start_time = $request->pm_start_time;
        $attendance->pm_end_time = $request->pm_end_time;
        $attendance->pm_place = $request->pm_place;
        $attendance->save();
    
        return redirect("work");
    }

    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();

        return redirect("work");
    }
}
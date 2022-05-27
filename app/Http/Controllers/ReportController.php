<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function showReportPage()
    {
       return view('reports');
    }
    public function showReport(Request $request){
        // dd($request);
        $validated = $request->validate([
            'from'=>'required|date',
            'to'=>'required|date',
        ]);
        //Query activities between the inputed date
        $reports = Activity::whereDateBetween('created_at',$validated['from'],$validated['to'] )->get();
           
        return redirect()->route('activity.showReport')->with(['reports'=>$reports,'dateInputs'=>$validated]);
    }
}

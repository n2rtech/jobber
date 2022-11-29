<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class CalendarSettingController extends Controller
{
    public function calendarSettings(){
        $setting = Setting::where('type', 'calendar')->value('value');
        return view('settings.calendar-settings.index', compact('setting'));
    }

    public function storeCalendarSettings(Request $request){
        $rules = [
            'timing_starts'                  => 'required',
            'no_of_days'                  => 'required',
        ];

        $messages = [
            'timing_starts.required'             => "Please enter Start Timing.",
            'no_of_days'                  => 'Please enter No. of Week Days',
        ];

        $this->validate($request, $rules, $messages);

        Setting::where('type', 'calendar')->update(['value' => $request->all()]);

        return redirect()->route('calendar-settings.index')->with('success', 'Calendar Settings Updated successfully!');
    }
}

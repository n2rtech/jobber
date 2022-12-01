<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class CalendarSettingController extends Controller
{
    public function calendarSettings(){
        $setting = Setting::where('type', 'calendar')->value('value');
        $days    = Setting::where('type', 'calendar')->value('days');
        return view('settings.calendar-settings.index', compact('setting', 'days'));
    }

    public function storeCalendarSettings(Request $request){
        $rules = [
            'timing_starts'                  => 'required',
             'timing_ends'                  => 'required',

        ];

        $messages = [
            'timing_starts.required'             => "Please enter Start Timing.",
        ];

        $this->validate($request, $rules, $messages);

        Setting::where('type', 'calendar')->update(['value' => $request->only('timing_starts', 'timing_ends'), 'days'=> $request->days]);

        return redirect()->route('calendar-settings.index')->with('success', 'Calendar Settings Updated successfully!');
    }
}

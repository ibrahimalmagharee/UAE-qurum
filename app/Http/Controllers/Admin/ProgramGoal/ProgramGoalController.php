<?php

namespace App\Http\Controllers\Admin\ProgramGoal;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramGoal\ProgramGoalRequest;
use App\Models\ProgramGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProgramGoalController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $goals = ProgramGoal::MetronicPaginate();
            return response()->json($goals);
        }
        App::setLocale(get_admin_locale());

        return view('admin.programGoal.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.programGoal.create');
    }


    public function store(ProgramGoalRequest $request)
    {
        App::setLocale(get_admin_locale());

        $goal = ProgramGoal::create([
            'title_ar' => $request-> title_ar,
            'title_en' => $request-> title_en,
            'description1_ar' => $request-> description1_ar,
            'description1_en' => $request-> description1_en,
            'description2_ar' => $request-> description2_ar,
            'description2_en' => $request-> description2_en,
            'description3_ar' => $request-> description3_ar,
            'description3_en' => $request-> description3_en,
            'description4_ar' => $request-> description4_ar,
            'description4_en' => $request-> description4_en,
            'description5_ar' => $request-> description5_ar,
            'description5_en' => $request-> description5_en,
        ]);

        $goal->save();

        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.program_goal.index')]);
    }

    public function edit($id)
    {
        $goal = ProgramGoal::findOrFail($id);
        App::setLocale(get_admin_locale());

        return view('admin.programGoal.update',get_defined_vars());
    }


    public function update(ProgramGoalRequest $request)
    {
        App::setLocale(get_admin_locale());

        $goal = ProgramGoal::findOrFail($request->id);

        $goal->where('id', $request->id)->update([
            'title_ar' => $request-> title_ar,
            'title_en' => $request-> title_en,
            'description1_ar' => $request-> description1_ar,
            'description1_en' => $request-> description1_en,
            'description2_ar' => $request-> description2_ar,
            'description2_en' => $request-> description2_en,
            'description3_ar' => $request-> description3_ar,
            'description3_en' => $request-> description3_en,
            'description4_ar' => $request-> description4_ar,
            'description4_en' => $request-> description4_en,
            'description5_ar' => $request-> description5_ar,
            'description5_en' => $request-> description5_en,
        ]);

        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.program_goal.index')]);
    }


    public function delete($id)
    {
        $goal = ProgramGoal::findOrFail($id);

        $goal->delete();

        return response()->json(['status' => true]);
    }
}

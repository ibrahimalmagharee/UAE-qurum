<?php

namespace App\Http\Controllers\Admin\VisionAndMission;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisionAndMission\VisionAndMissionRequest;
use App\Models\VisionAndMission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class VisionAndMissionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $visions_and_missions = VisionAndMission::MetronicPaginate();
            return response()->json($visions_and_missions);
        }
        App::setLocale(get_admin_locale());

        return view('admin.visionAndMission.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.visionAndMission.create');
    }


    public function store(VisionAndMissionRequest $request)
    {
        App::setLocale(get_admin_locale());


        $vision_and_mission = VisionAndMission::create([
            'type' => $request-> type,
            'title_ar' => $request-> title_ar,
            'title_en' => $request-> title_en,
            'description_ar' => $request-> description_ar,
            'description_en' => $request-> description_en,
        ]);
        $vision_and_mission->save();



        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.vision_and_mission.index')]);
    }

    public function edit($id)
    {
        $vision_and_mission = VisionAndMission::findOrFail($id);
        App::setLocale(get_admin_locale());

        return view('admin.visionAndMission.update',get_defined_vars());
    }


    public function update(VisionAndMissionRequest $request)
    {
        App::setLocale(get_admin_locale());

        $vision_and_mission = VisionAndMission::findOrFail($request->id);

        $vision_and_mission->where('id', $request->id)->update([
            'type' => $request-> type,
            'title_ar' => $request-> title_ar,
            'title_en' => $request-> title_en,
            'description_ar' => $request-> description_ar,
            'description_en' => $request-> description_en,
        ]);

        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.vision_and_mission.index')]);
    }


    public function delete($id)
    {
        $vision_and_mission = VisionAndMission::findOrFail($id);

        $vision_and_mission->delete();

        return response()->json(['status' => true]);
    }

}

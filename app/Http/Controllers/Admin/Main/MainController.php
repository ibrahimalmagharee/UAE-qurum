<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\MainRequest;
use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $mains = Main::MetronicPaginate();
            return response()->json($mains);
        }
        App::setLocale(get_admin_locale());

        return view('admin.main.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.main.create');
    }


    public function store(MainRequest $request)
    {
        App::setLocale(get_admin_locale());

        $main = Main::create([
            'title_ar' => $request-> title_ar,
            'title_en' => $request-> title_en,
            'description_ar' => $request-> description_ar,
            'description_en' => $request-> description_en,
        ]);

        $main->save();

        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.main.index')]);
    }

    public function edit($id)
    {
        $main = Main::findOrFail($id);
        App::setLocale(get_admin_locale());

        return view('admin.main.update',get_defined_vars());
    }


    public function update(MainRequest $request)
    {
        App::setLocale(get_admin_locale());

        $main = Main::findOrFail($request->id);

        $main->where('id', $request->id)->update([
            'title_ar' => $request-> title_ar,
            'title_en' => $request-> title_en,
            'description_ar' => $request-> description_ar,
            'description_en' => $request-> description_en,
        ]);

        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.main.index')]);
    }


    public function delete($id)
    {
        $main = Main::findOrFail($id);

        $main->delete();

        return response()->json(['status' => true]);
    }
}

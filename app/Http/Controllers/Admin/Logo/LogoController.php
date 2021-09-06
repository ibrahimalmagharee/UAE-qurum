<?php

namespace App\Http\Controllers\Admin\Logo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Logo\LogoRequest;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LogoController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $logo = Logo::MetronicPaginate();
            return response()->json($logo);
        }
        App::setLocale(get_admin_locale());

        return view('admin.logo.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.logo.create');
    }


    public function store(LogoRequest $request)
    {
        App::setLocale(get_admin_locale());

        if ($request->hasFile('logo')) {
            $image = upload_file($request->file('logo'),'media/logo');
            $logo = Logo::create([
               'logo' => $image
            ]);
            $logo->save();
        }

        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.logo.index')]);
    }

    public function edit($id)
    {
        $logo = Logo::findOrFail($id);
        if (!$logo){
            $notification = array(
                'message' => 'هذا الشعار غير موجود',
                'alert-type' => 'error'
            );
            return redirect()->route('admin.logo.index', $notification);
        }
        App::setLocale(get_admin_locale());

        return view('admin.logo.update',get_defined_vars());
    }


    public function update(LogoRequest $request)
    {
        App::setLocale(get_admin_locale());

        $logo = Logo::findOrFail($request->id);

        if ($request->hasFile('logo')) {
            $image = upload_file($request->file('logo'),'media/logo');
            $logo->where('id', $request->id)->update([
                'logo' => $image
            ]);
        }

        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.logo.index')]);
    }


    public function delete($id)
    {
        $logo = Logo::findOrFail($id);

        $logo->delete();

        return response()->json(['status' => true]);
    }
}

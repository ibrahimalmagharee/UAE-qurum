<?php

namespace App\Http\Controllers\Admin\Introduction;

use App\Http\Controllers\Controller;
use App\Http\Requests\Introduction\IntroductionRequest;
use App\Models\Introduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IntroductionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $introductions = Introduction::MetronicPaginate();
            return response()->json($introductions);
        }
        App::setLocale(get_admin_locale());

        return view('admin.introduction.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.introduction.create');
    }


    public function store(IntroductionRequest $request)
    {
        App::setLocale(get_admin_locale());

        if ($request->hasFile('image') && $request->video) {
            $image = upload_file($request->file('image'),'media/introduction');
            $introduction = Introduction::create([
                'title_ar' => $request-> title_ar,
                'title_en' => $request-> title_en,
                'description_ar' => $request-> description_ar,
                'description_en' => $request-> description_en,
                'image' => $image,
                'video' => $request->video,
            ]);

            $introduction->save();
        } elseif ($request->hasFile('image')) {
            $image = upload_file($request->file('image'),'media/introduction');
            $introduction = Introduction::create([
                'title_ar' => $request-> title_ar,
                'title_en' => $request-> title_en,
                'description_ar' => $request-> description_ar,
                'description_en' => $request-> description_en,
                'image' => $image,
            ]);

            $introduction->save();
        } elseif ($request->video) {
            $introduction = Introduction::create([
                'title_ar' => $request-> title_ar,
                'title_en' => $request-> title_en,
                'description_ar' => $request-> description_ar,
                'description_en' => $request-> description_en,
                'video' => $request->video,
            ]);
        } else {
            $introduction = Introduction::create([
                'title_ar' => $request-> title_ar,
                'title_en' => $request-> title_en,
                'description_ar' => $request-> description_ar,
                'description_en' => $request-> description_en,
            ]);
            $introduction->save();
        }


        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.introduction.index')]);
    }

    public function edit($id)
    {
        $introduction = Introduction::findOrFail($id);
        App::setLocale(get_admin_locale());

        return view('admin.introduction.update',get_defined_vars());
    }


    public function update(IntroductionRequest $request)
    {
        App::setLocale(get_admin_locale());

        $introduction = Introduction::findOrFail($request->id);

        if ($request->hasFile('image') && $request->video) {
            $image = upload_file($request->file('image'),'media/introduction');
            $introduction->where('id', $request->id)->update([
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
                'description_ar' => $request->description_ar,
                'description_en' => $request->description_en,
                'image' => $image,
                'video' => $request->video,
            ]);
        } elseif ($request->hasFile('image')) {
            $image = upload_file($request->file('image'),'media/introduction');
            $introduction->where('id', $request->id)->update([
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
                'description_ar' => $request->description_ar,
                'description_en' => $request->description_en,
                'image' => $image,
            ]);
        } elseif ($request->video) {
            $introduction->where('id', $request->id)->update([
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
                'description_ar' => $request->description_ar,
                'description_en' => $request->description_en,
                'video' => $request->video,
            ]);
        } else {
            $introduction->where('id', $request->id)->update([
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
                'description_ar' => $request->description_ar,
                'description_en' => $request->description_en,

            ]);
        }

        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.introduction.index')]);
    }


    public function delete($id)
    {
        $introduction = Introduction::findOrFail($id);

        $introduction->delete();

        return response()->json(['status' => true]);
    }

    public function uploadVideo(Request $request)
    {
        if ($request->hasFile('media_file')) {
            $media_file = upload_file($request->file('media_file'),'media/introduction');
            return response()->json(['status' => true,'media_name' => $media_file,'media_type' => $request->media_type]);
        }
    }
}

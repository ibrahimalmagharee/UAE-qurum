<?php

namespace App\Http\Controllers\Admin\MediaCenter;

use App\Http\Controllers\Controller;
use App\Http\Requests\MediaCenter\MediaCenterRequest;
use App\Models\MediaCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MediaCenterController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $media_centers = MediaCenter::MetronicPaginate();
            return response()->json($media_centers);
        }
        App::setLocale(get_admin_locale());

        return view('admin.mediaCenter.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.mediaCenter.create');
    }


    public function store(MediaCenterRequest $request)
    {
        App::setLocale(get_admin_locale());

        if ($request->hasFile('image1') && $request->hasFile('image2') && $request->hasFile('image3') && $request->hasFile('image4') && $request->hasFile('image5') && $request->video) {
            $image1 = upload_file($request->file('image1'),'media/mediaCenter');
            $image2 = upload_file($request->file('image2'),'media/mediaCenter');
            $image3 = upload_file($request->file('image3'),'media/mediaCenter');
            $image4 = upload_file($request->file('image4'),'media/mediaCenter');
            $image5 = upload_file($request->file('image5'),'media/mediaCenter');
            $image_video_cover = upload_file($request->file('image_video_cover'),'media/mediaCenter');

            $media_center = MediaCenter::create([
                'image1' => $image1,
                'image2' => $image2,
                'image3' => $image3,
                'image4' => $image4,
                'image5' => $image5,
                'image_video_cover' => $image_video_cover,
                'video' => $request->video,
            ]);

            $media_center->save();
        }


        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.media_center.index')]);
    }

    public function edit($id)
    {
        $media_center = MediaCenter::findOrFail($id);
        App::setLocale(get_admin_locale());

        return view('admin.mediaCenter.update',get_defined_vars());
    }


    public function update(MediaCenterRequest $request)
    {
        App::setLocale(get_admin_locale());

        $media_center = MediaCenter::findOrFail($request->id);

        if ($request->hasFile('image1')){
            $image1 = upload_file($request->file('image1'),'media/mediaCenter');
            $media_center->where('id', $request->id)->update([
                'image1' => $image1,
            ]);
        }

        if ($request->hasFile('image2')){
            $image2 = upload_file($request->file('image2'),'media/mediaCenter');
            $media_center->where('id', $request->id)->update([
                'image2' => $image2,
            ]);
        }

        if ($request->hasFile('image3')){
            $image3 = upload_file($request->file('image3'),'media/mediaCenter');
            $media_center->where('id', $request->id)->update([
                'image3' => $image3,
            ]);
        }

        if ($request->hasFile('image4')){
            $image4 = upload_file($request->file('image4'),'media/mediaCenter');
            $media_center->where('id', $request->id)->update([
                'image4' => $image4,
            ]);
        }

        if ($request->hasFile('image5')){
            $image5 = upload_file($request->file('image5'),'media/mediaCenter');
            $media_center->where('id', $request->id)->update([
                'image5' => $image5,
            ]);
        }

        if ($request->hasFile('image_video_cover')){
            $image_video_cover = upload_file($request->file('image_video_cover'),'media/mediaCenter');
            $media_center->where('id', $request->id)->update([
                'image_video_cover' => $image_video_cover,
            ]);
        }

        if ($request->video) {
            $video = $request->video;
            $media_center->where('id', $request->id)->update([
                'video' => $video,
            ]);
        }




        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.media_center.index')]);
    }


    public function delete($id)
    {
        $media_center = MediaCenter::findOrFail($id);

        $media_center->delete();

        return response()->json(['status' => true]);
    }

    public function uploadVideo(Request $request)
    {
        if ($request->hasFile('media_file')) {
            $media_file = upload_file($request->file('media_file'),'media/mediaCenter');
            return response()->json(['status' => true,'media_name' => $media_file,'media_type' => $request->media_type]);
        }
    }
}

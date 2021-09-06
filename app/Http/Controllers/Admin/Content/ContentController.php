<?php


namespace App\Http\Controllers\Admin\Content;


use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContentController extends Controller
{
    public function index($lang = null)
    {
        $lang = !empty($lang) && in_array($lang,['ar','en']) ? $lang : 'ar';
        App::setLocale(get_admin_locale());

        //$content = Content::where('lang',$lang)->get();
//        $content = mapContent($content);
//
//        $participation_method = ParticipationMethod::all();
//        $sample_trip = SampleTrip::all();

        return view('admin.content.index',get_defined_vars());
    }


    public function update(Request $request)
    {
        $input = $request->all();
        $months_chart = [];

        if (is_array($input['content'])) {
            foreach ($input['content'] as $section => $data) {
                foreach ($data as $content_key => $content_value) {
                    if ($section === 'statistics' && $content_key === 'chart' && array_key_exists('month',$content_value)) {
                        foreach ($content_value['month'] as $index => $month) {
                             $months_chart[$month] = $content_value['value'][$index];
                        }
                        $content_value = json_encode($months_chart);
                    }
                    $content = Content::where('lang',$input['lang'])
                                        ->where('section',$section)
                                        ->where('content_key',$content_key)
                                        ->update(['content_value' => $content_value]);
                }
            }
        }

        return response(['status' => true,'message' => 'تم تحديث البيانات بنجاح']);
    }


    public function uploadMedia(Request $request)
    {
        $p = $request->p;

        $upload_path = env('MEDIA_UPLOAD_PATH').'/';

        switch ($p) {
            case 'media_center':
                if ($request->hasFile('media_file')) {
                    $media_file = upload_file($request->file('media_file'),$upload_path);
                    $media_item = Media::create([
                        'media_url' => $media_file,
                        'media_type' => $request->media_type
                    ]);
                    $media_item_html = view('admin.partials.media_item',compact('media_item'))->render();
                    return response()->json([
                        'status' => true,
                        'media_url' => $media_item->media_url,
                        'media_obj' => $media_item,
                        'media_html' => $media_item_html
                    ]);
                }
                break;
            case 'intro_image':
                if ($request->hasFile('intro_image')) {
                    $media_file = upload_file($request->file('intro_image'),$upload_path);
                    $content = Content::where('section','intro')->where('lang',$request->lang)->where('content_key','media_url')->first();
                    $content->update(['content_value' => $media_file]);
                    return response()->json([
                        'status' => true,
                        'media_url' => app_asset('media/'.($content->content_value??'')),
                    ]);
                }
                break;
            case 'vision_image':
                if ($request->hasFile('vision_image')) {
                    $media_file = upload_file($request->file('vision_image'),$upload_path);
                    $content = Content::where('section','vision')->where('lang',$request->lang)->where('content_key','media_url')->first();
                    $content->update(['content_value' => $media_file]);
                    return response()->json([
                        'status' => true,
                        'media_url' => app_asset('media/'.($content->content_value??'')),
                    ]);
                }
                break;
            case 'goals_video':
                if ($request->hasFile('goals_video')) {
                    $media_file = upload_file($request->file('goals_video'),$upload_path);
                    $content = Content::where('section','goals')->where('lang',$request->lang)->where('content_key','media_url')->first();
                    $content->update(['content_value' => $media_file]);
                    return response()->json([
                        'status' => true,
                        'media_url' => app_asset('media/'.($content->content_value??'')),
                    ]);
                }
                break;
        }
    }


    public function deleteMedia($media_id)
    {
        Media::where('id',$media_id)->delete();

        return response(['status' => true]);
    }


    public function editParticipationMethod($id)
    {
        $participation_method = ParticipationMethod::findOrFail($id);
        return response()->json(['status' => true,'pm' => $participation_method]);
    }


    public function updateParticipationMethod(UpdateParticipationMethodRequest $request)
    {
        $input = $request->all();

        $participation_method = ParticipationMethod::findOrFail($input['id']);

        $participation_method->update($input);

        if ($request->hasFile('icon')) {
            $icon = upload_file($request->file('icon'),env('ICONS_UPLOAD_PATH'));
            $participation_method->update(['icon' => $icon]);
        }

        return response()->json(['status' => true,'message' => 'تم تعديل البيانات بنجاح']);
    }


    public function editSampleTrip($id)
    {
        $sample_trip = SampleTrip::findOrFail($id);
        return response()->json(['status' => true,'st' => $sample_trip]);
    }


    public function updateSampleTrip(UpdateSampleTripRequest $request)
    {
        $input = $request->all();

        $sample_trip = SampleTrip::findOrFail($input['id']);

        $sample_trip->update($input);

        if ($request->hasFile('icon')) {
            $icon = upload_file($request->file('icon'),env('ICONS_UPLOAD_PATH'));
            $sample_trip->update(['icon' => $icon]);
        }

        return response()->json(['status' => true,'message' => 'تم تعديل البيانات بنجاح']);
    }
}

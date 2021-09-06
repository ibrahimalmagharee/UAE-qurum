<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactUsRequest;
use App\Models\ConditionSubscription;
use App\Models\ContactUs;
use App\Models\ContactUsPage;
use App\Models\Introduction;
use App\Models\Logo;
use App\Models\Main;
use App\Models\MediaCenter;
use App\Models\ProgramGoal;
use App\Models\SocialLink;
use App\Models\VisionAndMission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index()
    {

          $main = Main::first();

          $logo = Logo::first();

          $introduction = Introduction::first();

          $vision = VisionAndMission::where('type', 1)->first();

          $mission = VisionAndMission::where('type', 2)->first();

         $goals = ProgramGoal::first();

         $condition_subscriptions = ConditionSubscription::first();

        $media_centers = MediaCenter::first();

        $contact_us_page = ContactUsPage::first();

        $instagram = SocialLink::where('name_ar', 'انستيجرام')->first();
        $twiter = SocialLink::where('name_ar', 'تويتر')->first();
        $telegram = SocialLink::where('name_ar', 'تيليجرام')->first();
        $watsapp = SocialLink::where('name_ar', 'واتس اب')->first();

        return view('site.index', compact('main','introduction', 'vision', 'mission', 'goals', 'condition_subscriptions',
            'media_centers', 'contact_us_page','logo', 'instagram', 'twiter', 'telegram', 'watsapp'));
    }

    public function contactUs (ContactUsRequest $request)
    {
        $contact_us =  ContactUs::create([
           'first_name' => $request->first_name,
           'last_name' => $request->last_name,
           'phone' => $request->phone,
           'email' => $request->email,
           'message' => $request->message,
        ]);

        $contact_us->save();

        return response()->json([
           'status' => true,
           'msg' => 'تم ارسال الرسالة بنجاح',
        ]);

    }


    public function switchLang($locale)
    {
        $locale = !empty($locale) && in_array($locale,['ar','en']) ? $locale : 'ar';

        Session::put('locale', $locale);

        return redirect()->back();
    }
}

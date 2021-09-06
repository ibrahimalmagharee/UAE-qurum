<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function switchLocale($locale)
    {
        $locale = !empty($locale) && in_array($locale,['ar','en']) ? $locale : 'ar';

        Session::put('admin_locale', $locale);

        return redirect()->back();
    }

    public function getCitiesByState(Request $request)
    {
        $state = State::where('id',$request->state_id)->with('cities')->firstOrFail();
        $city_id = $request->city_id ?? null;

        $cities_html = view('partials.cities-list',get_defined_vars())->render();

        return response()->json(['status' => true,'cities_html' => $cities_html,'emirate' => $state]);
    }
}

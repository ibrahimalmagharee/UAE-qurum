<?php

namespace App\Http\Controllers\Admin\SocialLink;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialLink\SocialLinkRequest;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SocialLinkController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $social_links = SocialLink::MetronicPaginate();
            return response()->json($social_links);
        }
        App::setLocale(get_admin_locale());

        return view('admin.socialLink.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.socialLink.create');
    }


    public function store(SocialLinkRequest $request)
    {
        App::setLocale(get_admin_locale());

        $social_link = SocialLink::create([
           'name_ar' => $request-> name_ar,
           'name_en' => $request-> name_en,
           'link' => $request-> link,
        ]);

        $social_link->save();

        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.social_link.index')]);
    }

    public function edit($id)
    {
        $social_link = SocialLink::findOrFail($id);
        App::setLocale(get_admin_locale());

        return view('admin.socialLink.update',get_defined_vars());
    }


    public function update(SocialLinkRequest $request)
    {
        App::setLocale(get_admin_locale());

        $social_link = SocialLink::findOrFail($request->id);

        $social_link = SocialLink::where('id', $request->id)->update([
            'name_ar' => $request-> name_ar,
            'name_en' => $request-> name_en,
            'link' => $request-> link,
        ]);

        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.social_link.index')]);
    }


    public function delete($id)
    {
        $social_link = SocialLink::findOrFail($id);

        $social_link->delete();

        return response()->json(['status' => true]);
    }
}

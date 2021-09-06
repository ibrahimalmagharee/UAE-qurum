<?php

namespace App\Http\Controllers\Admin\ContactUsPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsPage\ContactUsPageRequest;
use App\Models\ContactUsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactUsPageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $contact_us_page = ContactUsPage::MetronicPaginate();
            return response()->json($contact_us_page);
        }
        App::setLocale(get_admin_locale());

        return view('admin.contactUsPage.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.contactUsPage.create');
    }


    public function store(ContactUsPageRequest $request)
    {
        App::setLocale(get_admin_locale());

        $contact_us_page = ContactUsPage::create([
            'website' => $request-> website,
            'phone' => $request-> phone,
            'email' => $request-> email,
            'location_ar' => $request-> location_ar,
            'location_en' => $request-> location_en,
        ]);

        $contact_us_page->save();

        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.contact_us_page.index')]);
    }

    public function edit($id)
    {
        $contact_us_page = ContactUsPage::findOrFail($id);
        App::setLocale(get_admin_locale());

        return view('admin.contactUsPage.update',get_defined_vars());
    }


    public function update(ContactUsPageRequest $request)
    {
        App::setLocale(get_admin_locale());

        $contact_us_page = ContactUsPage::findOrFail($request->id);

        $contact_us_page->where('id', $request->id)->update([
            'website' => $request-> website,
            'phone' => $request-> phone,
            'email' => $request-> email,
            'location_ar' => $request-> location_ar,
            'location_en' => $request-> location_en,
        ]);

        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.contact_us_page.index')]);
    }


    public function delete($id)
    {
        $contact_us_page = ContactUsPage::findOrFail($id);

        $contact_us_page->delete();

        return response()->json(['status' => true]);
    }
}

<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $contact_us = ContactUs::MetronicPaginate();
            return response()->json($contact_us);
        }
        App::setLocale(get_admin_locale());

        return view('admin.contactUs.index');
    }

    public function getMessage($id)
    {
        $message = ContactUs::findOrFail($id);

        $message->update(['seen_by_admin' => 1]);

        return response()->json(['status' => true,'message' => $message]);
    }
}

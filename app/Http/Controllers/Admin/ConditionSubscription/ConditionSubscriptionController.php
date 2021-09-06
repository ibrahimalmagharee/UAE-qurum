<?php

namespace App\Http\Controllers\Admin\ConditionSubscription;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConditionSubscription\ConditionSubscriptionRequest;
use App\Models\ConditionSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ConditionSubscriptionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $condition_subscriptions = ConditionSubscription::MetronicPaginate();
            return response()->json($condition_subscriptions);
        }
        App::setLocale(get_admin_locale());

        return view('admin.conditionSubscription.index');
    }


    public function create()
    {
        App::setLocale(get_admin_locale());
        return view('admin.conditionSubscription.create');
    }


    public function store(ConditionSubscriptionRequest $request)
    {
        App::setLocale(get_admin_locale());

        $condition_subscription = ConditionSubscription::create([
            'title_ar' => $request-> title_ar,
            'title_en' => $request-> title_en,
            'description1_ar' => $request-> description1_ar,
            'description1_en' => $request-> description1_en,
            'description2_ar' => $request-> description2_ar,
            'description2_en' => $request-> description2_en,
            'description3_ar' => $request-> description3_ar,
            'description3_en' => $request-> description3_en,
            'description4_ar' => $request-> description4_ar,
            'description4_en' => $request-> description4_en,
        ]);

        $condition_subscription->save();

        return response()->json(['status' => true,'message' => __('admin.messages.data_created'),'redirect_url' => route_url('admin.condition_subscription.index')]);
    }

    public function edit($id)
    {
        $condition_subscription = ConditionSubscription::findOrFail($id);
        App::setLocale(get_admin_locale());

        return view('admin.conditionSubscription.update',get_defined_vars());
    }


    public function update(ConditionSubscriptionRequest $request)
    {
        App::setLocale(get_admin_locale());

        $condition_subscription = ConditionSubscription::findOrFail($request->id);

        $condition_subscription->where('id', $request->id)->update([
            'title_ar' => $request-> title_ar,
            'title_en' => $request-> title_en,
            'description1_ar' => $request-> description1_ar,
            'description1_en' => $request-> description1_en,
            'description2_ar' => $request-> description2_ar,
            'description2_en' => $request-> description2_en,
            'description3_ar' => $request-> description3_ar,
            'description3_en' => $request-> description3_en,
            'description4_ar' => $request-> description4_ar,
            'description4_en' => $request-> description4_en,
        ]);

        return response()->json(['status' => true,'message' => __('admin.messages.data_changed'),'redirect_url' => route_url('admin.condition_subscription.index')]);
    }


    public function delete($id)
    {
        $condition_subscription = ConditionSubscription::findOrFail($id);

        $condition_subscription->delete();

        return response()->json(['status' => true]);
    }
}

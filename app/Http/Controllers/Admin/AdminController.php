<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\City;
use App\Models\Media;
use App\Models\Moderator;
use App\Models\Question;
use App\Models\State;
use App\Notification;
use App\User;
use Request;
use Response;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.home');
    }

    public function getSubcats()
    {
        $category_id = Request::input('category_id');
        $subcategories = Category::where('parent_id', $category_id)->get();
        return Response::json($subcategories);
    }
    public function getSubSubcats()
    {
        $subcategory_id = Request::input('subcategory_id');
        $subsubcategories = Category::where('parent_id', $subcategory_id)->get();
        return Response::json($subsubcategories);
    }
    public function getStates()
    {
        $country_id = Request::input('country_id');
        $states = State::where('country_id', $country_id)->get();
        return Response::json($states);
    }
    public function getCities()
    {
        $state_id = Request::input('state_id');
        $cities = City::where('state_id', $state_id)->get();
        return Response::json($cities);
    }
    public function attributevalues()
    {
        $attribute_id = Request::input('attribute_id');
        $values = AttributeValue::where('attribute_id', $attribute_id)->get();
        return Response::json($values);
    }
    /************ delete not *********/
    public function readNotification()
    {
        $notificationID = Request::input('notificationID');
        $notification = Notification::where('id', $notificationID)->first();
        $notification->delete();
        return response()->json(['status' => 'success'], 201);
    }
}

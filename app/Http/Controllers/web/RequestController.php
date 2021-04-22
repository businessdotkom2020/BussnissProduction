<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\Request;

use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ReviewsRecource;
use App\Http\Resources\StoreResource;
use App\Http\Requests\AddReviewRequest;
use App\Http\Requests\AddResquest;

use RealRashid\SweetAlert\Facades\Alert;
use Lang;

class RequestController extends Controller
{

    public function create()
    {

        return view('Requests.create');
    }
    public function index()
    {
        $requests = Request::paginate(10);

        return view('Requests.index', compact('requests'));
    }


    public function edit($request_id)
    {
        $request = Request::find($request_id);

        return view('Requests.edit', compact('request'));
    }


    public function post(AddResquest $request)
    {
        $req = new Request;
        $req->category_id = Request()->category_id;
        $req->user_id = Request()->user()->id;
        $req->name = Request()->name;
        $req->description = Request()->description;

        $images = array();
        /**
         * check if images come as array then loop the images to save them
         */

        if (is_array(Request()->file('images'))) {

            foreach (Request()->file('images') as $image) {
                $file_name     = 'product_image' .   rand(1, 15) . rand(155, 200) . rand(25, 55) . '.png';
                $image->storeAs('public/requests', $file_name);
                $img_url = 'requests/' . $file_name;
                array_push($images, $img_url);
            }
        }

        $req->images = json_encode($images);

        $req->save();

        Alert::toast(trans('general.add_review_successfully'), 'success');
        return redirect('/request/' . $req->id);
    }

    public function show($request_id)
    {
        $req = Request::find($request_id);
        return view('Requests.show', compact('req'));
    }


    public function update(Request $request, $id)
    {
        try {
            $req = $request;
            $req->name = $request->name;
            $req->user_id = $request->user_id;
            $req->description = $request->description;
            $req->category_id = $request->category_id;

            if ($request->file('images')) {
                $images = [];

                foreach ($request->images as $image) {
                    if (is_string($image))
                        array_push($images, $image);
                }

                if ($request->file('images')) {

                    foreach ($request->file('images') as $image) {
                        $file_name     = 'product_image' .   rand(1, 15) . rand(155, 200) . rand(25, 55) . '.png';
                        $image->storeAs('public/requests', $file_name);
                        $img_url = 'requests/' . $file_name;
                        array_push($images, $img_url);
                    }
                }
                $req->images = json_encode($images);
            }


            $req->save();
            return redirect()->route('servicess.index')->with('done', 'Added Successfully ....');
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function favorite()
    {

        if (!Request()->user())
            return response()->json([
                "status" => true,
                "class" => '',
                "message" => trans('general.login_first')
            ]);


        $request = Request::find(Request()->request_id);

        if (!$request)
            return response()->json(["status" => "failed", "mesage" => "Request not found"], 401);

        $request->favorite();

        $favorite_model = \App\Models\Favorite::where([
            ['favorited_id', Request()->request_id],
            ['user_id', Request()->user()->id], ['favorited_type', 'App\Models\Request']

        ])->first();

        if ($favorite_model) {
            $mesage =     'added_product_to_favorite';
        } else {
            $mesage =     'removed_product_from_favorite';
        }

        return response()->json([
            "status" => true,
            "class" => 'fav-active',

            "message" => $mesage
        ]);
    }



    public function delete($request_id)
    {
        $request =  Request::find($request_id);

        if (!$request || $request->user_id != \Auth::id()) {

            Alert::toast('Request Not Found Successfully', 'success');
            return redirect()->back();
        }
        $request->delete();

        Alert::toast('Request Deleted Successfully', 'success');

        return redirect()->back();
    }
}
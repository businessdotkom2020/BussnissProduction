<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Request;
use App\Http\Resources\RequestsCollection;
use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\RequestIndexResource;
use App\Http\Resources\RequestResource;
use App\Http\Resources\StoreResource;
use App\Http\Requests\EditRequest;
use App\Http\Requests\AddResquest;
use App\Http\Resources\collections\RequestIndexCollection;
use Illuminate\Support\Facades\DB;


class RequestsController extends Controller
{
    public function index()
    {
        return new RequestsCollection(Request::paginate(10));
    }
    public function my_requests()
    {
        return new RequestIndexCollection(Request::where('user_id', Request()->user()->id)->paginate(10));
    }
    public function show($id)
    {

        return response()->json([
            'status' => true,
            'code' => 200,
            'data' => new RequestResource(Request::find($id))
        ]);
    }

    public function store()
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



        return response()->json([
            'status' => true,
            'code' => 200,
            "message" => "Request created successfully"

        ]);
    }
    public function update($id, EditRequest $request)
    {

        $req =  Request::find($id);
        if (!$req)
            return response()->json(['status' => 'failed', 'message' => 'Request not fond']);
        $req->category_id = Request()->category_id ? Request()->category_id : $req->category_id;
        $req->user_id = Request()->user()->id;
        $req->name = Request()->name ?  Request()->name  : $req->name;
        $req->description = Request()->description ?  Request()->description : $req->description;


        $images = [];

        $images = json_decode($req->images);

        if (request()->deleted_images) {
            $deleted_images = request()->deleted_images;

            foreach ($images as $image) {
                if (!in_array($image, $deleted_images)) {
                    $new_images[] = $image;
                }
            }

            $images =  $new_images;
        }
        if (is_array(Request()->file('images'))) {

            foreach (Request()->file('images') as $image) {
                $file_name     = 'product_image' .   rand(1, 15) . rand(155, 200) . rand(25, 55) . '.png';
                $image->storeAs('public/services', $file_name);
                $img_url = 'services/' . $file_name;
                array_push($images, $img_url);
            }
        }

        $req->images = json_encode($images);

        $req->save();




        return response()->json([
            'status' => true,
            'code' => 200,
            "message" => "Request Updated successfully"
        ]);
    }

    public function destroy($id)
    {
        $req =  Request::find($id);

        if (!$req)
            return response()->json(['status' => 'failed', 'message' => 'not fond']);
        $req->delete();

        return response()->json([
            'status' => true,
            'code' => 200,
            "message" => "Request Deleted successfully"

        ]);
    }
}
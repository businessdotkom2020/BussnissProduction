<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateStoreInfoRequest;
use App\Http\Requests\AddService;
use App\Http\Requests\EditService;
use App\Http\Resources\ServicesIndexResource;
use App\Http\Resources\SupplierIndexResource;
use App\Http\Resources\ServicesDetailsResource;
use App\Http\Resources\ServiceResource;
use App\Http\Requests\Auth\UpdateUserPasswordRequest;
use App\Http\Resources\collections\ServicesIndexCollection;
use App\Models\User;
use App\Models\Service;

class ServiceController extends Controller
{

    public function my_services()
    {
        return  new ServicesIndexCollection(Service::where('user_id',Request()->user()->id)->paginate(10));
    }

    public function service_Show($id)
    {
        return response()->json([
            "status" => true,
            "code" => 200,
            "data" => new ServicesIndexResource( Service::find($id) )
        ]);
     }
    public function service_details($id)
    {
                         $Service =  Service::find($id) ;

                         if(!$Service)
                        return response()->json(['status' => false,'code' => 422, 'message' => 'Service not fond']);

                        return response()->json([
                            "status" => true,
                            "code" => 200,
                            "data" => new ServicesDetailsResource($Service)
                        ]);
     }


    public function store_service(AddService $request)
    {
        $service = new Service;
        $service->name           = Request()->name ;
        $service->user_id           = Request()->user()->id ;
        $service->category_id           = Request()->category_id ;
        $service->description    = Request()->description ;
        $service->youtube_url    = Request()->youtube_url ;

         $images = array();
		/**
		 * check if images come as array then loop the images to save them
		 */

			if (is_array(Request()->file('images'))) {

				foreach (Request()->file('images') as $image) {
                    $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                    $image->storeAs('public/services',$file_name);
                    $img_url = 'services/'. $file_name;
					array_push($images, $img_url);
				}

			}

        $service->images = json_encode($images);

        $service->save();

        return response()->json([
            "status" => true,
            "code" => 200,
            "message" => "Service Created Successfully",
            ]);

    }


    public function update_service($service_id,EditService $request)
    {
        $service =Service::find($service_id);

                         if(!$service)
                        return response()->json(['status' => false,'code' => 422, 'message' => 'not fond']);

        $service->name           = Request()->name ? Request()->name : $service->name;
        $service->description          = Request()->description ? Request()->description : $service->description;
        $service->category_id           = Request()->category_id ;
        $service->youtube_url    = Request()->youtube_url ;

$images= [];

         $images = json_decode($service->images);



       if(request()->deleted_images){
          $deleted_images = request()->deleted_images;

            foreach($images as $image){
                if(!in_array($image,$deleted_images)){
                    $new_images[] = $image;
                }
            }


$images =  $new_images;


    }


			if (is_array(Request()->file('images'))) {

				foreach (Request()->file('images') as $image) {
                    $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                    $image->storeAs('public/services',$file_name);
                    $img_url = 'services/'. $file_name;
					array_push($images, $img_url);
				}

			}

        $service->images = json_encode($images);




       $service->update();

        return response()->json([
            "status" => true,
            "code" => 200,
            "message" => "Service Updated Successfully",
            ]);



    }





        public function destroy($service_id){
                 $Service =  Service::find($service_id) ;

                 if(!$Service)
                        return response()->json(['status' => false,'code' => 422, 'message' => 'not fond']);
            $Service->delete();

            return response()->json([
                "status" => true,
                "code" => 200,
                "message" => "Service Deleted Successfully",
                ]);

    }
}

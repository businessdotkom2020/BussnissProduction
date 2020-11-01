<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUsersRequest;
use App\Http\Resources\ClentsResource;
use App\Http\Requests\ClientRequest;
use App\Models\Client;


class ClientController extends BaseController
{

    
      public function post(ClientRequest $request){
            $client = new Client;
            $client->user_id            = $request->user()->id;
            $client->name              = $request->name;


       if (Request()->file('image'))
        {
            $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
             Request()->image->storeAs('public/clients',$file_name);
            $client->image = '/clients/'. $file_name;
        }
            $client->save();
                
        return response()->json([
            'status' => "success",
             "message" => "Client Created successfully"
            ]) ;
        }


        public function supplier_Clients($id){
            return ClentsResource::collection(Client::where('user_id',$id)->get());
        }

        public function my_Clients(){
            return ClentsResource::collection(request()->user()->clients);
        }

        public function show($id){
            return new ClentsResource(Client::find($id));
        }
        
        
public function update($id  , ClientRequest $request){
    $client = Client::find($id);
           if(!$client)
                return response()->json(['status' => 'failed', 'message' => 'not fond']);

            $client->name              = $request->name;
       
       
       if (Request()->file('image'))
        {
            $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
             Request()->image->storeAs('public/clients',$file_name);
            $client->image = '/clients/'. $file_name;
        }

            $client->update();
            
                
        return response()->json([
            'status' => "success",
             "message" => "Bransh  Updated successfully"
            ]) ;
}

public function destroy($id){
              $client =  Client::find($id) ;

                 if(!$client)
                        return response()->json(['status' => 'failed', 'message' => 'not fond']);
            $client->delete();

        return response()->json([
            'status' => "success",
             "message" => "Client Deleted successfully"

            ]) ;
}

}

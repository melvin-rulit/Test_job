<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientsResource;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\NoReturn;

class UserController extends Controller
{

    public function get_all_clients(){

  $user = Client::where('id' , '!=', 1)->get();

        return ClientsResource::collection($user);
    }


    public function edit_client_in_DB(Request $request)
    {
        $edit_client = Client::find( $request['field_id']);

        if ($request['row_name'] === 'name'){
            $edit_client->name = $request['field_value_name'];
            $edit_client->save();

        }elseif ($request['row_name'] === 'phone_number'){

            $edit_client->phone_number = $request['field_value_phone_number'];
            $edit_client->save();
        }

        return "Служебная информация обновлена";

    }

   public function send_data_registration(Request $request){

       $random_string = $this->generate_string();

       Client::create([
           'name' => $request->name,
           'phone_number' => $request->phone_number,
           'generation_links' => $random_string,
       ]);

       return $random_string;

    }

    public function generate_string (){
        return Str::random(30);
    }

     public function generate_new_link (){
        dd('generate_new_link');

    }


    public function top_delete_link (){

dd('ddd');
    }


    public function delete_client_from_DB( Request $request)

    {
        $client = Client::find($request->field_id);

        $client->delete();

        return "Deleted";
    }



}


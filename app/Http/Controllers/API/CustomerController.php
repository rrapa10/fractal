<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
	public function list(){ 
		try{
			$data = Customer::get();
			$response['data'] 	= $data;
			$response['succes'] = true;

		} catch (\Exception $e) {
	        $response['message'] = $e->getMessage();
	        $response['success'] = false;
		}

		return $response;

	}


	public function create(Request $request){

	try {

	       $insert['first_name'] 	= $request['first_name'];
	       $insert['last_name'] 	= $request['last_name'];
	       $insert['email'] 		= $request['email'];
	       $insert['phone_number'] 	= $request['phone_number'];
	       $insert['birth_date'] 	= $request['birth_date'];

	       Customer::insert($insert);

	       $response['message'] 	= "Save succesful";
	       $response['succes'] 		= true;

	    } catch (\Exception $e) {
	       $response['message'] 	= $e->getMessage();
	       $response['succes'] 		= true;
	    }
	    return $response;
	}

	public function get($id){

		try {

			$data = Customer::find($id);

			if ($data) {
				$response['data'] = $data;
				$response['message'] = "Load successful";
				$response['success'] = true;
			}
			else {
				$response['message'] = "Not found data id => $id";
				$response['success'] = false;
			}

		} catch (\Exception $e) {
			$response['message'] = $e->getMessage();
			$response['success'] = false;
		}
		return $response;
	}

	public function update(Request $request,$id){

		try {

			$data['first_name'] = $request['first_name'];
			$data['last_name'] = $request['last_name'];
			$data['email'] = $request['email'];
			$data['phone_number'] = $request['phone_number'];
			$data['birth_date'] = $request['birth_date'];

			Customer::where("id",$id)->update($data);

			$response['message'] = "Updated successful";
			$response['success'] = true;

		} catch (\Exception $e) {
			$response['message'] = $e->getMessage();
			$response['success'] = false;
		}
			return $response;
	}

	public function delete($id){

      try {
        $res = Customer::where("id",$id)->delete();
        $response['res'] = $res;
        $response['message'] = "Deleted successful";
        $response['success'] = true; 
      } catch (\Exception $e) {
        $response['message'] = $e->getMessage();
        $response['success'] = false;
      }

      return $response;
    }

}

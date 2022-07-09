<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Massbooking;
use Carbon\Carbon;
use App\Models\HomeController;
use App\Models\MailController;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class MassbookingController extends Controller
{

    private $status     =   200;
    // --------------- [ Save massbook function ] -------------


    public function createMassBook(Request $request) {

        // // validate inputs
    //      $validator          =       Validator::make($request->all(),
    // [
    //             "name"                   =>      "required",
    //             "DateTime"               =>      "required",
    //             "intention"              =>      "required",
    //             "intentionfor"           =>      "required",
    //             "language"               =>      "required",
    //             "email"                  =>      "required",
    //             "mobile"                 =>      "required",
    //             "amt"                    =>      "required|numeric",
    //             "mass_id"                =>      "required|numeric"
    //         ]
    //     );

    //     // if validation fails
    //     if($validator->fails()) {
    //         return response()->json(["status" => "failed", "validation_errors" => $validator->errors()]);
    //     }
            $cur_date = $request->DateTime;
            $date_time = date("Y-m-d H:i:s", strtotime($cur_date));

// create

         $massbookArray['params']         =       array(
            "name"                        =>      $request->name,
            "DateTime"                    =>      $date_time,
            "language"                    =>      $request->language,
            "intention"                   =>      $request->intention,
            "intentionfor"                =>      $request->intentionfor,
            "email"                       =>      $request->email,
            "mobile"                      =>      $request->mobile,
            "amt"                         =>      $request->amt,
            "mass_id"                     =>      $request->mass_id,
            "date"                        =>      $request->date,     
            "surcharge"                   =>      $request->surcharge,
            "clientcode"                  =>      $request->clientcode,
            "signature"                   =>      $request->signature,
            "merchant_id"                 =>      $request->merchant_id,
            "mer_txn"                     =>      $request->mer_txn,
            "f_code"                      =>      $request->f_code,
            "bank_txn"                    =>      $request->bank_txn,
            "ipg_txn_id"                  =>      $request->ipg_txn_id,
            "bank_name"                   =>      $request->bank_name,
            "mmp_txn"                     =>      $request->mmp_txn,
            "udf5"                        =>      $request->udf5,
            "udf6"                        =>      $request->udf6,
            "udf3"                        =>      $request->udf3,
            "udf4"                        =>      $request->udf4,
            "udf1"                        =>      $request->udf1,
            "udf2"                        =>      $request->udf2,
            "discriminator"               =>      $request->discriminator,
            "desc"                        =>      $request->desc,
            "auth_code"                   =>      $request->auth_code
        );

 // return response()->json(["status" =>  $massbookArray['params'] ]);
            $massbook  =      Massbooking::create($massbookArray['params']);

            if(!is_null($massbook)){ 

            $input = $request->all();
            $email = $request->email;
            $name  = $request->name;
            $intention = $request->intention;
            $mass = $request->language;
            $intentionfor = $request->intentionfor;
            $amt = $request->amt;
            $surcharge = $request->surcharge;
            $desc   =  $request->desc;

           if(isset($input)){
               
                $bodyContent = [
                            'toName' => $name,
                            'datetime' => $cur_date,
                            'intention' => $intention,
                            'mass' => $mass,
                            'intentionfor' => $intentionfor,
                            'amt' => $amt,
                            'surcharge' => $surcharge,
                            'desc' => $desc,
                            'content' => "Message recevied successfully",
                        ];
// dd($bodyContent);
                        
             Mail::to($email)->send(new SendMailable($bodyContent));  

            return response()->json(["status" => $this->status, "success" => true, "message" => "massbook record created successfully", "data" => $massbook]);

            }    
            else {
                return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! failed to create."]);
            }

                
    }
}

   



    // --------------- [ massbook Listing ] -------------------
    public function massbookListing() {

        $massbook       =       Massbooking::all();
        if(count($massbook) > 0) {
            return response()->json(["status" => $this->status, "success" => true, "count" => count($massbook), "data" => $massbook]);
        }
        else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! no record found"]);
        }
    }





    // --------------- [ massbook Detail ] ----------------
    public function massbookDetail($id) {
        $massbook        =       Massbooking::find($id);
        if(!is_null($massbook)) {
            return response()->json(["status" => $this->status, "success" => true, "data" => $massbook]);
        }
        else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! no massbook found"]);
        }
    }


        // if($student_id !="") {           
        //     $student              =         Student::find($student_id);
        //     if(!is_null($student)){
        //         $updated_status     =       Student::where("id", $student_id)->update($studentArray);
        //         if($updated_status == 1) {
        //             return response()->json(["status" => $this->status, "success" => true, "message" => "student detail updated successfully"]);
        //         }
        //         else {
        //             return response()->json(["status" => "failed", "message" => "Whoops! failed to update, try again."]);
        //         }               
        //     }                   
        // }



//   public function massbookUpdate(Request $request,$id)
  
//  {
//             $validator          =       Validator::make($request->all(),
//     [
//                 "name"                =>      "required",
//                 "DateTime"            =>      "required",
//                 "intention"           =>      "required",
//                 "intentionfor"        =>      "required",
//                 "language"            =>      "required",
//                 "email"               =>      "required",
//                 "number"              =>      "required",
//                 "amt"              =>      "required|numeric",
//                 "payment_status"      =>      "required",
//                 "payment_reference"   =>      "required"
//             ]
//         );

//         // if validation fails
//         if($validator->fails()) {
//             return response()->json(["status" => "failed", "validation_errors" => $validator->errors()]);
//         }
//         $cur_date = $request->DateTime;
//         $date_time = date("Y-m-d H:i:s", strtotime($cur_date));

//         /*$is_date_pm = substr($cur_date,17,18);
//         $date_value = substr($cur_date,0,16);
//         $date= $date_value.":00";*/
    

        

// // create
//  $massbook_id                     =       $request->id;
//          $massbookArray['params']         =       array(
//             "name"                        =>      $request->name,
//             "DateTime"                    =>      $date_time,
//             "language"                    =>      $request->language,
//             "intention"                   =>      $request->intention,
//             "intentionfor"                =>      $request->intentionfor,
//             "email"                       =>      $request->email,
//             "number"                      =>      $request->number,
//             "amt"                      =>      $request->amt,
//             "payment_status"              =>      $request->payment_status,
//             "payment_reference"           =>      $request->payment_reference
//         );
      
//         $massbookArray->save();
//        return response()->json(["status" => $this->status, "success" => true, "data" => $massbook]);
//         }
//         else {
//             return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! no massbook found"]);
//         }
        

//     }



//---------------- [ Delete massbook ] ----------




    public function massbookDelete($id) {
        $massbook        =       Massbooking::find($id);
        if(!is_null($massbook)) {
            $delete_status      =       Massbooking::where("id", $id)->delete();
            if($delete_status == 1) {
                return response()->json(["status" => $this->status, "success" => true, "message" => "massbook record deleted successfully"]);
            }
            else{
                return response()->json(["status" => "failed", "message" => "failed to delete, please try again"]);
            }
        }
        else {
            return response()->json(["status" => "failed", "message" => "Whoops! no massbook found with this id"]);
        }
    }




public function getRestriction(Request $request) {

    $massbook = Massbooking::where('masstime_restriction','yes')->get();
// dd($massbook);
    if(count($massbook) > 0) {
            return response()->json(["status" => $this->status, "success" => true, "count" => count($massbook), "data" => $massbook]);
        }
        else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! no record found"]);
        }

    }
}


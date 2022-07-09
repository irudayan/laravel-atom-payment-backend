<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mass;
use App\Models\Banner;
use App\Photo;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;

use App\Models\Massbooking;
use App\Models\Donation;
use DataTables;
use PDF;
use Carbon\Carbon;
use DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\RemainderMail;


use Validator,Redirect,Response,File;

class HomeController extends Controller
{
   
                
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 public function index(Request $request)
    {
        $data = DB::table('massbookings')
            ->select('*')
            ->whereDate('DateTime','>=',Carbon::now('Asia/Kolkata')->toDateString())
            ->whereTime('DateTime', '>=', Carbon::now('Asia/Kolkata')->toTimeString())
            ->whereDate('DateTime', Carbon::today())
            ->where('f_code',' Ok')
            ->orderBy('DateTime', 'asc')
            ->get();



  

        $datagroup = Massbooking::select('DateTime','language','mass_id')
                   ->whereDate('DateTime', Carbon::today())
                   ->where('f_code',' Ok')
                   ->where('masstime_restriction','No')->get()->groupBy('mass_id');

// dd($datagroup);
          

        $week = Massbooking::select("*")
                ->where('f_code',' Ok')
                ->whereBetween('created_at', 
                     [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()] )->sum('amt');
  
         $month = Massbooking::select('*')
                        ->where('f_code',' Ok')
                        ->whereMonth('created_at', date('m'))->sum('amt');
                       
     
        $year = Massbooking::select('*')
                        ->where('f_code',' Ok')
                        ->whereYear('created_at',date('Y'))->sum('amt');
        return view('backend/layouts/home',compact('data','week','month','year','datagroup'));
    
    }


public function massbooking(Request $request)
{

    $data = Massbooking::orderBy('DateTime', 'asc')
    ->where('f_code',' Ok')
    ->get();
// dd($data);
    $datagroup = '';

    return view('backend/include/massbooking',compact('data','datagroup'));
}

public function massdatefilter(Request $request)
{
      
if ($request->start_date) {

    $startDate1 = $request->start_date;
    $endDate1 = $request->end_date;
}

    $startDate = Carbon::createFromFormat('Y-m-d\TH:i', $startDate1);
    $endDate = Carbon::createFromFormat('Y-m-d\TH:i', $endDate1);

    $data = Massbooking::whereBetween('DateTime', [$startDate, $endDate])
    ->where('f_code',' Ok')
    ->get();
// dd($data);
    $datagroup = Massbooking::select('DateTime','language','mass_id')
    ->where('f_code',' Ok')
    ->where('masstime_restriction','No')
    ->whereBetween('DateTime', [$startDate, $endDate])
    ->get()
    ->groupBy('mass_id');



    
// dd($datagroup);
    return view('backend/include/massbooking',compact('data','startDate','endDate','datagroup'));

}


public function search(Request $request)
    {
        $input = $request->all();


    $startDate1 = $request->start_date ?? '';
    $endDate1 = $request->end_date  ?? '';

        if ($startDate1 != '') {
            $startDate = Carbon::createFromTimestamp(strtotime($startDate1))->format('Y-m-d\TH:i');
        }else{
            $startDate = '';
        }if ($endDate1 != '') {
            $endDate = Carbon::createFromTimestamp(strtotime($endDate1))->format('Y-m-d\TH:i');
        }else{
            $endDate = '';
        }
     
    // dd($startDate,$endDate);
        $language = $request->input('language');


// dd($search);
        $rows = Massbooking::query();
        if ($startDate != '' && $endDate != '') {
            $rows->whereBetween('DateTime',[$startDate, $endDate]);
        }
        if($language){
            $rows->where('language',$language);
        }   
            // dd($language);
            // ->whereBetween('DateTime', [$startDate, $endDate], 'LIKE', "%{$search}%")
           $data = $rows->get(); 
dd($data);
        return response()->json(['success'=>$rows]);
    }




public function restriction(Request $request)

{
    // dd( $request->all());
    $massStartDate = $request->download_starttime;
    $massEndDate = $request->download_endtime;
    $restricion = $request->masstime_restriction;



    $startDate = Carbon::createFromTimestamp(strtotime($massStartDate))->format('Y-m-d H:i:s');
    $endDate = Carbon::createFromTimestamp(strtotime($massEndDate))->format('Y-m-d H:i:s');
      
    $request->merge([
        'download_starttime' => $startDate,
        'download_endtime' => $endDate
        ]);

// dd($request);


// $data = Massbooking::whereBetween('DateTime', [$startDate, $endDate])->get();

$data = Massbooking::whereBetween('DateTime', [$startDate, $endDate])
        ->where('f_code',' Ok')
        ->get();

    $massStartDate = $request->download_starttime;
    $massEndDate = $request->download_endtime;
    $restricion = $request->masstime_restriction;



    $startDate = Carbon::createFromTimestamp(strtotime($massStartDate))->format('Y-m-d H:i:s');
    $endDate = Carbon::createFromTimestamp(strtotime($massEndDate))->format('Y-m-d H:i:s');
      
    $request->merge([
        'download_starttime' => $startDate,
        'download_endtime' => $endDate
        ]);

    $massIdVal = $request->mass_id;

    $requestdata = $request->except('mass_id');

 // dd($requestdata);

// $massIdVal = get_values();


    foreach($massIdVal as $key => $value)
    {

    $user = Massbooking::where('mass_id',$value)->update($requestdata);

    }


     // $input['mass_id'] = implode(',', $massIdVal);
// dd($input['mass_id']);


    $data = Massbooking::where('mass_id',$massIdVal)
            ->where('f_code',' Ok')
            ->get(); 
// dd($data)
    return response()->json(['message'=>$data ]);


    return view('backend/layouts/home',compact('data','startDate','endDate'));
    

}

    

public function payment()
{
        $amount = Massbooking::orderBy('DateTime', 'asc')
                  ->where('f_code',' Ok')
                  ->get();

        return view('backend/include/payment',compact('amount'));
}

public function donation(Request $request)
{
        $donate = DB::table('donations')
                    ->select('*')
                    ->whereDate('created_at', Carbon::today())
                    ->orderBy('created_at', 'asc')
                    ->get();

        $week = Donation::select("*")
                ->whereBetween('created_at', 
                     [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()] )->sum('amt');
  
        $month = Donation::select('*')
                        ->whereMonth('created_at', date('m'))->sum('amt');
                       
     $year = Donation::select('*')
                        ->whereYear('created_at',date('Y'))->sum('amt');

        return view('backend/include/donation',compact('donate','week','month','year'));
}

public function donor(Request $request)
{
        $donors = DB::table('donations')
                 ->get();

        return view('backend/include/donor',compact('donors'));
}


public function week(Request $request)
{


        $week = DB::table('donations')
                ->select('*')
                ->whereBetween('created_at', 
                     [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()] )
                ->get();

        return view('backend/include/weeklydonate',compact('week'));
}
public function month(Request $request)
{
        $month = Donation::select('*')
                        ->whereMonth('created_at', date('m'))
                        ->get();

        return view('backend/include/monthlydonate',compact('month'));
}

public function year(Request $request)
{
        $year = Donation::select('*')
             ->whereYear('created_at',date('Y'))
             ->get();

        return view('backend/include/annualdonate',compact('year'));
}



// public function UserEmail(Request $request)
// {
//     $input = $request->all();

//     $email = $request->email;
// // dd($email);

//     if(isset($input)){
       
//         $bodyContent = [
//                     'toName' => 'irudayan',
//                     'content' => "message recevied successfully",
//                 ];
//         try {
//  // dd('in');
//             \Mail::to($email)->send(new \App\Mail\MyTestMail($bodyContent));
//         } catch (\Exception $e) {
//              dd('out');

//         }
//     }
    

//     return response()->json(['success'=>"success"]);
// }


 // public function delete($id)
 //    {
 //        Massbooking::find($id)->delete();
 //  dd($id);

 //        return back();
 //    }

// public function bannerimage()
// {
       
//          return view('backend/include/bannerimage');
// }

//     public function bannerimagePost(Request $request)
//     {
//         $request->validate([
//             'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         ]);
  
//         $fileName = time().'.'.$request->file->extension();  
   
//         $request->file->move(public_path('uploads'), $fileName);
   
//         return back()
//             ->with('success','You have successfully upload file.')
//             ->with('file',$fileName);
   
//     }


public function newform()
{
       
         return view('backend/include/newform');
}



// public function background()
// {
       
//          return view('backend/include/background');
// }



// public function todaymass()
// {
//         $data = Massbooking::all();
//          return view('backend/include/todaymass',compact('data'));
// }

// {
//         $data = Massbooking::all();
//          return view('backend/include/massbooking',compact('data'));
// }
 // public function createPDF() 
 // {
 //      // retreive all records from db
 //      $data = Massbooking::all();
 //      // share data to view
 //      view()->share('employee',$data);
 //      $pdf = Massbooking::loadView('massbooking', $data);
 //      // download PDF file with download method
 //      return $pdf->download('mass.pdf');
 //       return view('backend/include/massbooking/pdf',compact('data'));
 //    }

    public function createPDF()
    {   
        $data = Massbooking::all();
        // dd($pdf);
        $pdf = PDF::loadView('backend/include/massbooking', compact('data'));
     // dd($pdf);
        return $pdf->download('itsolutionstuff.pdf');

//         $data = Massbooking::all();

//         $pdf = PDF::loadView($data);
// dd($pdf);
//         return $pdf->download($data.'pdf');
    }

//     public function createPDF(Request $request, $id){
//     $massbook = $this->show($id)->massbook;
   


}

// API DATA WILL GET
// public function massbooking()
//     {   $datas = array();
//        $response = Http::get('http://172.104.76.206:8081/api/mass-booking');
//         $quizzes = json_decode($response->body());
//        $datas = $quizzes->data;
      
//  $data = Mass::all();


//   $mass_id=[];
// foreach($data as $mass){
//             $mass_id[] = $mass->mass_id;
//     }
   
//  foreach($datas as $key=> $val)
//     // dd($datas as $key=> $val);
//   {
//     // dd($data[$key]->mass_intention);
//     if(!in_array($datas[$key]->id, $mass_id)){
//       Mass::create([
//         'mass_id' => $datas[$key]->id,
//         'name' => $datas[$key]->name,
//         'mass_intention' => $datas[$key]->mass_intention,
//         'mass_offered' => $datas[$key]->mass_offered,
//         'date' => $datas[$key]->date,
//         'mass_time' => $datas[$key]->mass_time,
//         'number_of_days' => $datas[$key]->number_of_days,
//         'email' => $datas[$key]->email,
//         'phone' => $datas[$key]->phone,
//         'place' => $datas[$key]->place,   
//       ]);
//       }
//       }
 
//     return view('backend/include/massbooking',compact('data'));
    
//  }
 
// }      
 

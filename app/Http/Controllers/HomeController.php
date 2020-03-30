<?php


namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         //Gets the vehicle categories
         $categories = DB::table('vehicle_categories')->get();

    
         


        return view('home', ['categories' => $categories]);
    }

    public function reservation(Request $request){

       

        //Check if a Post request has been made
        if(isset($_POST['makeRequest'])){

            $request->session()->put('temp_id',uniqid('Anonymous_'));
            $request->session()->put('location', $_POST['location']);
            $request->session()->put('date_from', $_POST['date_from']);
            $request->session()->put('time_from', $_POST['time_from']);
            $request->session()->put('time_to', $_POST['time_to']);
            $request->session()->put('select_cartype', $_POST['select_cartype']);

            $sess_data = $request->session()->all();
            print_r($sess_data);
               $data = 'Successful';
        }


        return redirect()->route('choose', $data);
    }

    public function about()
    {
        return 'About Page';
    }

    public function faq(){
        return 'faq Page';
    }

    


}

<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

       
    }


    public function chooseCar(Request $request){

        if(isset($_POST['update'])){

            $request->session()->put('location', $_POST['location']);
            $request->session()->put('date_from', $_POST['date_from']);
            $request->session()->put('time_from', $_POST['time_from']);
            $request->session()->put('time_to', $_POST['time_to']);
            $request->session()->put('select_cartype', $_POST['select_cartype']);
 
        }

         //Gets the vehicle categories
         $categories = DB::table('vehicle_categories')->get();

         $sess_data = $request->session()->all();

         //Get the Vehiles
         $vehicles = DB::table('vehicles')->where('category_id', $sess_data['select_cartype'] )->limit(1)->get();
        //get the price of a the car type
         $prices = DB::table('price_range')->where('category_id', $sess_data['select_cartype'] )->limit(1)->get();
        $intervals = DB::table('rent_time')->get();

        if(isset($sess_data['select_cartype'])){
            
           foreach ($prices as $key => $value) {
               foreach ($interval as $time => $value) {
                        $total_Cost = $prices * $intervals;
               }
           }    
        }

        

         $price_vehiclecat =  DB::table('vehicle_categories')
         ->join('price_range', 'vehicle_categories.id', '=', 'price_range.category_id')
         ->join('vehicles', 'vehicle_categories.id', '=', 'vehicles.category_id')
         ->select('vehicle_categories.id', 'price_range.amount', 'vehicles.')
         ->get();
        print_r($price_vehiclecat);

        $data = $sess_data;
        return view('choose-car', ['data'=> $data,'categories'=> $categories, 'vehicles' => $vehicles, 'price' => $price]);
    }

}

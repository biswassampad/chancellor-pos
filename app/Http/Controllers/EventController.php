<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addEvntHall(Request $request){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $hall = DB::table('event_halls')->insert([
            'type'=>$request->type,
            'maxcapacity'=>$request->max,
            'mincapacity'=>$request->min,
            'price'=>$request->price,
            'status'=>1,
            'created_at'=>$time,
            'updated_at'=>$time,
        ]);
        return redirect()->back()->with('success','Event Hall Added Successfully');
    }
    public function addcat(Request $request){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $cat = DB::table('event_packages')->insert([
            'PackageName'=>$request->name,
            'vnv'=>$request->vnv,
            'Price'=>$request->price,
            'PackageDetails'=>$request->about,
        ]);
        return redirect()->back()->with('success','Event Category Added Successfully');
    }
    public function eventcustomer(){
        $customers = DB::table('event_customers')->where('status',1)->get();

        return view('eventcustomer',compact('customers'));
    }
    public function addcustomer(Request $request){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $customer=DB::table('event_customers')->insert([
            'name'=>$request->name,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'status'=>1,
            'created_at'=>$time,
            'updated_at'=>$time
        ]);
        return redirect()->back()->with('success','Event Customer Added Successfully');
    }
    public function eventhalls(){}
}


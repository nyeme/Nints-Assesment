<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Details;
use App\Models\Location;
use App\Models\Shipment;

class UserController extends Controller
{
    //
    public function index()
    {
        $details = Details::with('location','shipment')->get();
        return view('total.amount',compact('details'));
    }

    public function create()
    {
        $locations = Location::all();
        $shipments = Shipment::all();
        return view('test_home',compact('locations','shipments'));
    }

    public function amount(Request $request)
    {
        $input = $request->all();
        Details:: create($input);
        $search_text = DB::table('details')->count();
                $details = Details::where('id', 'Like', '%'.$search_text.'%')->with('shipment','location')->get();
                
                return view('total.amount',compact('details'));


    }

    public function latest(Request $request)
    {
        $input = (object) $request->all();
        $items = [];


        for ($i =details('íd')->count(); $i <= $request->input('items_number'); $i++) 
        { 
            $item_name = $request->input("item_name_$i");
            $item_quantity = $request->input("item_quantity_$i");
            $item_price = $request->input("item_price_$i");

            if(empty($item_price) || $item_price == 0){
                return redirect('/');
            }

            $item = new Item();
            $item->setName($item_name)
                ->setQuantity($item_quantity)
                ->setPrice($item_price)
                ->setCurrency('USD');

            $items[] = $item;
        }

        
}
    public function search()
            {
                $search_text = $_GET['quary'];
                $details = Details::where('title', 'Like', '%'.$search_text.'%')->with('shipment','location')->get();
                
                return view('search',compact('details'));
            }
}
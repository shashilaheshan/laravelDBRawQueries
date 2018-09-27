<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Customer;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    
       public function AddOrder($item_name,$item_price,$item_qty,$total,$cus_id){
        $id=$cus_id;
       $findcus=Customer::find($id);
       if($findcus){
        $data=new Order;
        $data->item_name=$item_name;
        $data->item_price=$item_price;
        $data->item_qty=$item_qty;
        $data->total=$total;
        $data->cus_id=$cus_id;
        $data->save();
        return response()->json(['response'=>'success']);


       }else{
        return response()->json(['response'=>'error']);

       }
      


       }
       public function getOrders(){
             //this query return  all data row from orders table
        $data=DB::select("select * from orders");
        dd($data);

       }
       public function getOrder($id){
             //this query will  select specific data row from orders table
        $data=DB::select("select * from orders where id=?",array($id));
        dd($data);

       }
       public function deleteOrder($id){
           //this query will delete specific data row from orders table
        $data=DB::delete("delete from orders where id=?",array($id));
        dd($data);

       }
       public function updateOrders(){
             //this query will update specific row from orders table

                $data=DB::update("update orders set item_name=? where id=?",array('pencil','2'));
                dd($data);

       }


}

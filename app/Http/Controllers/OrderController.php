<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Product;
use App\Supplier;
use App\Mail\SupplierProducts;
use App\Mail\ClientPayment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class OrderController extends Controller
{
  public function requestProducts($order_id)
      {     
            $order = Order::where('id', $order_id)->first();
            
            $order->status = 2;
            $order->update();
            
            \Mail::to($order->client)->send(new SupplierProducts($order));
                
            return redirect()->back();
        }
    
  public function requestPayment($order_id)
      {     
            $order = Order::where('id', $order_id)->first();
            
            $order->status = 3;
            $order->update();
            
            \Mail::to($order->client)->send(new ClientPayment($order));
                
            return redirect()->back();
        }
    
  public function postProductQuantities(Request $request, $product_id)
      {    

            $product = Product::where('id', $product_id)->first();
            
            $product->availability = $request['instock'];
            $product->available_count = $request['availablecount'];
            $product->delivery_date = $request['date'];
            $product->discontinued = $request['discontinued'];
                
            $product->update();
            
            return view ('supplierThanks');
        }
    
  public function getOrderSupplier($id)
      {
        return view ('supplier', ['order' => Order::findOrFail($id)]);
    }
    
   public function getOrderClient($id)
      {
        return view ('client', ['order' => Order::findOrFail($id)]);
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\ProductInvoices;
use Automattic\WooCommerce\Client;
use Session;
use Excel;

class OrderController extends Controller
{
    protected $woocommerce; 

    public function __construct(){
       
    }

    // lister les produits
    public function index(){
        //dd($this->woocommerce->get("products"));

        $conn = new ConnectController();
        $this->woocommerce = $conn->woocommerce;

        $data = [
          'orders' => $this->woocommerce->get('orders',array('per_page'=>99))
        ];

        return view('orders.index')->with($data);
    }


    //récupérer le formulaire de modification
    public function edit($id)
    {
      
      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;

      $data = [
        'order' => $this->woocommerce->get('orders/'.$id)
      ];
   
      return view('orders.edit')->with($data);
         
    }

    //modifier le produit
    public function update(Request $request)
    {
      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;

      $data = [
        'status' => $request->status
      ];

      $this->woocommerce->put("orders/".$request->id , $data);
        return redirect('/orders');
    }


    public function excel(){

      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;
      $list_orders = $this->woocommerce->get("orders", array('per_page'=>100,'page'=>1));

      $file[]=array('Order Number','Order by','total price','status','date');
      foreach ($list_orders as $order)
      {
          $file[]=array(
              'Order Number'=>$order->number,
              'Order by'=>$order->billing->first_name,
              'total price'=>$order->total,
              'status'=>$order->status,
              'date'=>$order->date_created 

          );
      }

      return Excel::download(new productInvoices($file),'orders_data.xlsx');

    }
  
}

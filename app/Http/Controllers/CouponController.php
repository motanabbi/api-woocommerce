<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductInvoices;
use Excel;

class CouponController extends Controller
{
    protected $woocommerce; 

    public function __construct(){
       
    }

    // lister les codes promo
    public function index(){

        $conn = new ConnectController();
        $this->woocommerce = $conn->woocommerce;

        $data = [
          'coupons' => $this->woocommerce->get('coupons',array('per_page'=>99))
        ];

        return view('coupons.index')->with($data);
    }

    //récupérer le formulaire d'Ajout
    public function create(){
     
      return view('coupons.add');
    }

   // Ajouter le Code promo
     public function add(Request $request){
        $conn = new ConnectController();
        $this->woocommerce = $conn->woocommerce;
       

        $data = [
          'code' => $request->code,
          'discount_type' => 'percent',
          'amount' => $request->amount,
          'individual_use' => true,
          'exclude_sale_items' => true,
          'minimum_amount' => '100.00'
        ];
     
        $this->woocommerce->post("coupons",$data);
        return redirect('/coupons');
    }


    //récupérer le formulaire de modification
    public function edit($id)
    {
      
      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;

      $data = [
        'coupon' => $this->woocommerce->get('coupons/'.$id),
      ];
   
      return view('coupons.edit')->with($data);
         
    }

    //modifier le produit
    public function update(Request $request)
    {
      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;

      $data = [
          'amount' => $request->amount
      ];

      $this->woocommerce->put("coupons/".$request->id , $data);
       return redirect('/coupons');
    }
  

    // Deleting Product
    public function delete(Request $request){
        $conn = new ConnectController();
        $this->woocommerce = $conn->woocommerce;

        $this->woocommerce->delete("coupons/".$request->id, ['force' => true]);
        return redirect()->back();
    }



    public function excel(){

      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;
      $list_coupons = $this->woocommerce->get("coupons", array('per_page'=>100,'page'=>1));

      $file[]=array('ID','Code','Amount','Last Update');
      foreach ($list_coupons as $coupon)
      {
          $file[]=array(
              'ID'=>$coupon->id,
              'Code'=>$coupon->code,
              'Amount'=>$coupon->amount,
              'Last Update'=>$coupon->date_modified
          );
      }

      return Excel::download(new productInvoices($file),'coupons_data.xlsx');

    }

}

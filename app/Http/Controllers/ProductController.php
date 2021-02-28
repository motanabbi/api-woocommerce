<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\ProductInvoices;
use Automattic\WooCommerce\Client;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Session;
use Excel;



class ProductController extends Controller
{
    protected $woocommerce; 

    public function __construct(){
       
    }

    // lister les produits
    public function index(){

        $conn = new ConnectController();
        $this->woocommerce = $conn->woocommerce;

        $data = [
          'listproducts' => $this->woocommerce->get('products',array('per_page'=>99))
        ];

        //$products = $this->woocommerce->get('products');

        return view('products.index')->with($data);
    }

    //récupérer le formulaire d'Ajout
    public function create(){

        $conn = new ConnectController();
        $this->woocommerce = $conn->woocommerce;

        $data = [
          'categories' => $this->woocommerce->get('products/categories')
        ];
     
      return view('products.add')->with($data);
   }

   // Ajouter le Product
     public function add(Request $request){
        $conn = new ConnectController();
        $this->woocommerce = $conn->woocommerce;
       

        $data = [
          'name' => $request->name,
          'type' => $request->type,
          'regular_price' => $request->price,
          'description' => $request->description,
          'short_description' => $request->short_description,
          'categories' => [
            [
                'id' => $request->categorie
            ]
          ],
          'images' => [
              [
                  'src' => $request->image
              ]
          ]
        ];
     
        $this->woocommerce->post("products",$data);
        return redirect('/products');
    }


    //récupérer le formulaire de modification
    public function edit($id)
    {
      
      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;

      $data = [
        'product' => $this->woocommerce->get('products/'.$id),
        'categories' => $this->woocommerce->get('products/categories')
      ];
   
      return view('products.edit')->with($data);
         
    }

    //modifier le produit
    public function update(Request $request)
    {
      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;

      $data = [
        'name' => $request->name,
        'type' => $request->type,
        'regular_price' => $request->price,
        'description' => $request->description,
        'short_description' => $request->short_description,
        'categories' => [
          [
              'id' => $request->categorie
          ]
        ],
        'images' => [
            [
                'src' => $request->image
            ]
        ]
      ];

      $this->woocommerce->put("products/".$request->id , $data);
        return redirect('/products');
    }
  

    // Deleting Product
    public function delete(Request $request){
        $conn = new ConnectController();
        $this->woocommerce = $conn->woocommerce;
        $this->woocommerce->delete("products/".$request->id);
        return redirect()->back();
    }


    

    public function excel(){

      $conn = new ConnectController();
      $this->woocommerce = $conn->woocommerce;
      $list_products = $this->woocommerce->get("products", array('per_page'=>100,'page'=>1));

      $file[]=array('id','product','price','regular price','on Sale');
      foreach ($list_products as $product)
      {
          $file[]=array(
              'id'=>$product->id,
              'product'=>$product->name,
              'price'=>$product->price,
              'regular price'=>$product->regular_price,
              'On Sale'=>$product->on_sale

          );
      }

      return Excel::download(new productInvoices($file),'product_data.xlsx');

    }

    
}

<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\ConnectController;
use Automattic\WooCommerce\Client;

use Session;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $conn = new ConnectController();
        $woocommerce = $conn->woocommerce;

        $products = $woocommerce->get('products',array('per_page'=>99));

        return $products;
    }
}

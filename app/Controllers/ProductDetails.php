<?php

namespace App\Controllers;

class ProductDetails extends BaseController
{
    public function product($productName)
    {
        $metadata = [
            "title" => "$productName | iSan Shop", // Ubah productName menjadi nama produk agar title lebih clean
            "product_name" => $productName // product_name berasal dari slug produk
        ];

        return view('pages/product-details', $metadata);
    }
}

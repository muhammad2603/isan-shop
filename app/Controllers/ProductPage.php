<?php

namespace App\Controllers;

class ProductPage extends BaseController
{
    public function productView(): string
    {
        return view('/pages/product-page', ["title" => "Samsung S25 Ultra"]);
    }
}

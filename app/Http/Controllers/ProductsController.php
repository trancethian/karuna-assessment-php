<?php

namespace App\Http\Controllers;

use App\DataTables\ProductsDataTable;

class ProductsController extends Controller {
    public function index(ProductsDataTable $dataTable) {
        return $dataTable->render('products.index');
    }
}

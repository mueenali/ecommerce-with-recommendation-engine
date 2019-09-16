<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\PhotoRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SubCategoryRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /** @var  ProductRepository */
    private $productsRepository;
    /** @var CategoryRepository */
    private $categoriesRepository;
    public function __construct(ProductRepository $productRepo, CategoryRepository $categoriesRepo)
    {
        $this->productsRepository = $productRepo;
        $this->categoriesRepository = $categoriesRepo;
    }

    public function getAllProducts() {
        $products = $this->productsRepository->all();
        $categories = $this->categoriesRepository->all();
        return view('app.products.shop', compact('products','categories'));
    }

    public function getProduct($id) {
        $product = $this->productsRepository->find($id);
        if(empty($product)) {
            return redirect('back');
        }
        return view('app.products.product', compact('product'));
    }
}

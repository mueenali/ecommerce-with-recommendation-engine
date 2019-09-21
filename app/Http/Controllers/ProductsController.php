<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;

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
            return redirect('shop');
        }
        return view('app.products.product')->with('product', $product);
    }

    public function getAllProductsByCategory($id) {
        $products = $this->productsRepository->findBy('sub_category_id', $id);
        $categories = $this->categoriesRepository->all();
        return view('app.products.shop',compact('products','categories'));
    }
}

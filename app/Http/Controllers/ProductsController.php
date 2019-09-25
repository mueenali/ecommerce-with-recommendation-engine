<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\RecommendationRepository;
use App\Repositories\VisitedProductRepository;

class ProductsController extends Controller
{
    /** @var  ProductRepository */
    private $productsRepository;
    /** @var CategoryRepository */
    private $categoriesRepository;
    /** @var VisitedProductRepository */
    private $visitedProductRepository;
    /** @var RecommendationRepository */
    private $recommendationRepository;
    public function __construct(ProductRepository $productRepo, CategoryRepository $categoriesRepo,RecommendationRepository $recommendationRepo,
                                VisitedProductRepository $visitedProductRepo)
    {
        $this->productsRepository = $productRepo;
        $this->categoriesRepository = $categoriesRepo;
        $this->visitedProductRepository = $visitedProductRepo;
        $this->recommendationRepository = $recommendationRepo;
    }

    public function getAllProducts() {
        $products = $this->productsRepository->paginate(12);
        $categories = $this->categoriesRepository->all();
        return view('app.products.shop', compact('products','categories'));
    }

    public function getProduct($id) {
        $product = $this->productsRepository->find($id);
        if(empty($product)) {
            return redirect('shop');
        }

        if(current_user() != null) {
            $this->visitedProductRepository->deleteBy('user_id', current_user()->id);
            $this->visitedProductRepository->create([
                'user_id' => current_user()->id,
                'product_id' => $product->id
            ]);
        }
        return view('app.products.product')->with('product', $product);
    }

    public function getAllProductsByCategory($id) {
        $products = $this->productsRepository->findBy('sub_category_id', $id);
        $categories = $this->categoriesRepository->all();
        return view('app.products.shop',compact('products','categories'));
    }
}

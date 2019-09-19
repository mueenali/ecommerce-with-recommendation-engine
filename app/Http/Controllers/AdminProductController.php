<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;
use App\Repositories\SubCategoryRepository;

class AdminProductController extends Controller
{

    /** @var  SubCategoryRepository */
    private $subCategoryRepository;
    /** @var ProductRepository */
    private $productRepository;
    public function __construct(SubCategoryRepository $subCategoryRepo, ProductRepository $productRepo)
    {
        $this->subCategoryRepository = $subCategoryRepo;
        $this->productRepository = $productRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->paginate(15);
        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subCategories = $this->subCategoryRepository->all();
        return view('admin.products.create')->with('subCategories', $subCategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $this->productRepository->create($request->all());
        return redirect()->route('product.index')->withStatus(__('Product successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);
        $subCategories = $this->subCategoryRepository->all();
        return view('admin.products.edit', compact('product', 'subCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $this->productRepository->update($request->all(), $id);
        return redirect()->route('product.index')->withStatus(__('Product successfully update.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productRepository->delete($id);
        return redirect()->route('product.index')->withStatus(__('Product successfully deleted.'));
    }
}

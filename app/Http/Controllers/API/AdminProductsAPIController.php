<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductAPIRequest;
use App\Http\Requests\API\UpdateProductAPIRequest;
use App\Models\AdminProducts;
use App\Repositories\AdminProductsRepository;
use App\Repositories\PhotoRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AdminProductsController
 * @package App\Http\Controllers\API
 */

class AdminProductsAPIController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productsRepository;
    /**@var PhotoRepository */
    private $photosRepository;

    public function __construct(ProductRepository $productRepo, PhotoRepository $photoRepo)
    {
        $this->productsRepository = $productRepo;
        $this->photosRepository = $photoRepo;
    }

    /**
     * Display a listing of the AdminProducts.
     * GET|HEAD /adminProducts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );
        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

    /**
     * Store a newly created AdminProducts in storage.
     * POST /adminProducts
     *
     * @param CreateAdminProductsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductAPIRequest $request)
    {
        $input = $request->all();
        $product = $this->productsRepository->create($input);
        if($request->hasFile('photos')){
            $product = $this->productsRepository->createPhotosForProduct($product,$request->file('photos'));
        }
        return $this->sendResponse($product->toArray(), 'Admin Products saved successfully');
    }
    /**
     * Display the specified AdminProducts.
     * GET|HEAD /adminProducts/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Products $products */
        $product = $this->productsRepository->find($id)->with('photos');
        if (empty($product)) {
            return $this->sendError('Product not found');
        }
        return $this->sendResponse($product->toArray(), 'Product retrieved successfully');
    }

    /**
     * Update the specified AdminProducts in storage.
     * PUT/PATCH /adminProducts/{id}
     *
     * @param int $id
     * @param UpdateAdminProductsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductAPIRequest $request)
    {
        $input = $request->all();

        /** @var Product $product */
        $product = $this->productsRepository->find($id);

        if (empty($product)) {
            return $this->sendError('Product not found');
        }
        $product = $this->productsRepository->update($input, $id);

        return $this->sendResponse($product->toArray(), 'Product updated successfully');
    }

    /**
     * Remove the specified AdminProducts from storage.
     * DELETE /adminProducts/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Products $product */
        $product = $this->productsRepository->find($id);
        if (empty($product)) {
            return $this->sendError('Product not found');
        }
        if ($this->photosRepository->unlinkPhotos($product->photos)){
            $this->productsRepository->delete($product->id);
            return $this->sendResponse($id, 'Product deleted successfully');
        }
        return $this->sendError(' Problem in deleting the product');
    }
}

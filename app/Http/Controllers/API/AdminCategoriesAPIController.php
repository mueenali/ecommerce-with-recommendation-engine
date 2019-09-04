<?php

namespace App\Http\Controllers\API;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\API\CreateCategoryAPIRequest;
use App\Http\Requests\API\UpdateCategoryAPIRequest;
use App\Models\AdminCategories;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AdminCategoriesController
 * @package App\Http\Controllers\API
 */

class AdminCategoriesAPIController extends AppBaseController
{
    /** @var  CategoryRepository */
    private $categoriesRepository;

    public function __construct(CategoryRepository $categoriesRepo)
    {
        $this->categoriesRepository = $categoriesRepo;
    }

    /**
     * Display a listing of the AdminCategories.
     * GET|HEAD /adminCategories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $categories = $this->categoriesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );
        return $this->sendResponse($categories->toArray(), 'Categories retrieved successfully');
    }

    /**
     * Store a newly created AdminCategories in storage.
     * POST /adminCategories
     *
     * @param CreateAdminCategoriesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryAPIRequest $request)
    {
        $input = $request->all();
        $category = $this->categoriesRepository->create($input);
        return $this->sendResponse($category->toArray(), 'Category saved successfully');
    }

    /**
     * Display the specified AdminCategories.
     * GET|HEAD /adminCategories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Category $category */
        $category = $this->categoriesRepository->find($id);

        if (empty($category)) {
            return $this->sendError('Category not found');
        }

        return  $this->sendResponse($category,"Category has been created successfully");

    }

    /**
     * Update the specified AdminCategories in storage.
     * PUT/PATCH /adminCategories/{id}
     *
     * @param int $id
     * @param UpdateAdminCategoriesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var Category $category */
        $category = $this->categoriesRepository->find($id);

        if (empty($category)) {
            return $this->sendError('Category not found');
        }

        $category = $this->categoriesRepository->update($input, $id);

        return $this->sendResponse($category->toArray(), 'Category updated successfully');
    }

    /**
     * Remove the specified AdminCategories from storage.
     * DELETE /adminCategories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Category $category */
        $result = $this->categoriesRepository->delete($id);
        if (!$result) {
            return $this->sendError('Category not found');
        }
        return $this->sendResponse($id, ' Category deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSubCategoryAPIRequest;
use App\Http\Requests\API\UpdateSubCategoryAPIRequest;
use App\Models\AdminSubCategories;
use App\Models\SubCategory;
use App\Repositories\SubCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AdminSubCategoriesController
 * @package App\Http\Controllers\API
 */

class AdminSubCategoriesAPIController extends AppBaseController
{
    /** @var  SubCategoryRepository */
    private $subCategoryRepository;

    public function __construct(SubCategoryRepository $subCategoriesRepo)
    {
        $this->subCategoryRepository = $subCategoriesRepo;
    }

    /**
     * Display a listing of the AdminSubCategories.
     * GET|HEAD /admin/subCategories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $subCategories = SubCategory::with('category')->get();

        return $this->sendResponse($subCategories->toArray(), 'Admin Sub Categories retrieved successfully');
    }

    /**
     * Store a newly created AdminSubCategories in storage.
     * POST /admin/subCategories
     *
     * @param CreateSubCategoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSubCategoryAPIRequest $request)
    {
        $input = $request->all();

        $subCategory = $this->subCategoryRepository->create($input);

        return $this->sendResponse($subCategory->toArray(), 'Sub Category saved successfully');
    }

    /**
     * Display the specified AdminSubCategories.
     * GET|HEAD /admin/subCategories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var AdminSubCategories $adminSubCategories */
        $adminSubCategories = $this->adminSubCategoriesRepository->find($id);

        if (empty($adminSubCategories)) {
            return $this->sendError('Admin Sub Categories not found');
        }

        return $this->sendResponse($adminSubCategories->toArray(), 'Admin Sub Categories retrieved successfully');
    }

    /**
     * Update the specified AdminSubCategories in storage.
     * PUT/PATCH /admin/subCategories/{id}
     *
     * @param int $id
     * @param UpdateSubCategoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubCategoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var AdminSubCategories $adminSubCategories */
        $adminSubCategories = $this->adminSubCategoriesRepository->find($id);

        if (empty($adminSubCategories)) {
            return $this->sendError('Admin Sub Categories not found');
        }

        $adminSubCategories = $this->adminSubCategoriesRepository->update($input, $id);

        return $this->sendResponse($adminSubCategories->toArray(), 'AdminSubCategories updated successfully');
    }

    /**
     * Remove the specified AdminSubCategories from storage.
     * DELETE /admin/subCategories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var AdminSubCategories $adminSubCategories */
        $adminSubCategories = $this->adminSubCategoriesRepository->find($id);

        if (empty($adminSubCategories)) {
            return $this->sendError('Admin Sub Categories not found');
        }

        $adminSubCategories->delete();

        return $this->sendResponse($id, 'Admin Sub Categories deleted successfully');
    }
}

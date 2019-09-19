<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\SubCategoryRepository;

class AdminSubCategoryController extends Controller
{

    /** @var  SubCategoryRepository */
    private $subCategoryRepository;
    /** @var CategoryRepository */
    private $categoryRepository;
    public function __construct(SubCategoryRepository $subCategoryRepo, CategoryRepository $categoryRepos)
    {
        $this->subCategoryRepository = $subCategoryRepo;
        $this->categoryRepository = $categoryRepos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $subCategories = $this->subCategoryRepository->paginate(15);
        return view('admin.subCategories.index')->with('subCategories', $subCategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->all();
        return view('admin.subCategories.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateSubCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSubCategoryRequest $request)
    {
        $this->subCategoryRepository->create($request->all());
        return redirect()->route('subCategory.index')->withStatus(__('SubCategory successfully created.'));
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
        $subCategory  = $this->subCategoryRepository->find($id);
        $categories = $this->categoryRepository->all();
        return view('admin.subCategories.edit', compact('subCategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateSubCategoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubCategoryRequest $request, $id)
    {
        $this->subCategoryRepository->update($request->all(),$id);
        return redirect()->route('subCategory.index')->withStatus(__('SubCategory successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->subCategoryRepository->delete($id);
        return redirect()->route('subCategory.index')->withStatus(__('SubCategory successfully deleted.'));
    }
}

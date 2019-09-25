<?php

namespace App\Http\Controllers;

use App\Repositories\PhotoRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    /** @var ProductRepository */
    private $productRepository;
    /** @var PhotoRepository */
    private $photoRepository;
    public function __construct(ProductRepository $productRepo, PhotoRepository $photoRepo)
    {
        $this->productRepository = $productRepo;
        $this->photoRepository = $photoRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $uploaded = Storage::disk('s3')->put('images', $file, 'public' );
        $path = Storage::disk('s3')->url($uploaded);
        $data = ['path' => $path, 'product_id' => $request->input('product_id'), 'size' => $file->getSize(), 'filename' => $uploaded];
        $this->photoRepository->create($data);
        return redirect()->back()->withStatus(__('Photo successfully uploaded.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);
        if(empty($product)) {
            return redirect()->back();
        }
        return view('admin.products.viewPhotos')->with('product', $product);
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
        if (empty($product)) {
            return redirect()->back();
        }
        return view('admin.products.createPhotos')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->photoRepository->deletePhoto($id);
       return redirect()->back()->withStatus(__('Photo successfully deleted.'));
    }
}

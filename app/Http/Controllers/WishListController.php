<?php

namespace App\Http\Controllers;
use App\Models\WishlistItem;
use App\Helper\Helper;
use App\Repositories\WishlistItemRepository;
use App\Repositories\WishlistRepository;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /** @var  WishlistRepository */
    private $wishlistRepository;
    public function __construct(WishlistRepository $wishlistRepo)
    {
        $this->wishlistRepository = $wishlistRepo;
    }

    public function index()
    {
        $wishLists = $this->wishlistRepository->findBy('user_id', Helper::currentUser()->id);
        return view('app.wishList')->with('wishLists', $wishLists);
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
        $data = ['user_id' => Helper::currentUser()->id, 'product_id' => $request->input('product_id')];
        $this->wishlistRepository->create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
//        dd($id);
        $this->wishlistRepository->delete($id);
        return  redirect()->back();
    }
}

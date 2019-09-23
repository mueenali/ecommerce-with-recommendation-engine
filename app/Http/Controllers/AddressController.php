<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Repositories\AddressRepository;


class AddressController extends Controller
{
    /** @var AddressRepository */
    private $addressRepository;
    public function __construct(AddressRepository $addressRepo)
    {
        $this->addressRepository = $addressRepo;
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
        return view('app.addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request)
    {
        $this->addressRepository->create($request->all());
        return redirect()->route('userDash.index')->withStatus(__('Address successfully created.'));
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
        $address = $this->addressRepository->find($id);
        return view('app.addresses.edit')->with('address', $address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateAddressRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddressRequest $request, $id)
    {
        $this->addressRepository->update($request->all(), $id);
        return redirect()->route('userDash.index')->withStatus(__('Address successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->addressRepository->delete($id);
        return redirect()->route('userDash.index')->withStatus(__('Address successfully deleted.'));
    }
}

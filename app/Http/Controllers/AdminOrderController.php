<?php

namespace App\Http\Controllers;

use App\Repositories\OrderItemRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{

    /** @var  OrderRepository */
    private $orderRepository;
    /** @var  OrderItemRepository */
    private $orderItemRepository;
    public function __construct(OrderRepository $orderRepo, OrderItemRepository $orderItemRepo)
    {
        $this->orderRepository = $orderRepo;
        $this->orderItemRepository = $orderItemRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->orderRepository->paginate(15);
        return view('admin.orders.view')->with('orders', $orders);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderItems = $this->orderItemRepository->findBy('order_id', $id);
        return view('admin.orders.show')->with('orderItems', $orderItems);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = $this->orderRepository->find($id);
        return view('admin.orders.edit')->with('order', $order);
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
        $this->orderRepository->update($request->all(), $id);
        return redirect()->route('orders.index')->withStatus(__('Order status successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

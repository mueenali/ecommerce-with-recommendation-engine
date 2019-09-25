<?php

namespace App\Http\Controllers;

use App\Repositories\OrderRepository;

class AdminController extends Controller
{
    /** @var  OrderRepository */
    private $orderRepository;
    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepository = $orderRepo;
    }
    public function index() {
        $orders = $this->orderRepository->getLastRecords(5);
        return view('admin.dashboard')->with('orders', $orders);
    }

}

<?php

namespace App\Http\Controllers;

use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    /** @var OrderRepository */
    private $orderRepository;

    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepository = $orderRepo;
    }
    public function index() {
        return view('app.userDashboard');
    }

    public function viewOrder($id) {
        $order = $this->orderRepository->find($id);
        if(empty($order)) {
            return redirect()->back();
        }
        return view('app.viewOrder')->with('order', $order);
    }
}

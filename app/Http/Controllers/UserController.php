<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Repositories\OrderItemRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ReviewRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    /** @var OrderRepository */
    private $orderRepository;
    /** @var OrderItemRepository */
    private $orderItemRepository;
    /** @var ReviewRepository */
    private $reviewRepository;
    public function __construct(OrderRepository $orderRepo, OrderItemRepository $orderItemRepo, ReviewRepository  $reviewRepo)
    {
        $this->orderRepository = $orderRepo;
        $this->orderItemRepository = $orderItemRepo;
        $this->reviewRepository = $reviewRepo;
    }
    public function index() {
        return view('app.userDashboard')->with('productsToReview');
    }

    public function viewOrder($id) {
        $order = $this->orderRepository->find($id);
        if(empty($order)) {
            return redirect()->back();
        }
        return view('app.viewOrder')->with('order', $order);
    }

    public function createReview($orderItemId) {
        $orderItem = $this->orderItemRepository->find($orderItemId);
        return view('app.reviewCreate')->with('orderItem', $orderItem);
    }

    public function storeReview(Request $request) {
        $orderItem = $this->orderItemRepository->find($request->input('orderItemId'));
        $orderItem->reviewed = 1;
        $orderItem->save();
        $request->merge(['user_id' => Helper::current_user()->id]);
        $this->reviewRepository->create($request->all());
        return redirect()->route('order.show', $orderItem->order->id )->withStatus(__('Review successfully submitted.'));
    }
}

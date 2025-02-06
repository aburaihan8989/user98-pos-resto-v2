<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index
    public function index() {
        $total_sales = Order::sum('total_price');
        $total_count = Order::count();
        // $purchase_returns = PurchaseReturn::completed()->sum('total_amount');

        return view('pages.dashboard', [
            'total_sales'     => $total_sales,
            'total_count'     => $total_count
        ]);
    }
}

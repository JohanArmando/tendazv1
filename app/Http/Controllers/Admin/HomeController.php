<?php

namespace Tendaz\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Request;
use Tendaz\Http\Requests;
use Tendaz\Models\Order\Order;
use Tendaz\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function home(Request $request){
        $orderPendingDay = Order::OrderPendingDay();
        $orderPendingYesterday = Order::OrderPendingYesterday();
        $orderPendingMore = Order::OrderPendingMore();
        $totalMonth = Order::TotalMonth();
        $totalWeek = Order::TotalWeek();
        $totalDay = Order::TotalDay();
        $totalCountWeek = Order::TotalCountWeek();
        $totalCountMonth = Order::TotalCountMonth();
        $totalCountDay = Order::TotalCountDay();
        $salesWeekly = Order::SalesWeekly();
        $countWeekly = Order::CountWeekly();
        $orderByStatus = Order::ByStatus();
        $orderByDate = Order::ByDate();
        
        return view('admin.home' , compact(
            'orderPendingDay',
            'orderPendingYesterday',
            'orderPendingMore',
            'totalMonth' , 
            'totalWeek' , 
            'totalCountMonth' , 
            'salesWeekly' , 
            'totalCountWeek' , 
            'countWeekly' ,
            'totalDay' ,
            'orderByStatus' ,
            'totalCountDay',
            'orderByDate'));
    }
}

<?php

namespace Tendaz\Http\Controllers\Admin;

use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Images\Image;
use Tendaz\Models\Marketing\Trend;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Products\Variant;

class StaticsController extends Controller
{
    public function basic()
    {
        $sold = Order::totalSold();
        $ordersTotal = Order::totalOrders();
        $average =  (int) $sold / ($ordersTotal ? $ordersTotal : 1);
        //dd(Product::withCount('variants' , 'categories')->get());
        $higherSell = Product::TotalSell();
        $higherBilling = Product::totalBilling();
        $images = Image::all();
        return view('admin.stats.basic' , [
            'sold'          => $sold ,
            'ordersTotal'   => $ordersTotal,
            'average'       => $average,
            'higherBilling' => $higherBilling,
            'higherSell' => $higherSell,
            'images' => $images
        ]);
    }

    public function advanced(){
        $products = Product::all();
        $hits = Trend::where('trend_type','product')->selectRaw('*, count(*) as sum')->groupBy('trend_id')->get();
        $totalOrders = Order::NotInitOrders()->count();
        $money = Order::NotInitOrders()->sum('total');
        if(!$totalOrders == 0) $avg = $money/$totalOrders; else $avg = 0;
        $date = 'Todas las Fechas';
        return view('admin.stats.advanced',compact('products','totalOrders','money','avg','date','hits'));
    }
    public function update($subdomain , Request $request){
        $products = Product::all();
        //vacio
        if($request->get('dateStart') == '' && $request->get('dateEnd') == '' && $request->get('dates') == ''){
            return redirect()->to('admin/stats/advanced');
        }else{
            if($request->get('dateStart') == '' && !$request->get('dateEnd') == '' && $request->get('dates') == ''){
                return redirect()->to('admin/stats/advanced')
                    ->with('message', array('type' => 'warning' , 'message' => 'No selecionaste fecha de inicio'));
            }
        }
        //with datetime
        if(!$request->get('dateStart') == '' && !$request->get('dateEnd') == ''){
            $date = Carbon::parse($request->get('dateStart'))->format('d/m/Y').
                ' - '.Carbon::parse($request->get('dateEnd'))->format('d/m/Y');
            $hits = Trend::where('trend_type','product')->selectRaw('*, count(*) as sum')->groupBy('trend_id')
                ->whereBetween('created_at',[Carbon::parse($request->get('dateStart')),Carbon::parse($request->get('dateEnd'))])->get();
            $totalOrders = Order::where('orders.shop_id' , $request->shop->id)->NotInitOrders()
                ->whereBetween('created_at',[Carbon::parse($request->get('dateStart')),Carbon::parse($request->get('dateEnd'))])->count();
            $money = Order::where('orders.shop_id' , $request->shop->id)->NotInitOrders()
                ->whereBetween('created_at',[Carbon::parse($request->get('dateStart')),Carbon::parse($request->get('dateEnd'))])
                ->NotInitOrders()->sum('total');
            if(!$totalOrders == 0) $avg = $money/$totalOrders; else $avg = 0;
            return view('admin.stats.advanced',compact('products','totalOrders','money','avg','date','hits'));
        }
        //7 days
        if($request->get('dates') == 'a'){
            $date = 'Ultimos 7 Dias';
            $hits = Trend::where('trend_type','product')->selectRaw('*, count(*) as sum')->groupBy('trend_id')
                ->whereBetween('created_at',[Carbon::today()->subDays(8),Carbon::now()])->get();
            $totalOrders = Order::where('orders.shop_id' , $request->shop->id)->NotInitOrders()
                ->whereBetween('created_at',[Carbon::today()->subDays(8),Carbon::now()])->count();
            $money = Order::whereBetween('created_at',[Carbon::today()->subDays(8),Carbon::now()])
                ->NotInitOrders()->sum('total');
            if(!$totalOrders == 0) $avg = $money/$totalOrders; else $avg = 0;
            return view('admin.stats.advanced',compact('products','totalOrders','money','avg','date','hits'));
        }else{
            //2 weeks
            if($request->get('dates') == 'b'){
                $date = 'Ultimas 2 Semanas';
                $hits = Trend::where('trend_type','product')->selectRaw('*, count(*) as sum')->groupBy('trend_id')
                    ->whereBetween('created_at',[Carbon::today()->subDays(16),Carbon::now()])->get();
                $totalOrders = Order::where('orders.shop_id' , $request->shop->id)->NotInitOrders()
                    ->whereBetween('created_at',[Carbon::today()->subDays(16),Carbon::now()])->count();
                $money = Order::where('orders.shop_id' , $request->shop->id)
                    ->whereBetween('created_at',[Carbon::today()->subDays(16),Carbon::now()])->NotInitOrders()->sum('total');
                if(!$totalOrders == 0) $avg = $money/$totalOrders; else $avg = 0;
                return view('admin.stats.advanced',compact('products','totalOrders','money','avg','date','hits'));
            }else{
                //end month
                if($request->get('dates') == 'c'){
                    $date = 'Ultimo Mes';
                    $hits = Trend::where('trend_type','product')->selectRaw('*, count(*) as sum')->groupBy('trend_id')
                        ->whereBetween('created_at',[Carbon::today()->subMonth(1),Carbon::now()])->get();
                    $totalOrders = Order::where('orders.shop_id' , $request->shop->id)->NotInitOrders()
                        ->whereBetween('created_at',[Carbon::today()->subMonth(1),Carbon::now()])->count();
                    $money = Order::where('orders.shop_id' , $request->shop->id)
                        ->whereBetween('created_at',[Carbon::today()->subMonth(1),Carbon::now()])->NotInitOrders()->sum('total');
                    if(!$totalOrders == 0) $avg = $money/$totalOrders; else $avg = 0;
                    return view('admin.stats.advanced',compact('products','totalOrders','money','avg','date','hits'));
                }
            }
        }
    }

    public function map(){
        return view('admin.stats.map');
    }

}

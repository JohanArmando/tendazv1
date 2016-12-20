<?php

namespace Tendaz\Http\Controllers\Admin\Design;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Design\Theme;
use igaster\laravelTheme\Facades\Theme as Template;
use Tendaz\Models\Store\Store;


class DesignController extends Controller
{
    public function __construct()
    {
        $this->middleware('theme' , ['only' => ['index']]);
    }

    public function index(Request $request) 
    {
        $themes = Theme::all();
        $current = Template::current();
        return view('admin.design.theme',compact('themes','current'));
    }

    public function change($subdomain ,Request $request)
    {
        $request->shop->theme_id = $request->get('id');
        $request->shop->save();
        $template = Theme::find($request->get('id'))->name;
        foreach ($request->shop->domains as $domain){
            Cache::forever("$domain->name._theme_current" , $template);
        }
        return redirect()->back()->with('message',array('type' => 'success','message' => 'Tu tema ha sido actualizado a '
            .$template.' visualizalo en el boton VISITA TU TIENDA'));
    }

    public function logo(Request $request)
    {
        $logo = $request->shop;
        return view('admin.design.logo',compact('logo'));
    }

    public function postLogo($subdomain , Request $request , $id)
    {
        Cache::forget($subdomain.'_store');
        $request->shop->logo = $request->file('path');
        $request->shop->save();
        Cache::forever($subdomain.'_store' , $request->shop );
        if($request->shop->logo)
            return redirect()->back()->with('message',array('type' => 'success' , 'message' => 'El logo de tu tienda a cambiado'));
        else
            return redirect()->back()->with('message',array('type' => 'warning' , 'message' => 'Tu tienda no tiene logo.'));
    }

    public function slider($subdomain , Request $request )
    {
        $store = $request->shop;
        $id = $request->shop->id;

        /** @var  $slider1 */
        $slider1 = $request->file('slider1');
        if(!$slider1 == "") {
            $name1 = $slider1->getClientOriginalName();
            if (!\Storage::disk('sliders')->has( $id . '/' . $name1))
                \Storage::disk('sliders')->put( $id . '/' . $name1, \File::get($slider1));
            $store->slider1 = $name1;
        }else{
            $store->slider1 = '';
        }
        /** @var  $slider2 */
        $slider2 = $request->file('slider2');
        if(!$slider2 == "") {
            $name2 = $slider2->getClientOriginalName();
            if(!\Storage::disk('sliders')->has( $id.'/'.$name2))
                \Storage::disk('sliders')->put( $id.'/'.$name2, \File::get($slider2));
            $store->slider2 = $name2;
        }else{
            $store->slider2 = '';
        }
        /** @var  $slider3 */
        $slider3 = $request->file('slider3');
        if(!$slider3 == "") {
            $name3 = $slider3->getClientOriginalName();
            if (!\Storage::disk('sliders')->has( $id . '/' . $name3))
                \Storage::disk('sliders')->put( $id . '/' . $name3, \File::get($slider3));
            $store->slider3 = $name3;
        }else{
            $store->slider3 = '';
        }
        /** save */
        Cache::forget($subdomain.'_store');
        $store->save();
        Cache::forever($subdomain.'_store' , $request->shop );
        return redirect()->back()->with('message',array('type' => 'success' , 'message' => 'Las imagenes del slider de tu tienda han cambiado'));
    }

    public function build()
    {
        return view('admin.design.build_page');
    }

    public function postBuild(Request $request)
    {
        $request->shop->store->update($request->all());
        $request->shop->store->build = $request->has('build') ? 1 : 0;
        $request->shop->store->save();
        Cookie::queue(Cookie::forget('_store'));
        if($request->has('build')) {
            Cookie::queue('_store' , 1 , 560000);
        }else{
            Cookie::queue('_store' , 0 , 560000);
        }
        ($request->has('build')) ? $message = 'Ahora tu pagina esta en costruccion' : $message = 'Tu pagina ha vuelto a la normalidad';
        return back()->with('message',array('type' => 'warning' , 'message' => $message));
    }
    public function network(Request $request)
    {
        $store = Store::where('shop_id',$request->shop->id)->first();
        return view('admin.design.social_network',compact('store'));
    }

    public function postNetwork(Request $request)
    {
        $social = Store::where('shop_id',$request->shop->id)->first();
        $social->fill($request->all());
        $social->save();
        return redirect()->back()->with('message', array('type' => 'success' , 'message' =>
            'Las redes de tu tienda han sido actualizadas.'));
    }

    public function info(Request $request)
    {
        $store = Store::where('shop_id',$request->shop->id)->first();
        return view('admin.design.info',compact('store'));
    }

    public function postInfo(Request $request)
    {
        $social = Store::where('shop_id',$request->shop->id)->first();
        $social->fill($request->all());
        $social->save();
        return redirect()->back()->with('message', array('type' => 'success' , 'message' =>
            'Los datos de tu tienda han sido actualizados.'));
    }

}

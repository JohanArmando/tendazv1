<?php
namespace Tendaz\Composers;

use Illuminate\Support\Facades\Cache;
use Tendaz\Models\Domain\Domain;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;


class StoreComposer
{
    public function compose(View $view ){
        $shop = Domain::ShopByDomain();
        $view->with('shop',$shop);
    }
}
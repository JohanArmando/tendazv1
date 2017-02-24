<?php

namespace Tendaz\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Tendaz\Models\Products\Product;

class DeleteImagesProductJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $product;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach($this->product->variant()->images as $image){
            if($image->filename > 0) {
                \Storage::disk('products')->delete(auth('admins')->user()->shop->id . '/' . $image->filename);
            }
        }
    }
}

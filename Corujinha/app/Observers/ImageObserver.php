<?php

namespace App\Observers;

use App\Models\Image;

class ImageObserver
{
    /**
     * Handle the Image "creating" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function creating(Image $image)
    {
        $image->created_by = auth()->user()->id;
    }

    /**
     * Handle the Image "updating" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function updating(Image $image)
    {
        //
    }

    /**
     * Handle the Image "deleted" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function deleted(Image $image)
    {
        //
    }

    /**
     * Handle the Image "restored" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function restored(Image $image)
    {
        //
    }

    /**
     * Handle the Image "force deleted" event.
     *
     * @param  \App\Models\Image  $image
     * @return void
     */
    public function forceDeleted(Image $image)
    {
        //
    }
}

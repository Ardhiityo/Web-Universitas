<?php

namespace App\Observers;

use App\Models\AboutMe;
use Illuminate\Support\Facades\Storage;

class AboutMeObserver
{
    /**
     * Handle the AboutMe "created" event.
     */
    public function created(AboutMe $aboutMe): void
    {
        //
    }

    /**
     * Handle the AboutMe "updated" event.
     */
    public function updated(AboutMe $aboutMe): void
    {
        //
    }

    /**
     * Handle the AboutMe "deleted" event.
     */
    public function deleted(AboutMe $aboutMe): void
    {
        foreach ($aboutMe->image as $image) {
            if (Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the AboutMe "restored" event.
     */
    public function restored(AboutMe $aboutMe): void
    {
        //
    }

    /**
     * Handle the AboutMe "force deleted" event.
     */
    public function forceDeleted(AboutMe $aboutMe): void
    {
        //
    }
}

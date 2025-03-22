<?php

namespace App\Observers;

use App\Models\Lecture;
use Illuminate\Support\Facades\Storage;

class LectureObserver
{
    /**
     * Handle the Lecture "created" event.
     */
    public function created(Lecture $lecture): void
    {
        //
    }

    /**
     * Handle the Lecture "updated" event.
     */
    public function updated(Lecture $lecture): void
    {
        //
    }

    /**
     * Handle the Lecture "deleted" event.
     */
    public function deleted(Lecture $lecture): void
    {
        if (Storage::disk('public')->exists($lecture->image)) {
            Storage::disk('public')->delete($lecture->image);
        }
    }

    /**
     * Handle the Lecture "restored" event.
     */
    public function restored(Lecture $lecture): void
    {
        //
    }

    /**
     * Handle the Lecture "force deleted" event.
     */
    public function forceDeleted(Lecture $lecture): void
    {
        //
    }
}

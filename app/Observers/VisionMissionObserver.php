<?php

namespace App\Observers;

use App\Models\VisionMission;
use Illuminate\Support\Facades\Storage;

class VisionMissionObserver
{
    /**
     * Handle the VisionMission "created" event.
     */
    public function created(VisionMission $visionMission): void
    {
        //
    }

    /**
     * Handle the VisionMission "updated" event.
     */
    public function updated(VisionMission $visionMission): void
    {
        //
    }

    /**
     * Handle the VisionMission "deleted" event.
     */
    public function deleted(VisionMission $visionMission): void
    {
        foreach ($visionMission->image as $image) {
            if (Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the VisionMission "restored" event.
     */
    public function restored(VisionMission $visionMission): void
    {
        //
    }

    /**
     * Handle the VisionMission "force deleted" event.
     */
    public function forceDeleted(VisionMission $visionMission): void
    {
        //
    }
}

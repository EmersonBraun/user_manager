<?php

namespace App\Observers;

use App\Models\PhoneType;

class PhoneTypeObserver
{
    /**
     * Handle the PhoneType "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function retrieved(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function creating(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "created" event.
     * after a record has been created
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function created(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function updating(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function updated(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function saving(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function saved(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function deleting(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function deleted(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function restoring(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the PhoneType "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function restored(PhoneType $PhoneType)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\PhoneType  $PhoneType
     * @return void
     */
    public function forceDeleted(PhoneType $PhoneType)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\PhoneType;
use App\Observers\PhoneTypeObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    PhoneType::observe(PhoneTypeObserver::class);

... }


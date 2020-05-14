<?php

namespace App\Observers;

use App\Models\IP;

class IPObserver
{
    /**
     * Handle the IP "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function retrieved(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function creating(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "created" event.
     * after a record has been created
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function created(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function updating(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function updated(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function saving(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function saved(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function deleting(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function deleted(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function restoring(IP $ip)
    {
        //
    }

    /**
     * Handle the IP "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function restored(IP $ip)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\IP  $ip
     * @return void
     */
    public function forceDeleted(IP $ip)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\IP;
use App\Observers\IPObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    IP::observe(IPObserver::class);

... }


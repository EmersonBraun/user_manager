<?php

namespace App\Observers;

use App\Models\Group;

class GroupObserver
{
    /**
     * Handle the Group "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function retrieved(Group $group)
    {
        //
    }

    /**
     * Handle the Group "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function creating(Group $group)
    {
        //
    }

    /**
     * Handle the Group "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function created(Group $group)
    {
        //
    }

    /**
     * Handle the Group "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function updating(Group $group)
    {
        //
    }

    /**
     * Handle the Group "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function updated(Group $group)
    {
        //
    }

    /**
     * Handle the Group "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function saving(Group $group)
    {
        //
    }

    /**
     * Handle the Group "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function saved(Group $group)
    {
        //
    }

    /**
     * Handle the Group "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function deleting(Group $group)
    {
        //
    }

    /**
     * Handle the Group "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function deleted(Group $group)
    {
        //
    }

    /**
     * Handle the Group "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function restoring(Group $group)
    {
        //
    }

    /**
     * Handle the Group "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function restored(Group $group)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function forceDeleted(Group $group)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Group;
use App\Observers\GroupObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Group::observe(GroupObserver::class);

... }


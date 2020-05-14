<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function retrieved(User $user)
    {
        //
    }

    /**
     * Handle the User "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function creating(User $user)
    {
        //
    }

    /**
     * Handle the User "created" event.
     * after a record has been created
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the User "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updating(User $user)
    {
        //
    }

    /**
     * Handle the User "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function saving(User $user)
    {
        //
    }

    /**
     * Handle the User "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function saved(User $user)
    {
        //
    }

    /**
     * Handle the User "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restoring(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\User;
use App\Observers\UserObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    User::observe(UserObserver::class);

... }


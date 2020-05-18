<?php

namespace App\Observers;

use App\Models\Folder;

class FolderObserver
{
    /**
     * Handle the Folder "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function retrieved(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function creating(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function created(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function updating(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function updated(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function saving(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function saved(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function deleting(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function deleted(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function restoring(Folder $folder)
    {
        //
    }

    /**
     * Handle the Folder "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function restored(Folder $folder)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Folder  $folder
     * @return void
     */
    public function forceDeleted(Folder $folder)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Folder;
use App\Observers\FolderObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Folder::observe(FolderObserver::class);

... }


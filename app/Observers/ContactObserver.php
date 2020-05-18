<?php

namespace App\Observers;

use App\Models\Contact;

class ContactObserver
{
    /**
     * Handle the Contact "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function retrieved(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function creating(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function created(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function updating(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function updated(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function saving(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function saved(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function deleting(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function deleted(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function restoring(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function restored(Contact $contact)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function forceDeleted(Contact $contact)
    {
        //
    }
}

/*
Add this lines in App\Providers\AppServiceProvider :
in top:
... namespace App\Providers

use App\Models\Contact;
use App\Observers\ContactObserver;

... class AppServiceProvider ...

in boot function:
... public function boot()

    Contact::observe(ContactObserver::class);

... }


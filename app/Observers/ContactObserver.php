<?php

namespace App\Observers;

use App\Models\Contact;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactObserver
{
    /**
     * Handle the Contact "created" event.
     */
    public function created(Contact $contact): void
    {
        try {
            $adminEmail = "jk_web_dev@outlook.com";
            Mail::to($adminEmail)->queue(new ContactMail($contact));
            Log::info('Mail queued successfully for: ' . $contact->email);
        } catch (\Exception $e) {
            Log::error('Mail queue failed: ' . $e->getMessage());
        }
    }

    /**
     * Handle the Contact "updated" event.
     */
    public function updated(Contact $contact): void
    {
        //
    }

    /**
     * Handle the Contact "deleted" event.
     */
    public function deleted(Contact $contact): void
    {
        //
    }

    /**
     * Handle the Contact "restored" event.
     */
    public function restored(Contact $contact): void
    {
        //
    }

    /**
     * Handle the Contact "force deleted" event.
     */
    public function forceDeleted(Contact $contact): void
    {
        //
    }
}

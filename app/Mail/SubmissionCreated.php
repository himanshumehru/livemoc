<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubmissionCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;
    public $formname;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($submission, $formname)
    {
        $this->submission = $submission;
        $this->formname = $formname;
        $this->user = auth()->user();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.submission-created');
    }
}

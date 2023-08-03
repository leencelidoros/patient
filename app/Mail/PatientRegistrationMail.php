<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PatientRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $patientId;

    /**
     * Create a new message instance.
     *
     * @param int $patientId
     * @return void
     */
    public function __construct(int $patientId)
    {
        $this->patientId = $patientId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.patient_registration')
                    ->with([
                        'patientId' => $this->patientId,
                    ]);
    }
}

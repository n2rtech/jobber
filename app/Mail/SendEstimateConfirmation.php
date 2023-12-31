<?php

namespace App\Mail;

use App\Models\Estimate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEstimateConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $estimate;

    public $email_message;

    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Estimate $estimate, $email_message, $subject)
    {
        $this->estimate     = $estimate;
        $this->email_message = $email_message;
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.booking-confirmation',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return \Illuminate\Mail\Mailables\Attachment[]
     */
        public function attachments()
        {
            return [
                Attachment::fromPath(public_path().'/storage/uploads/estimates/'.$this->estimate->id.'/estimate.pdf')
                        ->as('Estimate.pdf')
                        ->withMime('application/pdf'),
            ];
        }


}

<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $entity;  // Student data to pass to the email view

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function __construct($entity)
    {
        $this->entity = $entity;  // Store student data
        
    }

    /**
     * Build the message.
     *
     * @return \Illuminate\Mail\Mailable
     */
    public function build()
    {
        //dd($this->entity);
        //dd($this->entity->student_name);
        return $this->view('emails.student_registration')  // Define the email view
                    ->subject('Welcome to Aaklan')
                    ->with([
                        'Name' => $this->entity->student_name,
                        'Email' => $this->entity->student_email,
                    ]);
    }
}

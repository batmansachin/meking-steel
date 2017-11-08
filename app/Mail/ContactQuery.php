<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactQuery extends Mailable
{
    use Queueable, SerializesModels;
    protected $email, $name, $message, $company; 
    

    /**
     * Create a new message instance.
     * @param array
     * @return void
     */

    public function __construct(User $data) 
    {
        //
        $this->email = $data['email'] ; 
        $this->name = $data['name'] ; 
        $this->message = $data['message'] ; 
        $this->company = $data['company'] ;    
          

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->markdown('mails.query', ['email'=>$this->email, 'name'=>$this->name , 'message'=>$this->message, 'company'=>$this->company]);
        return $this->view('mails.query');
    }
}

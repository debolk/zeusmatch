<?php

class ContactController extends OptionsController
{
    /**
     * Shows the contact page
     */
    public function index()
    {   
        $this->layout->content = View::make('contact/index');
    }

    /**
     * Sends the contact form on the contact page
     */
    public function send_contactform()
    {
        // Send data off as e-mail
        MailerContactForm::send(
            e(Input::get('name')), 
            e(Input::get('contact_method')),
            e(Input::get('message_type')),
            e(Input::get('message'))
        );
        
        // Return a popup that says "thnx, message sent"
        return View::make('contact/_thanks');
    }
}

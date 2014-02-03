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
        //FIXME Implement method

        // Gather post-data
        // Scrub data
        // Compose email (use a mailer class!)
        // Return a popup that says "thnx, message sent"
    }
}

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
}

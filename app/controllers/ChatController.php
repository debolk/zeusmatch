<?php

class ChatController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->layout = View::make('layouts/chat');
    }

    /**
     * Shows the list of persons one can chat with
     */
    public function index()
    {
        $this->layout->with('page_id', 'chat');
        $this->layout->content = View::make('chat/index');
    }
}

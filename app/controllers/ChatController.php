<?php

class ChatController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        View::share('page_id', 'chat');
        View::share('page_title', 'Chat');

        $this->layout = View::make('layouts/chat');
        $this->layout->nest('header', 'layouts/_header');
        $this->layout->nest('footer', 'layouts/_footer');
    }

    /**
     * Shows the list of persons one can chat with
     */
    public function index()
    {
        $this->layout->content = View::make('chat/index');
    }
}

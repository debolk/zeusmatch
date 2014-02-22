<?php

class BaseController extends Controller
{
    public function __construct()
    {
        // Set the default layout
        $this->layout = View::make('layouts/application');

        // Set a default page id, individual functions should override this
        $this->layout->with('page_id', 'zeusmatch');
    }
}

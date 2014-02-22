<?php

class BaseController extends Controller
{
    public function __construct()
    {
        // Set fallback page ID, pages SHOULD override this
        View::share('page_id', 'zeusmatch');

        // Set default page header; pages MAY override this
        View::share('page_title', 'ZeusMatch');

        // Create default layout
        $this->layout = View::make('layouts/application');
        $this->layout->nest('header', 'layouts/_header');
        $this->layout->nest('footer', 'layouts/_footer');
    }
}

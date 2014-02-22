<?php

class OptionsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->layout = View::make('layouts/options');
        $this->layout->nest('header', 'layouts/_header');
        $this->layout->nest('footer', 'layouts/_footer');
    }
}

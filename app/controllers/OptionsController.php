<?php

class OptionsController extends BaseController
{
    public function __construct()
    {
        $this->layout = View::make('layouts/options');
    }
}

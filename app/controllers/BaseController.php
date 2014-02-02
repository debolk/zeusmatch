<?php

class BaseController extends Controller
{
    public function __construct()
    {
        $this->layout = View::make('layouts/application');
    }
}

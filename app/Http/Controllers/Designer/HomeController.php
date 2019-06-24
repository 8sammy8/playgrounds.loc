<?php

namespace App\Http\Controllers\Designer;


class HomeController extends DesignerController
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setView();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view($this->view)
            ->with('pageHeader', 'Welcome! '. \Auth::user()->name);
    }

}

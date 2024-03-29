<?php

namespace App\Http\Controllers\Partner;


class HomeController extends PartnerController
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

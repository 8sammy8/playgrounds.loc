<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class DesignerController extends Controller
{
    /**
     * @var \Illuminate\Config\Repository|mixed
     */
    protected $domain;
    /**
     * View path
     * @var
     */
    protected $view;

    /**
     * PartnerController constructor.
     */
    public function __construct()
    {
        $this->domain = config('settings.folder_designer');
    }

    /**
     * Set view path
     */
    protected function setView()
    {
        $controllerAction = substr(strrchr(Route::currentRouteAction(), "\\"), 1);

        $search = ['Controller', '@'];
        $replace = ['', '.'];
        $this->view = $this->domain . '.' .str_replace($search, $replace, $controllerAction);
    }
}

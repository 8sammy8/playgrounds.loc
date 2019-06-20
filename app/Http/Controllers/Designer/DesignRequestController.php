<?php

namespace App\Http\Controllers\Designer;

use App\User;
use Carbon\Carbon;
use App\Models\Color;
use App\Models\ColorScheme;
use App\Models\DesignRequest;
use App\Http\Requests\Partner\DesignRequest as ModelRequest;

class DesignRequestController extends DesignerController
{
    /**
     * @var DesignRequest
     */
    protected $design_request;
    /**
     * @var ColorScheme
     */
    protected $color_scheme;
    /**
     * @var Color
     */
    protected $color;

    /**
     * DesignRequestController constructor.
     * @param DesignRequest $designRequest
     * @param ColorScheme $colorScheme
     * @param Color $color
     */
    public function __construct(
        DesignRequest $designRequest,
        ColorScheme $colorScheme,
        Color $color
    )
    {
        $this->design_request = $designRequest;
        $this->color_scheme = $colorScheme;
        $this->color = $color;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view(config('settings.folder_partner').'.designRequest.index')
            ->with('colorSchemes', $this->color_scheme::whereDefault(true)->get())
            ->with('colors', $this->color::all());
    }

}

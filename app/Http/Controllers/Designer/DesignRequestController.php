<?php

namespace App\Http\Controllers\Designer;

use App\Models\Color;
use App\Models\ColorScheme;
use App\Models\DesignRequest;

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
     * DesignRequestController constructor.
     * @param DesignRequest $designRequest
     * @param ColorScheme $colorScheme
     */
    public function __construct(
        DesignRequest $designRequest,
        ColorScheme $colorScheme
    )
    {
        $this->design_request = $designRequest;
        $this->color_scheme = $colorScheme;

        parent::__construct();
        $this->setView();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $designerRequests = $this->design_request::getRequestsByDesigner()
            ->paginate(config('settings.paginate.designer_request_all'));

        return view(config('settings.folder_designer').'.designRequest.index')
            ->with(compact('designerRequests'))
            ->with('pageHeader', 'All design requests');
    }

}

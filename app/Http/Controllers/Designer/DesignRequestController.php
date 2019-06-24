<?php

namespace App\Http\Controllers\Designer;

use App\Models\Color;
use App\Models\ColorScheme;
use Illuminate\Http\Request;
use App\Models\DesignRequest;

class DesignRequestController extends DesignerController
{
    const STATUS_NOT_STARTED = 1;
    const STATUS_WORKING_ON = 2;
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
        $designerRequests = $this->design_request::sortable()->getRequestsByDesigner()
            ->paginate(config('settings.paginate.designer_request_all'));

        return view($this->view)
            ->with(compact('designerRequests'))
            ->with('pageHeader', 'All design requests');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        if($this->design_request::updateStatus($id, self::STATUS_WORKING_ON)) {

            $designRequest = $this->design_request::whereId($id)->first();

            return view($this->view)
                ->with(compact('designRequest'))
                ->with('colorScheme', $this->color_scheme::whereId($designRequest->color_scheme_id)->first())
                ->with('pageHeader', 'Design requests #' . $id);
        }
        $result = ['error' => 'Non existing request'];
        return back()->with($result);
    }

    public function update(Request $request)
    {
//        $this->validate()
    }

}

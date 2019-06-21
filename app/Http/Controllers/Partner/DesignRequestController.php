<?php

namespace App\Http\Controllers\Partner;

use App\User;
use Carbon\Carbon;
use App\Models\ColorScheme;
use App\Models\DesignRequest;
use App\Http\Requests\Partner\DesignRequest as ModelRequest;

class DesignRequestController extends PartnerController
{
    const STATUS_NOT_STARTED = 1;
    const PRIORITY_NORMAL = 1;
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
        $colorSchemes = $this->color_scheme::whereDefault(null)
            ->orWhere('default', $this->getUser())
            ->get();

        return view($this->view)
            ->with(compact('colorSchemes'))
            ->with('pageHeader', 'Create design request');
    }

    /**
     * @param ModelRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ModelRequest $request)
    {
        $this->design_request->fill($request->except(
            '_token',
            'color_scheme',
            'custom_color',
            'posts_clamps',
            'metal_rails',
            'roofs',
            'slides',
            'plastic_climbers',
            'panels',
            'panel_accents',
            'accessories',
            'bridges'
        ));

        $colorScheme = $this->getColorScheme($request);

        $this->design_request->user_id = $this->getUser();
        $this->design_request->color_scheme_id = $colorScheme;
        $this->design_request->priority = self::PRIORITY_NORMAL;
        $this->design_request->status = self::STATUS_NOT_STARTED;

        if($colorScheme && $this->design_request->save()){
            $result = ['status' => 'Request added'];
            return redirect()->route('partner.design.request')->with($result);
        }
        else{
            $result = ['error' => 'Request not added'];
            return back()->with($result);
        }
    }

    /**
     * @param ModelRequest $request
     * @return int|bool
     */
    protected function getColorScheme($request)
    {
        if(!$request->input('color_scheme')){
            return $this->colorSchemeStore($request);
        }
        else{
            return $request->input('color_scheme');
        }
    }

    /**
     * @param ModelRequest $request
     * @return bool
     */
    protected function colorSchemeStore($request)
    {
//        $user = \Auth::user()->name;
//        $name = $user->name;
//        $default = $user->id;
        $name = 'partner3';
        $default = 3;

        $this->color_scheme->name = $name . ' '. Carbon::now();
        $this->color_scheme->default = $default;

        $this->color_scheme->roofs = $request->input('roofs');
        $this->color_scheme->slides = $request->input('slides');
        $this->color_scheme->panels = $request->input('panels');
        $this->color_scheme->bridges = $request->input('bridges');
        $this->color_scheme->metal_rails = $request->input('metal_rails');
        $this->color_scheme->accessories = $request->input('accessories');
        $this->color_scheme->posts_clamps = $request->input('posts_clamps');
        $this->color_scheme->panel_accents = $request->input('panel_accents');
        $this->color_scheme->plastic_climbers = $request->input('plastic_climbers');

        return $this->color_scheme->save() ? $this->color_scheme->id : false;
    }

    protected function getUser()
    {
//        return \Auth::id();
        return 3;
    }
}

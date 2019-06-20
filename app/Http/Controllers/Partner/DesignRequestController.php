<?php

namespace App\Http\Controllers\Partner;

use App\User;
use Carbon\Carbon;
use App\Models\Color;
use App\Models\ColorScheme;
use App\Models\DesignRequest;
use App\Http\Requests\Partner\DesignRequest as ModelRequest;

class DesignRequestController extends DesignerController
{
    const STATUS_NOT_STARTED = 1;
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
            'first_top_color',
            'second_top_color',
            'third_top_color'
        ));

        $this->design_request->color_scheme_id = $this->getColorScheme($request);
        $this->design_request->user_id = $this->getUser();
        $this->design_request->priority = config('settings.priority.normal');
        $this->design_request->responsible_id = $this->getResponsible();
        $this->design_request->status = self::STATUS_NOT_STARTED;
        $this->design_request->complete_at = Carbon::tomorrow();

        if($this->design_request->save()){
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
     * @return int
     */
    protected function getColorScheme($request)
    {
        if(!$request->input('color_scheme')){
            $colorScheme = new ColorScheme();
            $colorScheme->save();
            return $colorScheme->id;
        }
        else{
            return $request->input('color_scheme');
        }
    }

    protected function getResponsible()
    {
//        $user = User::with('roles');
//        $user->whereHas('roles', function($query){
//            $query->where("role_id", 3);
//        });

//        $user = User::designers();

        return 5;
    }
    protected function getUser()
    {
//        return \Auth::id();
        return 3;
    }
}

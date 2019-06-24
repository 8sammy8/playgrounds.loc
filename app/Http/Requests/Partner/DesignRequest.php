<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class DesignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();

        $validator->sometimes('color_scheme', 'required|integer', function ($input) {
            return !empty($input->color_scheme) ?? $input->color_scheme;
        });
        $validator->sometimes('posts_clamps', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->posts_clamps : true;
        });
        $validator->sometimes('metal_rails', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->metal_rails : true;
        });
        $validator->sometimes('roofs', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->roofs : true;
        });
        $validator->sometimes('slides', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->slides : true;
        });
        $validator->sometimes('plastic_climbers', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->plastic_climbers : true;
        });
        $validator->sometimes('panels', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->panels : true;
        });
        $validator->sometimes('panel_accents', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->panel_accents : true;
        });
        $validator->sometimes('accessories', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->accessories : true;
        });
        $validator->sometimes('bridges', 'required|string|max:255', function ($input) {
            return $input->color_scheme ? $input->bridges : true;
        });

        $validator->sometimes('notes', 'required|string', function($input){
            return !empty($input->notes) ?? $input->notes;
        });

        return $validator;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'quote'             => 'required|string',
        'request_type'      => 'required|integer',
        'structure_name'    => 'required|string',
        'sku'               => 'required|string',
        'model'             => 'required|string',
        'job_name'          => 'required|string',
        'job_location'      => 'required|string',
        ];
    }
}

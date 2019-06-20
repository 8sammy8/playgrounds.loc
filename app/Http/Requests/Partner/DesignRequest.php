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
        $validator->sometimes('custom_color', 'required|integer', function ($input) {
            return $input->color_scheme ? $input->custom_color : true;
        });
        $validator->sometimes('first_top_color', 'required|integer', function ($input) {
            return $input->color_scheme ? $input->first_top_color : true;
        });
        $validator->sometimes('second_top_color', 'required|integer', function ($input) {
            return $input->color_scheme ? $input->second_top_color : true;
        });

        $validator->sometimes('notes', 'required|string', function($input){
            return !empty($input->notes) ?? $input->notes;
        });

//        $validator->sometimes('third_top_color', 'required|integer', function ($input) {
//            return !empty($input->custom_color) ?? $input->third_top_color;
//        });
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
        'user_id'                    => 'required|integer',
            'input_quote'            => 'required|string',
            'request_type'           => 'required|integer',
            'structure_name'         => 'required|string',
            'sku'                    => 'required|string',
            'model'                  => 'required|string',
            'posts_clamps'           => 'required|string',
            'metal_rails'            => 'required|string',
            'roofs'                  => 'required|string',
            'slides'                 => 'required|string',
            'plastic_climbers'       => 'required|string',
            'panels'                 => 'required|string',
            'panel_accents'          => 'required|string',
            'accessories'            => 'required|string',
            'bridges'                => 'required|string',
        ];
    }
}

<?php

namespace Modules\Services\Http\Requests\Services;

use App\Http\Requests\FormRequest;

class Delete1ServiceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'unit_name' => 'required',
            'attachments' => 'required|array|min:1', // Adjust as needed
            'i_purpose_id' => 'required',
            'i_purpose_type_id' => 'required',
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
            'comments' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}

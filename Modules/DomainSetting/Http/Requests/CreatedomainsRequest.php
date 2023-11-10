<?php

namespace Modules\DomainSetting\Http\Requests;

use App\Http\Requests\FormRequest;use Illuminate\Http\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;
use Exception;
use Illuminate\Validation\Rule;

class CreatedomainsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      
        $array['id'] = "required|exists:domains,id,deleted_at,NULL";
        $array['is_active'] = ['nullable', Rule::in(['on', 'off'])];
        $array['domain'] = ['required','string'];
        $array['tour_code'] = ['required','string'];
                $array['folder_name'] = ['nullable','string'];

        return $array;
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

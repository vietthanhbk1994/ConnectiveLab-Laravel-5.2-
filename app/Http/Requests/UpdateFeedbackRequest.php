<?php
/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 03/08/2016
    * CONTENT: Check Update feedback
    *----------------------------
    */
namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Feedback;

class UpdateFeedbackRequest extends Request
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Feedback::$rulesUpdate;
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatetechnologyRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $id = $this->segment(3);
        return [
            'name' => 'required|max:100|unique:technologies,name,' . $id,
            'image' => 'max:1000|image',
            'link' => 'required|url|unique:technologies,link,' .$id
        ];
    }

}

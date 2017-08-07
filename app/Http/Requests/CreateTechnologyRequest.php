<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\Http\Requests\Request;
use App\Models\Technology;

namespace App\Http\Requests;

/**
 * Description of CreateTechnologyRequest
 *
 * @author Pham Duyen
 */
class CreateTechnologyRequest extends Request{
    //put your code here
    public function authorize()
    {
        return true;
    }
    
      public function rules()
    {
        return \App\Models\Technology::$rules;
    }
}

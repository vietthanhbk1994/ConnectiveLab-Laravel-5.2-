<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
    *----------------------------
    * CREATE: Hoàng Tuấn Nhân
    * DATE: 2016/08/03
    * CONTENT:Validation for Service
    *----------------------------
    * MODIFY:
    * DATE:
    * CONTENT
    *----------------------------
    * @param request
    * @return view get company
    *----------------------------
    */
/**
 * @SWG\Definition(
 *      definition="Service",
 *      required={"name", "content", "image"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="content",
 *          description="content",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="image",
 *          description="image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Service extends Model
{
    use SoftDeletes;

    public $table = 'services';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'content',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'content' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
//    public static $rules = [
//        'name' => 'required|max:100|unique:services',
//        'content' => 'required',
//        'image' => 'max:1000|image|required',
//    ];
public static function rules(){
    switch (\Request::method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'name' => 'required|max:100|unique:services',
                        'content' => 'required|max:100',
                        'image' => 'max:1000|image|required',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'name' => 'required|max:100',
                        'content' => 'required|max:100',
                        'image' => 'max:1000|image',
                    ];
                }
            default:break;
        }
}
            
}

<?php
/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 03/08/2016
    * CONTENT:Model feedback
    *----------------------------
    */
namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Feedback",
 *      required={"content", "image", "name_client", "company"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
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
 *          property="name_client",
 *          description="name_client",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="company",
 *          description="company",
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
class Feedback extends Model {

    use SoftDeletes;

    public $table = 'feedbacks';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'content',
        'image',
        'name_client',
        'company'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'content' => 'string',
        'image' => 'string',
        'name_client' => 'string',
        'company' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'required|max:255',
        'image' => 'required|image|max:1000',
        'name_client' => 'required|max:100',
        'company' => 'required|max:100'
    ];
    public static $rulesUpdate = [
        'content' => 'required|max:255',
        'image' => 'image|max:1000',
        'name_client' => 'required|max:100',
        'company' => 'required|max:100'
    ];

}

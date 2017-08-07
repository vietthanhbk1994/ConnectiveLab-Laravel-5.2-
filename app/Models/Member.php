<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Member",
 *      required={name, image, position, team_id},
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
 *          property="image",
 *          description="image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="position",
 *          description="position",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="team_id",
 *          description="team_id",
 *          type="integer",
 *          format="int32"
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
class Member extends Model
{

    public $table = 'members';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'image',
        'position',
        'team_id',
        'skills'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'image' => 'string',
        'position' => 'string',
        'team_id' => 'integer',
        'skills'=>'text'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:100',
        'image' => 'required|max:2000|image',
        'position' => 'required',
        'team_id' => 'required|exists:teams,id',
        'skills'=>'required|max:255'
    ];
    public static $rules_update = [
        'name' => 'required|max:100',
        'image' => 'max:2000|image',
        'position' => 'required',
        'team_id' => 'required|exists:teams,id',
        'skills'=>'required|max:255'
        
    ];
    public function team() {
        return $this->belongsTo('App\Models\Team', 'team_id','id');
    }
}

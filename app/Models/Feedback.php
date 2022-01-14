<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Feedback
 * @package App\Models
 * @version January 14, 2022, 5:26 pm UTC
 *
 * @property varchar255 $title
 * @property string $content
 * @property int10 $created_by
 * @property int10 $is_replied
 */
class Feedback extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'feedbacks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'content',
        'created_by',
        'is_replied',
        'action_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    
}

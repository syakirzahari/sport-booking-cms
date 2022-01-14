<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\Xref\ArticleType;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Article
 * @package App\Models
 * @version January 2, 2022, 2:14 pm UTC
 *
 * @property string $title
 * @property string $content
 * @property integer $article_type_id
 */
class Article extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'articles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'content',
        'article_type_id',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'article_type_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function articleType()
    {
        return $this->belongsTo(ArticleType::class, 'article_type_id');
    }
    
}

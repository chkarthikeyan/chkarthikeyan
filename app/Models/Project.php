// app/Models/Project.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 
        'description', 
        'image', 
        'category', 
        'github_link', 
        'demo_link', 
        'technologies',
        'featured'
    ];
    
    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean',
    ];
}
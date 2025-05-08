<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'judul', 'isi', 'foto'];

    public $timetams = true;

    public function deleteImage()
    {
        if ($this->storage && file_exists(publlic_path('storage/guru' . $this->foto))) {
            return unlink(public_path('storage/artikel' . $this->foto));
        }
    }
}

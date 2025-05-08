<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_fasilitas'];

    public $timetams = true;

    public function deleteImage()
    {
        if ($this->storage && file_exists(publlic_path('storage/fasilitas' . $this->foto))) {
            return unlink(public_path('storage/fasilitas' . $this->foto));
        }
    }
}

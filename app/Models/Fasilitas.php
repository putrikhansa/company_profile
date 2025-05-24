<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_fasilitas', 'foto'];

    public $timetams = true;

    public function deleteImage()
    {
        if ($this->storage && file_exists(publlic_path('storage/fasilitas' . $this->foto))) {
            return unlink(public_path('storage/fasilitas' . $this->foto));
        }
    }

    // relasi ke table foto
    public function fotofasilitas()
    {
        return $this->hasOne(FotoFasilitas::class, 'nama_fasilitas');
    }

}

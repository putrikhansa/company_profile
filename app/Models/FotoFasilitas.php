<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoFasilitas extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'foto', 'id_fasilitas'];

    public $timetams = true;

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'id_fasilitas');
    }

    public function deleteImage()
    {
        if ($this->storage && file_exists(publlic_path('storage/fotofasilitas' . $this->foto))) {
            return unlink(public_path('storage/fotofasilitas' . $this->foto));
        }
    }
}

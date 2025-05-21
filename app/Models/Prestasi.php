<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_prestasi', 'deskripsi', 'jenis', 'foto'];

    public $timetams = true;

    public function deleteImage()
    {
        if ($this->storage && file_exists(publlic_path('storage/prestasi' . $this->foto))) {
            return unlink(public_path('storage/prestasi' . $this->foto));
        }
    }
}

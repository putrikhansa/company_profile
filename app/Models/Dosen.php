<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_dosen', 'telepon', 'email', 'email', 'jabatan', 'status', 'foto'];

    public $timetams = true;

    public function deleteImage()
    {
        if ($this->storage && file_exists(publlic_path('storage/dosen' . $this->foto))) {
            return unlink(public_path('storage/dosen' . $this->foto));
        }
    }
}

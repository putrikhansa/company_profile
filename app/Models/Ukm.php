<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_ukm', 'deskripsi', 'foto'];

    public $timetams = true;

    public function deleteImage()
    {
        if ($this->storage && file_exists(publlic_path('storage/ukm' . $this->foto))) {
            return unlink(public_path('storage/ukm' . $this->foto));
        }
    }
}

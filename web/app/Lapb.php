<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapb extends Model
{
    protected $table = "tbllapb";

    protected $fillable = ['tanggal','delapan','sembilan','sepuluh','sebelas','duabelas','tigabelas','empatbelas','limabelas','enambelas','tujuhbelas','delapanbelas','sembilanbelas','duapuluh','duapuluhsatu','duapuluhdua'];

    
    public function buktia()
    {
        return $this->hasMany('App\Buktib');
    }
}

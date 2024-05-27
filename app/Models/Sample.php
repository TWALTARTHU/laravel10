<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sample extends Model
{
    use HasFactory;
    use SoftDeletes; // 論理削除の場合

    // モデル名をテーブル名の単数形とした場合は省略可↓
    protected $table = 'samples';  // テーブル名

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class articles extends Model
{
    use HasFactory;
    use softDeletes;// 論理削除の場合

     // モデル名をテーブル名の単数形とした場合は省略可↓
    protected $table = 'articles';  // テーブル名
}

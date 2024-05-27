<?php

namespace Database\Seeders;
use App\Models\Sample;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::transaction(function () {
            // Sample::insert([
            //     [
            //         'title' => 'Global Education Awards',
            //         'body'  => '本文１'
            //     ],
            //     [
            //         'title' => '地球祭が今年も開催！！',
            //         'body'  => '本文２'
            //     ],
            //     [
            //         'title' => ' 「ハロウィンDay」でした。',
            //         'body'  => '本文３'
            //     ],
            // ]);
            // モデルファクトリーを利用したテストデータの挿入（100件分）
        Sample::factory()->count(100)->create();

        });

    }
}

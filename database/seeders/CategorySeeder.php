<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'ベイプ',
                'sort_order' => 1,
            ],
            [
                'name' => 'リキッド',
                'sort_order' => 2,
            ],
            [
                'name' => 'バーム',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'アイソレート',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ブロードスペクトラム',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'THC',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'アロマ配合',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'やすらぎ',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'すいみん',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
        ]);
    }
}

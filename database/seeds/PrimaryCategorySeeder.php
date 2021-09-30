<?php

use Illuminate\Database\Seeder;
use App\Models\PrimaryCategory;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimaryCategory::class)->create([
            'id'      => 1,
            'name'    => '駅前',
            'sort_no' => 1,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 2,
            'name'    => '道路',
            'sort_no' => 2,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 3,
            'name'    => '飲食店',
            'sort_no' => 3,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 4,
            'name'    => '公共施設',
            'sort_no' => 4,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 5,
            'name'    => '人物・自動車',
            'sort_no' => 5,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 6,
            'name'    => 'その他',
            'sort_no' => 6,
        ]);
    }
}

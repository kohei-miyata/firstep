<?php

use Illuminate\Database\Seeder;
use App\Models\ItemCondition;


class ItemConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ItemCondition::class)->create([
            'id'      => 1,
            'name'    => '1ヶ月〜',
            'sort_no' => 1,
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 2,
            'name'    => '3ヶ月〜',
            'sort_no' => 2,
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 3,
            'name'    => '6ヶ月〜',
            'sort_no' => 3,
        ]);
        factory(ItemCondition::class)->create([
            'id'      => 4,
            'name'    => 'その他',
            'sort_no' => 4,
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee1 = factory(App\Employee::class)->create([
            'position' => 'CEO',
            'boss_id' => NULL
        ]);
        $lev2Count = rand(3,5);
        $lev3Count = rand(6,10);
        $lev4Count = rand(11,16);
        $lev5Count = rand(17,23);

        for($i2=1;$i2<=$lev2Count;$i2++) {
            $employee2 = factory(App\Employee::class)->create([
                'position' => "Affiliate's director",
                'boss_id' => $employee1->id
            ]);

            for($i3=1;$i3<=$lev3Count;$i3++) {
                $employee3 = factory(App\Employee::class)->create([
                    'position' => 'Director of department',
                    'boss_id' => $employee2->id
                ]);

                for($i4=1;$i4<=$lev4Count;$i4++) {
                    $employee4 = factory(App\Employee::class)->create([
                        'position' => 'Team lead',
                        'boss_id' => $employee3->id
                    ]);

                    for($i5=1;$i5<=$lev5Count;$i5++) {
                        $employee5 = factory(App\Employee::class)->create([
                            'position' => 'Worker',
                            'boss_id' => $employee4->id
                        ]);
                    }
                }
            }
        }
    }

}

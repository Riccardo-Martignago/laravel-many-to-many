<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = Type::all()->pluck('id');
        for ($i = 0; $i < 20; $i++){
            $projects = new Project();
            $projects->type_id = $faker->randomElement($types);
            $projects->name = $faker->word();
            $projects->description = $faker->paragraph(4);
            $projects->save();
        }
    }
}

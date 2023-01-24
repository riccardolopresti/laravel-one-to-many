<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 200; $i++) {
            $project = Project::inRandomOrder()->first();
            $tag_id = Tag::inRandomOrder()->first()->id;

            //attach inserisce relazione in tabella ponte
            //ad attach posso passare un singolo elemento o un array
            $project->tags()->attach($tag_id);
        }
    }
}

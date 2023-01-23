<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =['Front-end','Back-end','Full-stack'];

        foreach ($data as $item) {
            $new_type = new Type();
            $new_type->name = $item;
            $new_type->slug= Str::slug($item);
            $new_type->save();
            //dump($new_type->id);
        }
    }
}

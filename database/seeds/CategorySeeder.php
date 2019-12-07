<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("categories")->insert(
        [
          "name"=>"Mesas",
        ]);

      DB::table("categories")->insert(
          [
            "name"=>"Cuadros",
          ]);

      DB::table("categories")->insert(
            [
              "name"=>"Almohadones",
            ]);

      DB::table("categories")->insert(
              [
                "name"=>"Deco",
              ]);

        DB::table("categories")->insert(
                [
                  "name"=>"Lamparas",
                ]);

      DB::table("categories")->insert(
                  [
                    "name"=>"Canastosº",
                  ]);
    }

}

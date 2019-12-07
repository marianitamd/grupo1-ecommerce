<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("products")->insert(
        [
          "category_id"=>6,
          "name"=>"Cuadro Home",
          "description"=>"Conjunto de 9 cuadros de diferentes tamaños",
          "price"=>5699.00,
          "img"=>"cuadros1.jpg",
        ]);

      DB::table("products")->insert(
          [
            "category_id"=>6,
            "name"=>"Cuadro Quinto Elemento",
            "description"=>"Conjunto de 5 cuadros de con diferentes tipos de plantas",
            "price"=>4990.00,
            "img"=>"cuadros2.jpg",
          ]);

          DB::table("products")->insert(
              [
                "category_id"=>6,
                "name"=>"Cuadro Meditación",
                "description"=>"Conjunto de 5 cuadros que busca llevarle paz a tus lugares",
                "price"=>4299.00,
                "img"=>"cuadros3.jpg",
              ]);

        DB::table("products")->insert(
            [
              "category_id"=>6,
              "name"=>"Cuadro Colibrí",
              "description"=>"1 Cuadro de 0,80x0,40",
              "price"=>1875.00,
              "img"=>"cuadros4.jpg",
            ]);

              DB::table("products")->insert(
                [
                  "category_id"=>6,
                  "name"=>"Cuadro Verde",
                  "description"=>"Conjunto de 3 cuadros con plantas",
                  "price"=>2799.00,
                  "img"=>"cuadros5.jpg",
                  ]);

                  DB::table("products")->insert(
                      [
                        "category_id"=>6,
                        "name"=>"Cuadro sobre Cuadros",
                        "description"=>"2 Cuadro de 1x0,40 color blanco, naranja y gris",
                        "price"=>2450.00,
                        "img"=>"cuadros6.jpg",
                      ]);

            DB::table("products")->insert(
                [
                  "category_id"=>6,
                  "name"=>"Cuadro París",
                  "description"=>"Cuadro de 0,60x1,5",
                  "price"=>2990.00,
                  "img"=>"cuadros7.jpg",
                ]);

                DB::table("products")->insert(
                    [
                      "category_id"=>6,
                      "name"=>"Cuadro Boys Rule",
                      "description"=>"Cuadro de 0,60x0,40",
                      "price"=>1199.00,
                      "img"=>"cuadros8.jpg",
                    ]);

          DB::table("products")->insert(
              [
                "category_id"=>6,
                "name"=>"Cuadro Peces",
                "description"=>"Conjunto de 3 cuadros de peces ",
                "price"=>2999.00,
                "img"=>"cuadros9.jpg",
              ]);

              DB::table("products")->insert(
                  [
                    "category_id"=>8,
                    "name"=>"Deco Ramo Rosa",
                    "description"=>"Ramo de flores Rosas con Florero",
                    "price"=>799.00,
                    "img"=>"deco1.jpg",
                  ]);

          DB::table("products")->insert(
              [
                "category_id"=>8,
                "name"=>"Deco Estantes",
                "description"=>"Conjunto de 3 estantes  de 30 Cm",
                "price"=>1199.00,
                "img"=>"deco2.jpg",
              ]);

              DB::table("products")->insert(
                  [
                    "category_id"=>8,
                    "name"=>"Deco Bronce",
                    "description"=>"2 piezas de Bronce para plantas",
                    "price"=>3299.00,
                    "img"=>"deco3.jpg",
                  ]);


        DB::table("products")->insert(
          [
            "category_id"=>8,
            "name"=>"Deco Estrella",
            "description"=>"Porta Vela de acero dorado",
            "price"=>899.00,
            "img"=>"deco4.jpg",
            ]);

            DB::table("products")->insert(
                [
                  "category_id"=>8,
                  "name"=>"Deco Duo Deco",
                  "description"=>"2 porta macetas",
                  "price"=>550.00,
                  "img"=>"deco5.jpg",
                ]);

          DB::table("products")->insert(
              [
                "category_id"=>8,
                "name"=>"Deco Bicicleta",
                "description"=>"Portallaves de Acedo con forma de Bicicleta",
                "price"=>875.00,
                "img"=>"deco6.jpg",
              ]);

        DB::table("products")->insert(
            [
              "category_id"=>5,
              "name"=>"Mesa Escandinava",
              "description"=>"Mesa de Vidrio con madera 1,20x0,70",
              "price"=>2500.00,
              "img"=>"mesa1.jpg",
            ]);

    DB::table("products")->insert(
        [
          "category_id"=>5,
          "name"=>"Mesa Ratonas",
          "description"=>"Juego de mesas ratonas de 0,80x0,60 y 0,60x0,40",
          "price"=>3699.00,
          "img"=>"mesa2.jpg",
        ]);

        DB::table("products")->insert(
            [
              "category_id"=>5,
              "name"=>"Mesa White",
              "description"=>"Mesa de Pino laqueada Blanca 1,20x0,70",
              "price"=>3700.00,
              "img"=>"mesa3.jpg",
            ]);

    DB::table("products")->insert(
        [
          "category_id"=>5,
          "name"=>"Mesa Dúo",
          "description"=>"Juego de mesas ratonas de 0,80x0,60 y 0,60x0,40 con base blanca",
          "price"=>2550.00,
          "img"=>"mesa4.jpg",
        ]);

        DB::table("products")->insert(
            [
              "category_id"=>5,
              "name"=>"Mesa Metal",
              "description"=>"Mesa de Madera con base de metal 0,40x0,75x0,50",
              "price"=>1700.00,
              "img"=>"mesa5.jpg",
            ]);

        DB::table("products")->insert(
            [
              "category_id"=>5,
              "name"=>"Mesa Exterior Madera",
              "description"=>"Mesa de exterior de madera 2,00x1,00",
              "price"=>4999.00,
              "img"=>"mesa6.jpg",
            ]);

        DB::table("products")->insert(
            [
              "category_id"=>9,
              "name"=>"Lámparas Lab",
              "description"=>"12 Lámparas colgantes mas Aplique simil tronco sostenedor",
              "price"=>7800.00,
              "img"=>"lampa1.jpg",
            ]);

          DB::table("products")->insert(
              [
                "category_id"=>9,
                "name"=>"Lámparas Colgantes",
                "description"=>"3 Lámparas de color pastel colgantes",
                "price"=>2599.00,
                "img"=>"lampa2.jpg",
              ]);

        DB::table("products")->insert(
            [
              "category_id"=>9,
              "name"=>"Lámparas Jaula",
              "description"=>"Lámpara de acero tipo Jaula colgante",
              "price"=>3350.00,
              "img"=>"lampa3.jpg",
            ]);

            DB::table("products")->insert(
                [
                  "category_id"=>9,
                  "name"=>"Lámparas Geometría",
                  "description"=>"3 Lámparas colgantes con formas geométricas",
                  "price"=>2200.00,
                  "img"=>"lampa4.jpg",
                ]);

      DB::table("products")->insert(
          [
            "category_id"=>9,
            "name"=>"Lámparas Modern",
            "description"=>"3 Lámparas de bronca con diferentes diseños",
            "price"=>3600.00,
            "img"=>"lampa5.jpg",
          ]);

          DB::table("products")->insert(
              [
                "category_id"=>9,
                "name"=>"Lámparas Trípode",
                "description"=>"Lámpara trípode de 1,50 m de altura",
                "price"=>1899.00,
                "img"=>"lampa6.png",
              ]);

      DB::table("products")->insert(
          [
            "category_id"=>10,
            "name"=>"Canastos Manijas Cuero",
            "description"=>"2 Canastos de mimbre circulares con manijas de cuero",
            "price"=>2100.00,
            "img"=>"canasto1.jpg",
          ]);

          DB::table("products")->insert(
              [
                "category_id"=>10,
                "name"=>"Canastos Mimbre Oscuro",
                "description"=>"5 canastos de mimbre color caoba de distinos tamaños",
                "price"=>1300.00,
                "img"=>"canasto2.jpg",
              ]);

          DB::table("products")->insert(
              [
                "category_id"=>10,
                "name"=>"Canastos B&W",
                "description"=>"2 Canastos de mimbre circulares trenzados blancos y negros",
                "price"=>1250.00,
                "img"=>"canasto3.jpg",
              ]);

              DB::table("products")->insert(
                  [
                    "category_id"=>10,
                    "name"=>"Canastos Trenzado",
                    "description"=>"Canasto de mimbre trenzado tipo revistero",
                    "price"=>1799.00,
                    "img"=>"canasto4.jpg",
                  ]);


        DB::table("products")->insert(
            [
              "category_id"=>10,
              "name"=>"Canastos Bajo",
              "description"=>"Canasto de mimbre bajo con manija",
              "price"=>2000.00,
              "img"=>"canasto5.jpg",
            ]);

            DB::table("products")->insert(
                [
                  "category_id"=>10,
                  "name"=>"Canastos Barril",
                  "description"=>"2 Canastos de mimbre circulares",
                  "price"=>1600.00,
                  "img"=>"canasto6.jpg",
                ]);

            DB::table("products")->insert(
                [
                  "category_id"=>7,
                  "name"=>"Almohadones Selva",
                  "description"=>"3 almohadones con plantas verdes",
                  "price"=>699.00,
                  "img"=>"almo1.jpg",
                ]);

                DB::table("products")->insert(
                    [
                      "category_id"=>7,
                      "name"=>"Almohadones Love",
                      "description"=>"4 almohadones que conforman la palabra love",
                      "price"=>899.00,
                      "img"=>"almo2.jpg",
                    ]);

                  DB::table("products")->insert(
                      [
                        "category_id"=>7,
                        "name"=>"Almohadones Flowers",
                        "description"=>"Almohadón con flores bordadas",
                        "price"=>750.00,
                        "img"=>"almo3.jpg",
                      ]);

        DB::table("products")->insert(
            [
              "category_id"=>7,
              "name"=>"Almohadones Vive Rie Ama",
              "description"=>"3 Almohadones Vive Rie Ama",
              "price"=>999.00,
              "img"=>"almo4.jpg",
            ]);

            DB::table("products")->insert(
                [
                  "category_id"=>7,
                  "name"=>"Almohadones Enjoy",
                  "description"=>"1 Almohadon con la inscripción Enjoy Life",
                  "price"=>550.00,
                  "img"=>"almo5.jpg",
                ]);

          DB::table("products")->insert(
              [
                "category_id"=>7,
                "name"=>"Almohadones París",
                "description"=>"2 Almohadones con tema París",
                "price"=>699.00,
                "img"=>"almo6.jpg",
              ]);

              DB::table("products")->insert(
                  [
                    "category_id"=>7,
                    "name"=>"Almohadones Rayas",
                    "description"=>"5 Almohadones rayados de distinto diseño",
                    "price"=>1350.00,
                    "img"=>"almo7.jpg",
                  ]);

          DB::table("products")->insert(
              [
                "category_id"=>7,
                "name"=>"Almohadones Natural",
                "description"=>"4 Almohadones sobre la vida natural animal",
                "price"=>1100.00,
                "img"=>"almo8.jpg",
              ]);

              DB::table("products")->insert(
                  [
                    "category_id"=>7,
                    "name"=>"Almohadones Trío",
                    "description"=>"1 Almohadon Blanco y 2 grises. Love in the summer",
                    "price"=>850.00,
                    "img"=>"almo9.jpg",
                  ]);

    }

}

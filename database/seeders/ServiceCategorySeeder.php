<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [   "name" => "Climatisation",
                "slug" => "climatisation",
                "image" => "1521969345.png"
            ],
            [
                "name" => "Beauté",
                "slug" => "beaute",
                "image" => "1521969358.png"
            ],
            [
                "name" => "Plomberie",
                "slug" => "plomberie",
                "image" => "1521969409.png"
            ],
            [
                "name" => "Electricité",
                "slug" => "electricite",
                "image" => "1521969419.png"
            ],
            [
                "name" => "Filtrage",
                "slug" => "filtrage",
                "image" => "1521969430.png"
            ],
            [
                "name" => "Netoyage",
                "slug" => "netoyage",
                "image" => "1521969446.png"
            ],
            [
                "name" => "Menuisierie",
                "slug" => "menuisierie",
                "image" => "1521969454.png"
            ],
            [
                "name" => "Antiparasitaire",
                "slug" => "antiparasitaire",
                "image" => "1521969464.png"
            ],
            [
                "name" => "Cheminée levée",
                "slug" => "cheminee-levee",
                "image" => "1521969490.png"
            ],
            [
                "name" => "Réparation Ordinateur",
                "slug" => "reparation-ordinateur",
                "image" => "1521969512.png"
            ],
            [
                "name" => "Télévision",
                "slug" => "television",
                "image" => "1521969522.png"
            ],
            [
                "name" => "Refrigérateur",
                "slug" => "refrigerateur",
                "image" => "1521969536.png"
            ],
            [
                "name" => "Geyser",
                "slug" => "geyser",
                "image" => "1521969558.png"
            ],
            [
                "name" => "Mécanique",
                "slug" => "mecanique",
                "image" => "1521969576.png"
            ],
            [
                "name" => "Déménagement",
                "slug" => "demenagement",
                "image" => "1521969599.png"
            ],
            [
                "name" => "Document",
                "slug" => "document",
                "image" => "1521974355.png"
            ],
            [
                "name" => "Peinture",
                "slug" => "peinture",
                "image" => "1521972643.png"
            ],
            [
                "name" => "Pressing",
                "slug" => "pressing",
                "image" => "1521972663.png"
            ],
            [
                "name" => "Pâtisserie",
                "slug" => "patisserie",
                "image" => "1521972769.png"
            ],
            [
                "name" => "Blanchisserie",
                "slug" => "blanchisserie",
                "image" => "1521972624.png"
            ],
        ]);
    }
}

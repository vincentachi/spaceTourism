<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                'picture' => "/images/Moon.png",
                'name_fr' => "LUNE",
                'name_en' => "MOON",
                'description_fr' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
                'description_en' => "See our planet like you've never seen it before. A perfect relaxing journey to help you step back and return refreshed. While you're there, immerse yourself in history by visiting the landing sites of Luna 2 and Apollo 11.",
                'distance_fr' => "384 000 KM",
                'distance_en' => "238607 Miles",
                'duration_fr' => "3 JOURS",
                'duration_en' => "3 DAYS",     
            ],
            [
                'picture' => "/images/Mars.png",
                'name_fr' => "MARS",
                'name_en' => "MARS",
                'description_fr' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest !",
                'description_en' => "You won't want to forget your hiking boots. You'll need them to climb Olympus Mons, the tallest planetary mountain in our solar system. It's two and a half times the height of Everest!",
                'distance_fr' => "225 GM",
                'distance_en' => "225 GM",
                'duration_fr' => "9 MOIS",
                'duration_en' => "9 MONTH",  
            ],
            [
                'picture' => "/images/Europe.png",
                'name_fr' => "EUROPE",
                'name_en' => "EUROPE",
                'description_fr' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",
                'description_en' => "The smallest of Jupiter's four Galilean moons, Europa is a winter lover's dream. Its icy surface is perfect for a bit of ice skating, curling, hockey, or simply relaxing in your cozy winter chalet",
                'distance_fr' => "628 GM",
                'distance_en' => "628 GM",
                'duration_fr' => "3 ANS",
                'duration_en' => "3 YEARS", 
            ],
            [
                'picture' => "/images/Titan.png",
                'name_fr' => "TITAN",
                'name_en' => "TITAN",
                'description_fr' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la maison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
                'description_en' => "The only known moon to have a dense atmosphere besides Earth, Titan is like a home away from home (and just a few hundred degrees colder!). As a bonus, you can behold stunning views of Saturn's rings.",
                'distance_fr' => "1,6 TM",
                'distance_en' => "1,6 TM",
                'duration_fr' => "7 ANS",
                'duration_en' => "7 YEARS",
            ],
        ]);
    }
}

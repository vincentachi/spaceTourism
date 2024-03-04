<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('technologies')->insert([
            [
                'picture' => '/images/LaunchVehiculeDesktop.jpg',
                'name_fr' => "LE LANCEUR",
                'name_en' => "THE LUNCHER",
                'description_fr' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l'espace, habituellement vers l'orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
                'description_en' => "A launcher or a carrier rocket is a rocket-propelled vehicle used to transport a payload from the surface of the Earth into space, typically into Earth orbit or beyond. Our WEB-X rocket is the most powerful in service. Standing at 150 meters tall, it provides a spectacular sight on the launch pad!",
            ],
            [
                'picture' => "/images/SpaceportDesktop.jpg",
                'name_fr' => "LE SPACIOPORT",
                'name_en' => "THE SPATIOPORT",
                'description_fr' => "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
                'description_en' => "A spaceport or cosmodrome is a launch (or reception) site for spacecraft, analogous to a seaport for ships or an airport for aircraft. Based at the famous Cape Canaveral, our spaceport is ideally located to take advantage of Earth's rotation for launches.",
            ],
            [
                'picture' => '/images/SpaceCapsuleDesktop.jpg',
                'name_fr' => "LA CAPSULE SPACIALE",
                'name_en' => "THE SPACE CAPSULE",
                'description_fr' => "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir.",
                'description_en' => "A space capsule is a habitable spacecraft that uses a blunt-body capsule to re-enter the Earth's atmosphere without wings. Our capsule is where you'll spend your time during the flight. It includes a gym, a cinema, and many other activities to keep you entertained.",
            ],
        ]);
    }
}
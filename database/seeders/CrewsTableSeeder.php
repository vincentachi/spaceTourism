<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('crews')->insert([
            [
                'picture' => "/images/Commander.png",
                'job_fr' => "COMMANDANT",
                'job_en' => "COMMANDER",
                'name'=> "DOUGLAS HURLEY",
                'description_fr' => "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.",
                'description_en' => "Douglas Gerald Hurley is an American engineer, a former pilot of the United States Marine Corps, and a former NASA astronaut. He ventured into space for the third time as the commander of the Crew Dragon Demo-2 spacecraft.",
            ],
            [
                'picture' => "/images/FlightEngineerDesktop.png",
                'job_fr' => "INGÉNIEURE DE VOL",
                'job_en' => "FLIGHT ENGINEER",
                'name'=> "ANOUSHEH ANSARI",
                'description_fr' => "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.",
                'description_en' => "Anousheh Ansari is an Iranian-American engineer and co-founder of Prodea Systems. Ansari was the fourth self-funded space tourist, the first self-funded woman to visit the ISS, and the first Iranian in space.",
            ],
            [
                'picture' => "/images/Pilot.png",
                'job_fr' => "PILOTE",
                'job_en' => "PILOT",
                'name'=> "VICTOR GLOVER",
                'description_fr' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l'équipage de l'Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
                'description_en' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l'équipage de l'Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
            ],
            [
                'picture' => "/images/MissionSpecialist.png",
                'job_fr' => "SPÉCIALISTE DE MISSION",
                'job_en' => "MISSION SPECIALIST",
                'name'=> "MARK SHUTTLEWORTH",
                'description_fr' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d'exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l'espace en tant que touriste spatial.",
                'description_en' => "Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind the Linux-based Ubuntu operating system. Shuttleworth became the first South African to travel to space as a space tourist.",
            ]
        ]);
    }
}

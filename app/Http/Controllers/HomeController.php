<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Crew;
use App\Models\Technology;

class HomeController extends Controller
{
    public function index()
    {
        $lang = app()-> getLocale();
        echo $lang; 
        // Votre logique pour récupérer des données si nécessaire
        $data = [
            'pageTitle' => 'Accueil',
        ];
        $planets = Destination::all(["id", "name_{$lang} as name"]);

        return view('pages.home', compact('planets'));
    }

    public function destination($id)
    {
        $locale = app()->getLocale();
        // Logique de les pages destination
        
        $destination = Destination::where('id', $id)->first(['picture', "name_{$locale} as name", "description_{$locale} as description", "distance_{$locale} as distance", "duration_{$locale} as duration"]);
        
        $planets = Destination::all(['id', "name_{$locale} as name"]);

        return view('pages.destination', compact('destination', 'planets'));
    }

    public function crew($id)
    {
        $locale = app()->getLocale();

        $crew = Crew::where('id',$id)->first(['picture', "job_{$locale} as job", 'name', "description_{$locale} as description"]);
        $crewLinks= Crew::all(['id']);

        return view('pages.crew', compact('crew', 'crewLinks'));
    }

    public function technology($id)
    {
        $locale = app()->getLocale();

        $technology = Technology::where('id', $id)->first(['picture', "name_{$locale} as name", "description_{$locale} as description"]);
        $technologyLinks = Technology::all(['id']);
        

        return view('pages.technology', compact('technology','technologyLinks'));
    }

    // public function technologyLanceur()
    // {
    //     // Logique de la page technology
    //     return view('pages.technology_lanceur');
    // }

    // public function technologySpatioport()
    // {
    //     // Logique de la page crew
    //     return view('pages.technology_spatioport');
    // }

    // public function technologyCapsule()
    // {
    //     // Logique de la page crew
    //     return view('pages.technology_capsule');
    // }
}

//     public function technology()
//     {
//         $dataTechnology = [
//             [
//                 'picture' => asset("/images/LaunchVehiculeDesktop.jpg"),  
//                 'title' => "LE LANCEUR",
//                 'text' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
//             ],
//             // [
//             //     'picture' => asset('/images/SpaceportDesktop.jpg'),
//             //     'title' => "LE SPATIOPORT",
//             //     'text' => "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
//             // ],
//             // [
//             //     'picture' => asset('/images/SpaceCapsuleDesktop.jpg'),
//             //     'title' => "LA CAPSULE SPACIALE",
//             //     'text' => "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir",
//             // ],
//         ];

//         return view('pages.technology', ['dataTechnology' => $dataTechnology]);
//     }
//     public function crew()
//     {
//         $dataCrew = [
//             [
//                 'picture' => asset("/images/Commander.png"),
//                 'job' => "COMMANDANT",
//                 'name' => "DOUGLAS HURLEY",
//                 'text' => "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2." ,
//             ],
//             // [
//             //     'picture' => asset("/images/MissionSpecialist.png"),
//             //     'job' => "SPÉCIALISTE DE MISSION",
//             //     'name' => "MARK SHUTTLEWORTH",
//             //     'text' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant que touriste spatial.",
//             // ],
//             // [
//             //     'picture' => asset("/images/Pilot.png"),
//             //     'job' => "PILOT",
//             //     'name' => "VICTOR GLOVER",
//             //     'text' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
//             // ],
//             // [
//             //     'picture' => asset("/images/FlightEngineerDesktop.png"),
//             //     'job' => "INGÉNIEURE DE VOL",
//             //     'name' => "ANOUSHEH ANSARI",
//             //     'text' => "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.",
//             // ],
//         ];

//         return view('pages.crew', ['dataCrew' => $dataCrew]);
//     }
    

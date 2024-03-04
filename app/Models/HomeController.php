// HomeController.php
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Votre logique pour récupérer des données si nécessaire
        $data = [
            'pageTitle' => 'Accueil',
        ];

        return view('pages/home', $data);
    }
    public function destination()
    {
        $data = [
            'pageTitle' => 'Destination',
        ];

        return view('pages/destination', $data);
    }
    public function technology()
    {
        $data = [
            'pageTitle' => 'Technologie',
        ];

        return view('pages/technology', $data);
    }
    public function crew()
    {
        $data = [
            'pageTitle' => 'Equipage',
        ];

        return view('pages/crew', $data);
    }
    
}

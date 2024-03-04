<?php
namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Destination;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = destination::all(); 
        return view('backoffice.destination.index', ["destinations" => $destinations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'name_fr' => 'required|string',
        'name_en' => 'required|string',
        'description_fr' => 'required|string',
        'description_en' => 'required|string',
        'distance_fr' => 'required|string',
        'distance_en' => 'required|string',
        'duration_fr' => 'required|string',
        'duration_en' => 'required|string',
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Creation d'une instance de destination du stockage de l'image
    $fileName = 'destination_' . uniqid() . '.' . $request->file('picture')->extension();
    $request->file('picture')->storeAs('public', $fileName);
    
    // Création d'une nouvelle instance de destination avec les données validées
    $destination = new Destination([
        'name_fr' => $validatedData['name_fr'],
        'name_en' => $validatedData['name_en'],
        'description_fr' => $validatedData['description_fr'],
        'description_en' => $validatedData['description_en'],
        'distance_fr' => $validatedData['distance_fr'],
        'distance_en' => $validatedData['distance_en'],
        'duration_fr' => $validatedData['duration_fr'],
        'duration_en' => $validatedData['duration_en'],
        'picture' => 'storage/' . $fileName,
    ]);
    // Enregistrement de la nouvelle destination dans la base de données
    $destination->save();
    // Redirection vers la page d'index des destinations avec un message de succès
    return redirect()->route('backoffice.destination.index')->with('success', 'Destination ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destination = Destination::findOrFail($id);    
        return view('backoffice.destination.show', compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destination = Destination::findOrFail($id);
        return view('backoffice.destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'name_fr' => 'required|string',
        'name_en' => 'required|string',
        'description_fr' => 'required|string',
        'description_en' => 'required|string',
        'distance_fr' => 'required|string',
        'distance_en' => 'required|string',
        'duration_fr' => 'required|string',
        'duration_en' => 'required|string',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Récupérer la destination à mettre à jour
    $destination = Destination::findOrFail($id);
   
    // Mise à jour des attributs de la destination
    $destination->update([
        'name_fr' => $validatedData['name_fr'],
        'name_en' => $validatedData['name_en'], 
        'description_fr' => $validatedData['description_fr'],
        'description_en' => $validatedData['description_en'],
        'distance_fr' => $validatedData['distance_fr'],
        'distance_en' => $validatedData['distance_en'],
        'duration_fr' => $validatedData['duration_fr'],
        'duration_en' => $validatedData['duration_en'],
        
    ]);
    
    // Vérifier si une nouvelle image a été téléchargée
    if ($request->hasFile('picture')) {
        
        
        // Supprimer l'ancienne image  
        $image_Path = $destination->picture;
        $imageWithoutStorage = str_replace("storage/", "", $image_Path);
        Storage::disk('public')->delete($imageWithoutStorage);
        
        // Création d'un nouveau nom de fichier
        $fileName = 'destination_' . uniqid() . '.' . $request->file('picture')->getClientOriginalExtension();
        // Stocker le fichier avec le nouveau nom
        $request->file('picture')->storeAs('public', $fileName);
        // Mettre à jour le chemin de l'image dans la destination
        $destination->picture = 'storage/' . $fileName;
    }

    // Enregistrer les modifications de la destination
    $destination->save();

    // Redirection vers la page d'index des destinations avec un message de succès
    return redirect()->route('backoffice.destination.index')->with('success', 'Destination mise à jour avec succès.');
    }

    public function delete($id)
    {
        $destination = Destination::findOrFail($id);
        return view('backoffice.destination.delete', compact('destination'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        // Supprimer l'image  
        $image_Path = $destination->picture;
        $imageWithoutStorage = str_replace("storage/", "", $image_Path);
        Storage::disk('public')->delete($imageWithoutStorage);
        $destination->delete();
        return redirect()->route('backoffice.destination.index')->with('success', 'Destination supprimée avec succès.');

    }
}

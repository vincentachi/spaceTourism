<?php
namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Crew;
use Illuminate\Support\Facades\Storage;

class CrewController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crews = crew::all(); 
        return view('backoffice.crew.index', ["crews" => $crews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.crew.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'name' => 'required|string',
        'job_fr' => 'required|string',
        'job_en' => 'required|string',
        'description_fr' => 'required|string',
        'description_en' => 'required|string',
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Creation d'une instance de crew du stockage de l'image
    $fileName = 'crew_' . uniqid() . '.' . $request->file('picture')->extension();
    $request->file('picture')->storeAs('public', $fileName);
    
    // Création d'une nouvelle instance de crew avec les données validées
    $crew= new Crew([
        'name' => $validatedData['name'],
        'job_fr' => $validatedData['job_fr'],
        'job_en' => $validatedData['job_en'],
        'description_fr' => $validatedData['description_fr'],
        'description_en' => $validatedData['description_en'],
        'picture' => 'storage/' . $fileName,
    ]);
    
    // Enregistrement de la nouvelle crew dans la base de données
    $crew->save();
    
    // Redirection vers la page d'index des crews avec un message de succès
    return redirect()->route('backoffice.crew.index')->with('success', 'Crew ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $crew = Crew::findOrFail($id);    
        return view('backoffice.crew.show', compact('crew'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crew = Crew::findOrFail($id);
        return view('backoffice.crew.edit', compact('crew'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'name' => 'required|string',
        'job_fr' => 'required|string',
        'job_en' => 'required|string',
        'description_fr' => 'required|string',
        'description_en' => 'required|string',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Récupérer la crew à mettre à jour
    $crew = Crew::findOrFail($id);
   
    // Mise à jour des attributs de la crew
    $crew->update([
        'name' => $validatedData['name'], 
        'job_fr' => $validatedData['job_fr'],
        'job_en' => $validatedData['job_en'],
        'description_fr' => $validatedData['description_fr'],
        'description_en' => $validatedData['description_en'],
    ]);
    
    // Vérifier si une nouvelle image a été téléchargée
    if ($request->hasFile('picture')) {
        
        // Supprimer l'ancienne image  
        $image_Path = $crew->picture;
        $imageWithoutStorage = str_replace("storage/", "", $image_Path);
        Storage::disk('public')->delete($imageWithoutStorage);
        
        // Création d'un nouveau nom de fichier
        $fileName = 'crew_' . uniqid() . '.' . $request->file('picture')->getClientOriginalExtension();
        // Stocker le fichier avec le nouveau nom
        $request->file('picture')->storeAs('public', $fileName);
        // Mettre à jour le chemin de l'image dans la crew
        $crew->picture = 'storage/' . $fileName;
    }

    // Enregistrer les modifications de la crew
    $crew->save();

    // Redirection vers la page d'index des crews avec un message de succès
    return redirect()->route('backoffice.crew.index')->with('success', 'crew mise à jour avec succès.');
    }

    public function delete($id)
    {
        $crew = Crew::findOrFail($id);
        return view('backoffice.crew.delete', compact('crew'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crew = Crew::findOrFail($id);
        // Supprimer l'image  
        $image_Path = $crew->picture;
        $imageWithoutStorage = str_replace("storage/", "", $image_Path);
        Storage::disk('public')->delete($imageWithoutStorage);
        $crew->delete();
        return redirect()->route('backoffice.crew.index')->with('success', 'Crew supprimée avec succès.');
    }
}

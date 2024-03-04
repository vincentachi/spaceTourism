<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;

class TechnologyController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = technology::all(); 
        return view('backoffice.technology.index', ["technologies" => $technologies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.technology.create');
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
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Creation d'une instance de technology du stockage de l'image
    $fileName = 'Technology_' . uniqid() . '.' . $request->file('picture')->extension();
    $request->file('picture')->storeAs('public', $fileName);
    
    // Création d'une nouvelle instance de technology avec les données validées
    $technology= new Technology([
        'name_fr' => $validatedData['name_fr'],
        'name_en' => $validatedData['name_en'],
        'description_fr' => $validatedData['description_fr'],
        'description_en' => $validatedData['description_en'],
        'picture' => 'storage/' . $fileName,
    ]);
    
    // Enregistrement de la nouvelle technology dans la base de données
    $technology->save();
    
    // Redirection vers la page d'index des technologies avec un message de succès
    return redirect()->route('backoffice.technology.index')->with('success', 'Technology ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $technology = Technology::findOrFail($id);    
        return view('backoffice.technology.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $technology = Technology::findOrFail($id);
        return view('backoffice.technology.edit', compact('technology'));
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
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Récupérer la technology à mettre à jour
    $technology = Technology::findOrFail($id);
   
    // Mise à jour des attributs de la technology
    $technology->update([
        'name_fr' => $validatedData['name_fr'], 
        'name_en' => $validatedData['name_en'],
        'description_fr' => $validatedData['description_fr'],
        'description_en' => $validatedData['description_en'],
    ]);
    
    // Vérifier si une nouvelle image a été téléchargée
    if ($request->hasFile('picture')) {
        
        // Supprimer l'ancienne image  
        $image_Path = $technology->picture;
        $imageWithoutStorage = str_replace("storage/", "", $image_Path);
        Storage::disk('public')->delete($imageWithoutStorage);
        
        // Création d'un nouveau nom de fichier
        $fileName = 'Technology_' . uniqid() . '.' . $request->file('picture')->getClientOriginalExtension();
        // Stocker le fichier avec le nouveau nom
        $request->file('picture')->storeAs('public', $fileName);
        // Mettre à jour le chemin de l'image dans la technology
        $technology->picture = 'storage/' . $fileName;
    }

    // Enregistrer les modifications de la technology
    $technology->save();

    // Redirection vers la page d'index des Technologys avec un message de succès
    return redirect()->route('backoffice.technology.index')->with('success', 'technology mise à jour avec succès.');
    }

    public function delete($id)
    {
        $technology = Technology::findOrFail($id);
        return view('backoffice.technology.delete', compact('technology'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $technology = Technology::findOrFail($id);
        // Supprimer l'image  
        $image_Path = $technology->picture;
        $imageWithoutStorage = str_replace("storage/", "", $image_Path);
        Storage::disk('public')->delete($imageWithoutStorage);
        $technology->delete();
        return redirect()->route('backoffice.technology.index')->with('success', 'Technology supprimée avec succès.');
    }
}

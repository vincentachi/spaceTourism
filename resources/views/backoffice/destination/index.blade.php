<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Liste des Destinations</h1>
        <!-- Bouton "Ajouter" -->
        <a href="{{ route('backoffice.destination.create') }}" class="btn btn-success mb-3">Ajouter</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de la destination</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($destinations as $destination)
                    <tr>
                        <td>{{ $destination->id }}</td>
                        <td>{{ $destination->name_fr }}</td>
                        <td><img src="{{ asset($destination->picture) }}" class="img-thumbnail" style="max-width: 100px;"></td>
                        <td>
                            <a href="{{ route('backoffice.destination.show', $destination->id) }}" class="btn btn-primary">Voir</a>
                            <a href="{{ route('backoffice.destination.edit', $destination->id) }}" class="btn btn-warning">Éditer</a>
                            <a href="{{ route('backoffice.destination.delete', $destination->id) }}" class="btn btn-danger">Supprimer</a>
                            <!-- Ajoutez d'autres boutons d'action si nécessaire -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


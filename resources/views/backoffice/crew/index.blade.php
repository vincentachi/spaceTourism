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
        <h1>Liste des Membres de d'équipages</h1>
        <!-- Bouton "Ajouter" -->
        <a href="{{ route('backoffice.crew.create') }}" class="btn btn-success mb-3">Ajouter</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom du membre d'équipage</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($crews as $crew)
                    <tr>
                        <td>{{ $crew->id }}</td>
                        <td>{{ $crew->name }}</td>
                        <td><img src="{{ asset($crew->picture) }}" class="img-thumbnail" style="max-width: 100px;"></td>
                        <td>
                            <a href="{{ route('backoffice.crew.show', $crew->id) }}" class="btn btn-primary">Voir</a>
                            <a href="{{ route('backoffice.crew.edit', $crew->id) }}" class="btn btn-warning">Éditer</a>
                            <a href="{{ route('backoffice.crew.delete', $crew->id) }}" class="btn btn-danger">Supprimer</a>
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
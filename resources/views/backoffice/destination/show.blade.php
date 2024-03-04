<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de la destination</th>
                    <th>Titre (EN)</th>
                    <th>Description (FR)</th>
                    <th>Description (EN)</th>
                    <th>Distance (FR)</th>
                    <th>Distance (EN)</th>
                    <th>Durée (FR)</th>
                    <th>Durée (EN)</th>
                    <th>Image</th> 
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $destination->id }}</td>
                    <td>{{ $destination->name_fr }}</td>
                    <td>{{ $destination->name_en }}</td>
                    <td>{{ $destination->description_fr }}</td>
                    <td>{{ $destination->description_en }}</td>
                    <td>{{ $destination->distance_fr }}</td>
                    <td>{{ $destination->distance_en }}</td>
                    <td>{{ $destination->duration_fr }}</td>
                    <td>{{ $destination->duration_en }}</td>
                    <td><img src="{{ asset($destination->picture) }}" class="img-thumbnail" style="max-width: 100px;"></td>
                    <td>
                        <a href="{{ route('backoffice.destination.index') }}" class="btn btn-primary">Retour</a>
                        <a href="{{ route('backoffice.destination.edit', $destination->id) }}" class="btn btn-warning">Éditer</a>
                        <a href="{{ route('backoffice.destination.delete', $destination->id) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

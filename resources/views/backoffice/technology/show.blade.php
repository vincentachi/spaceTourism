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
                    <th>Nom</th>
                    <th>Image</th> 
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $technology->id }}</td>
                    <td>{{ $technology->name_fr }}</td>
                    <td><img src="{{ asset($technology->picture) }}" class="img-thumbnail" style="max-width: 100px;"></td>
                    <td>
                        <a href="{{ route('backoffice.technology.index') }}" class="btn btn-primary">Retour</a>
                        <a href="{{ route('backoffice.technology.edit', $technology->id) }}" class="btn btn-warning">Éditer</a>
                        <a href="{{ route('backoffice.technology.delete', $technology->id) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
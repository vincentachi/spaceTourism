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
                    <th>Nom du membre de d'équipage</th>
                    <th>Job (FR)</th>
                    <th>Job (EN)</th>
                    <th>Description (FR)</th>
                    <th>Description (EN)</th>
                    <th>Image</th> 
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $crew->id }}</td>
                    <td>{{ $crew->name }}</td>
                    <td>{{ $crew->job_fr }}</td>
                    <td>{{ $crew->job_en }}</td>
                    <td>{{ $crew->description_fr }}</td>
                    <td>{{ $crew->description_en }}</td>
                    <td><img src="{{ asset($crew->picture) }}" class="img-thumbnail" style="max-width: 100px;"></td>
                    <td>
                        <a href="{{ route('backoffice.crew.index') }}" class="btn btn-primary">Retour</a>
                        <a href="{{ route('backoffice.crew.edit', $crew->id) }}" class="btn btn-warning">Éditer</a>
                        <a href="{{ route('backoffice.crew.delete', $crew->id) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

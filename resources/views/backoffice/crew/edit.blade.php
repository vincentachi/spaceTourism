<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer une crew</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Éditer un membre d'équipage</h1>
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
                @if ($errors->any())
                    <ul id="errors-any">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
        <form action="{{ route('backoffice.crew.update', $crew->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Utilisez la méthode PUT pour la mise à jour -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Job (FR)</th>
                        <th>Job (EN)</th>
                        <th>Description (FR)</th>
                        <th>Description (EN)</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <input type="hidden" name="id" value="{{ $crew->id }}">                        
                        <td><input type="text" name="name" class="form-control" value="{{ $crew->name}}"></td>
                        <td><input type="text" name="job_fr" class="form-control" value="{{ $crew->job_fr }}"></td>
                        <td><input type="text" name="job_en" class="form-control" value="{{ $crew->job_en }}"></td>
                        <td><textarea name="description_fr" class="form-control" rows="5">{{ $crew->description_fr }}</textarea></td>
                        <td><textarea name="description_en" class="form-control" rows="5">{{ $crew->description_en }}</textarea></td>
                        <td>
                        <td>
                            <img id="preview-image" src="{{ asset($crew->picture) }}" class="img-thumbnail" style="max-width: 100px;">
                            <div class="input-group mt-2">
                                <input type="file" name="picture" id="image-input" class="form-control" onchange="updateFileName()">
                                <label class="input-group-text" for="image-input"></label>
                            </div>
                            <div class="mt-2">
                                <span id="file-name" class="text-muted">Aucun fichier sélectionné</span>
                            </div>
                            <script>
                                function updateFileName() {
                                    let input = document.getElementById('image-input');
                                    let output = document.getElementById('file-name');
                                    output.textContent = input.files[0].name;
                                }
                            </script>
                        </td>           
                        <td>
                            <a href="{{ route('backoffice.crew.index') }}" class="btn btn-primary">Retour</a>
                            <a href="{{ route('backoffice.crew.delete', $crew->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                        <!-- <script>
                            document.getElementById('image-input').addEventListener('change', function(e) {
                                let file = e.target.files[0];
                                let reader = new FileReader();
                                reader.onload = function(e) {
                                    document.getElementById('preview-image').setAttribute('src', e.target.result);
                                }
                                reader.readAsDataURL(file);
                            });
                        </script> -->
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-warning">Appliquer</button>
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

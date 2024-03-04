<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer une destination</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Éditer une destination</h1>
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
        <form action="{{ route('backoffice.destination.update', $destination->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Utilisez la méthode PUT pour la mise à jour -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Titre (FR)</th>
                        <th>Titre (EN)</th>
                        <th>Description (FR)</th>
                        <th>Description (EN)</th>
                        <th>Distance (FR)</th>
                        <th>Distance (EN)</th>
                        <th>Durée (FR)</th>
                        <th>Durée (EN)</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <input type="hidden" name="id" value="{{ $destination->id }}">                        
                        <td><input type="text" name="name_fr" class="form-control" value="{{ $destination->name_fr }}"></td>
                        <td><input type="text" name="name_en" class="form-control" value="{{ $destination->name_en }}"></td>
                        <td><textarea name="description_fr" class="form-control" rows="5">{{ $destination->description_fr }}</textarea></td>
                        <td><textarea name="description_en" class="form-control" rows="5">{{ $destination->description_en }}</textarea></td>
                        <td><input type="text" name="distance_fr" class="form-control" value="{{ $destination->distance_fr }}"></td>
                        <td><input type="text" name="distance_en" class="form-control" value="{{ $destination->distance_en }}"></td>
                        <td><input type="text" name="duration_fr" class="form-control" value="{{ $destination->duration_fr }}"></td>
                        <td><input type="text" name="duration_en" class="form-control" value="{{ $destination->duration_en }}"></td>
                        <td>
                        <td>
                            <img id="preview-image" src="{{ asset($destination->picture) }}" class="img-thumbnail" style="max-width: 100px;">
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
                            <a href="{{ route('backoffice.destination.index') }}" class="btn btn-primary">Retour</a>
                            <a href="{{ route('backoffice.destination.delete', $destination->id) }}" class="btn btn-danger">Supprimer</a>
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


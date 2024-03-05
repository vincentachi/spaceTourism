<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle destination</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Créer une nouvelle technologie</h1>
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
        <form action="{{ route('backoffice.technologies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name_fr" class="form-label">Nom (Fr)</label>
                <input type="text" name="name_fr" id="name_fr" class="form-control" placeholder="Name_fr" value="{{ old('name_fr','') }}">
                @error('name_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name_en" class="form-label">Nom (En)</label>
                <input type="text" name="name_en" id="name_en" class="form-control" placeholder="Name_en" value="{{ old('name_en','') }}">
                @error('name_en')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_fr" class="form-label">Description (FR)</label>
                <textarea name="description_fr" id="description_fr" class="form-control" rows="5" placeholder="Description (FR)">{{ old('description_fr','') }}</textarea>
                @error('description_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_en" class="form-label">Description (EN)</label>
                <textarea name="description_en" id="description_en" class="form-control" rows="5" placeholder="Description (EN)">{{ old('description_en','') }}</textarea>
                @error('description_en')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">Image</label>
                <input type="file" name="picture" id="picture" class="form-control">
                @error('picture')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Créer une nouvelle destination</button>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Retour</a>           
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
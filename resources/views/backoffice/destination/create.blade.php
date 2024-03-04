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
        <h1>Créer une nouvelle destination</h1>
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <!-- @if ($errors->any())
            <ul id="errors-any">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif -->
        <form action="{{ route('backoffice.destinations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name_fr" class="form-label">Titre (FR)</label>
                <input type="text" name="name_fr" id="name_fr" class="form-control" placeholder="Titre (FR)" value="{{ old('name_fr','') }}">
                @error('name_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name_en" class="form-label">Titre (EN)</label>
                <input type="text" name="name_en" id="name_en" class="form-control" placeholder="Titre (EN)" value="{{ old('name_en','') }}">
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
                <label for="distance_fr" class="form-label">Distance (FR)</label>
                <input type="text" name="distance_fr" id="distance_fr" class="form-control" placeholder="Distance (FR)" value="{{ old('distance_fr','') }}">
                @error('distance_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="distance_en" class="form-label">Distance (EN)</label>
                <input type="text" name="distance_en" id="distance_en" class="form-control" placeholder="Distance (EN)" value="{{ old('distance_en','') }}">
                @error('distance_en')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="duration_fr" class="form-label">Durée (FR)</label>
                <input type="text" name="duration_fr" id="duration_fr" class="form-control" placeholder="Durée (FR)" value="{{ old('duration_fr','') }}">
                @error('duration_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="duration_en" class="form-label">Durée (EN)</label>
                <input type="text" name="duration_en" id="duration_en" class="form-control" placeholder="Durée (EN)" value="{{ old('duration_en','') }}">
                @error('duration_en')
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
            <button type="submit" class="btn btn-primary">Créer une nouvelle destination</button>
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

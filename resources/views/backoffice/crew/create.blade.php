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
        <h1>Créer un nouveau membre d'équipage</h1>
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
        <form action="{{ route('backoffice.crews.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ old('name','') }}">
                @error('name')
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
                <label for="job_fr" class="form-label">Job (FR)</label>
                <input type="text" name="job_fr" id="job_fr" class="form-control" placeholder="Job (FR)" value="{{ old('job_fr','') }}">
                @error('hob_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="job_en" class="form-label">Job (EN)</label>
                <input type="text" name="job_en" id="job_en" class="form-control" placeholder="Job (EN)" value="{{ old('job_en','') }}">
                @error('distance_en')
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
            <button type="submit" class="btn btn-primary">Créer une nouveau membre d'équipage</button>           
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

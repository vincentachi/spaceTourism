<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de suppression</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Confirmation de suppression</h1>
        <p>Êtes-vous sûr de vouloir supprimer la technologie "{{ $technology->name_fr }}" ? Cette action est irréversible.</p>
        <form action="{{ route('backoffice.technology.destroy', $technology->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
            <a href="{{ route('backoffice.technology.index') }}" class="btn btn-primary">Annuler</a>
        </form>
    </div>
    <script>
        // JavaScript pour afficher une boîte de dialogue de confirmation avant de supprimer
        function confirmDelete() {
            return confirm("Êtes-vous sûr de vouloir supprimer ce membre d'équipage ?");
        }
    </script>
</body>
</html>
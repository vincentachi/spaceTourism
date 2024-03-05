<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bonjour administrateur</h1>
        <h2>Sur quelle table voulez vous travailler?</h2>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Destinations</div>
                    <div class="card-body">
                        <p class="card-text">Liste des destinations</p>
                        <a href="{{ route('backoffice.destination.index') }}" class="btn btn-primary">Voir Destination</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Crew</div>
                    <div class="card-body">
                        <p class="card-text">Liste des membres d'équipage</p>
                        <a href="{{ route('backoffice.crew.index') }}" class="btn btn-primary">Voir Crew</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Technologies</div>
                    <div class="card-body">
                        <p class="card-text">Liste des technologies</p>
                        <a href="{{ route('backoffice.technology.index') }}" class="btn btn-primary">Voir Technology</a>
                    </div>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-success">>
                Se déconnecter
            </a>
        </div>
    </div>
</body>
</html>


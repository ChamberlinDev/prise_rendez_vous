<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registre</title>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="w-50">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        @if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

        <form class="form-control" action="{{ route('login_save') }}" method="POST">
            @csrf
            
            <div class="text-center mt-3">
                <h3>CONNEXION</h3>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" name="email" class="form-control form-control-sm">
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control form-control-sm">
               
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
            <div class="text-center">
                <span>Je n'ai pas de compte! <a href="{{ route('registre') }}">S'inscrire</a></span>
            </div>
        </form>
    </div>
</div>

</body>

</html>

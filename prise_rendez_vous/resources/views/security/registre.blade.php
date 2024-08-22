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
        <form class="form-control w-50" action="{{route('registre_save')}}" method="POST" >
        @csrf
       <div class="text-center"><h3>INSCRIPTION</h3></div>  
    
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" name="firstname" class="form-control form-control-sm" >
                @error('firstname')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control form-control-sm"  >
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rôle</label>
                <select name="role" class="form-control form-control-sm">
                    <option></option>
                    <option value="medecin">Médecin</option>
                    <option value="patient">Patient</option>
                </select>
                @error('role')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Numero de telephone</label>
                <input type="text" name="telephone" class="form-control form-control-sm"  >
                @error('telephone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" name="email" class="form-control form-control-sm"  >
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control form-control-sm"  >
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
            <a href="{{route('login')}}" class="btn btn-link">Se connecter</a>
            </form> 
    </div>
</body>
</html>

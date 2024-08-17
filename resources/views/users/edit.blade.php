@extends('layout.base')
@section('content')
<div class="container">
    <a href="{{ route('dashbord') }}">
        Home
    </a>
    <a href="{{ route('logout') }}">
        Se déconnecter
    </a>
    <h1>Modifier un utilisateur</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
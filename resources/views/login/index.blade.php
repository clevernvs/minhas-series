<x-layout title="Login - Minhas Séries">

    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" name="email" type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" name="password" type="password" class="form-control"/>
        </div>

        <button class="btn btn-primary mt-3">Entrar</button>
        <a href="{{ route('users.create') }}" class="btn btn-secondary mt-3">Registrar</a>
    </form>

</x-layout>

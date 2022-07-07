<x-layout title="Novo Usuário">
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input id="name" name="name" type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input id="email" name="email" type="email" class="form-control"/>
        </div>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input id="password" name="password" type="password" class="form-control"/>
        </div>

        <button class="btn btn-primary mt-3">Registrar</button>
    </form>
</x-layout>

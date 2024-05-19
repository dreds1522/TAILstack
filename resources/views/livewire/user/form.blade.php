<div>
    <form wire:submit.prevent="save">
        <label for="name">Nome</label>
        <input type="text" wire:model.defer="name" id="name">
        @error('name') <span>{{$message}}</span> @enderror

        <label for="email">E-mail</label>
        <input type="email" wire:model.defer="email" id="email">
        @error('email') <span>{{$message}}</span> @enderror

        <label for="password">Senha</label>
        <input type="password" wire:model.defer="password" id="password">
        @error('password') <span>{{$message}}</span> @enderror

        <label for="password_confirmation">Confirmar Senha</label>
        <input type="password" wire:model.defer="password_confirmation" id="password_confirmation">

        <button>Cadastrar</button>
    </form>
</div>


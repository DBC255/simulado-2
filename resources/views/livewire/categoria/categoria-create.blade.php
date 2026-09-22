<div class="py-5 position-absolute top-50 start-50 translate-middle">
    <div class="card mx-5">
        <div class="card-body">
    <form wire:submit='save' class="row g-3">
  <div class="col-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" wire:model='nome' class="form-control" id="nome">
  </div>
  <div class="col-12">
    <a href="{{ route('categoria.index') }}"wire:click='save' type="submit" class="btn btn-primary">salvar</a>
    <a href="{{ route('categoria.index') }}" class="btn btn-danger">cancelar</a>
  </div>
</form>
  </div>
    </div>
    {{-- In work, do what you enjoy. --}}
</div>

<div class="py-5 position-absolute top-50 start-50 translate-middle">
    <div class="card mx-5">
        <div class="card-body">
    <form wire:submit.prevent='save' class="row g-3">
  <div class="col-4">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" wire:model='nome' class="form-control" id="nome">
  </div>
  <div class="col-4">
    <label for="praso_v" class="form-label">praso validade</label>
    <input type="text" wire:model='praso_v' class="form-control" id="praso_v">
  </div>
  <div class="col-4">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" wire:model='valor' class="form-control" id="valor">
  </div>
  <div class="col-4">
    <label for="cor" class="form-label">cor</label>
    <input type="text" wire:model='cor' class="form-control" id="cor">
  </div>
  <div class="col-4">
    <label for="peso" class="form-label">peso</label>
    <input type="text" wire:model='peso' class="form-control" id="peso">
  </div>
  <div class="col-4">
    <label for="observacoes" class="form-label">observações</label>
    <input type="text" wire:model='observacoes' class="form-control" id="observacoes">
  </div>
  <div class="col-4">
    <label for="categoria" class="form-label">categoria</label>
    <input type="text" wire:model='categorias' class="form-control" id="categorias">
  </div>
  <div class="col-md-4">
    <label for="qtd_estoque" class="form-label">Qtd. Estoque</label>
    <input type="text" wire:model='qtd_atual' class="form-control" id="qtd_estoque">
  </div>
  <div class="col-md-4">
    <label for="qtd_minima" class="form-label">Qtd. minima</label>
    <input type="text" wire:model='qtd_min' class="form-control" id="qtd_minima">
  </div>

  <div class="col-12">
    <a href="{{ route('produto.index') }}" type="submit" class="btn btn-primary">salvar</a>
    <a href="{{ route('produto.index') }}" class="btn btn-danger">cancelar</a>
  </div>
</form>
  </div>
    </div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>

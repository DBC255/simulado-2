<div class="mt-5">
    <form wire:submit.prevent='update' class="row g-3">
  <div class="col-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" wire:model='nome' class="form-control" id="nome">
  </div>
  <div class="col-12">
    <label for="praso_v" class="form-label">praso validade</label>
    <input type="text" wire:model='praso_v' class="form-control" id="praso_v">
  </div>
  <div class="col-12">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" wire:model='valor' class="form-control" id="valor">
  </div>
  <div class="col-12">
    <label for="cor" class="form-label">cor</label>
    <input type="text" wire:model='cor' class="form-control" id="cor">
  </div>
  <div class="col-12">
    <label for="peso" class="form-label">peso</label>
    <input type="text" wire:model='peso' class="form-control" id="peso">
  </div>
  <div class="col-12">
    <label for="observacoes" class="form-label">observações</label>
    <input type="text" wire:model='observacoes' class="form-control" id="observacoes">
  </div>
  <div class="col-12">
    <label for="categoria" class="form-label">categoria</label>
    <input type="text" wire:model='categorias' class="form-control" id="categorias">
  </div>
  <div class="col-md-12">
    <label for="qtd_estoque" class="form-label">Qtd. Estoque</label>
    <input type="text" wire:model='qtd_atual' class="form-control" id="qtd_estoque">
  </div>
  <div class="col-md-12">
    <label for="qtd_minima" class="form-label">Qtd. minima</label>
    <input type="text" wire:model='qtd_min' class="form-control" id="qtd_minima">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">salvar</button>
  </div>
</form>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>

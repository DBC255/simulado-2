<div class="mt-5">
  @if (session()->has('erro'))
  <div class="alert alert-danger">
    {{ session('erro') }}
  </div>
  @endif

  @if(session()->has('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
    <div class="mb-3">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">cor</th>
      <th scope="col">peso_kg</th>
      <th scope="col">obsrvações</th>
      <th scope="col">categorias</th>
      <th scope="col">Qtd. Estoque</th>
      <th scope="col">Qtd. Minima</th>
      <th>editar</th>
      <th>excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produtos as $p)
    <tr>
      <th>{{ $p->id }}</th>
      <td>{{ $p->nome }}</td>
      <td>{{ $p->valor }}</td>
      <td>{{ $p->cor }}</td>
      <td>{{ $p->peso_kg }}</td>
      <td>{{$p->observacoes}}</td>
      <td>{{ $p->categorias }}</td>
      <td>{{ $p->qtd_atual }}</td>
      <td>{{ $p->qtd_min }}</td>
      <td><a href="{{ route('produto.edit', ['id' => $p->id]) }}" class="btn btn-sm btn-info">edit</a></td>
      <td><button wire:click='delete({{ $p->id }})' class="btn btn-sm btn-danger">delete</button></td>
    </tr>
    @endforeach

  </tbody>
</table>

<a href="{{ route('dashboard') }}" class="btn btn-secondary">Pagina inicial</a>
<a href="{{ route('produto.create') }}" class="btn btn-success"><i class="bi bi-plus-square-fill"></i> adicionar produto</a>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>

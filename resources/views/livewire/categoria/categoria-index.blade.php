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
      <th>editar</th>
      <th>excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categoria as $c)
    <tr>
      <th>{{ $c->id }}</th>
      <td>{{ $c->nome }}</td>
      <td><a href="{{ route('categoria.edit', ['id' => $c->id]) }}" class="btn btn-sm btn-info">edit</a></td>
      <td><button wire:click='delete({{ $c->id }})' class="btn btn-sm btn-danger">delete</button></td>
    </tr>
    @endforeach

  </tbody>
</table>

<a href="{{ route('dashboard') }}" class="btn btn-secondary">Pagina inicial</a>
<a href="{{ route('categoria.create') }}" class="btn btn-success"><i class="bi bi-plus-square-fill"></i> adicionar categoria</a>

    {{-- In work, do what you enjoy. --}}
</div>

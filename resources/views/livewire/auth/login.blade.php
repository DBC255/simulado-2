<div>
    <div class="card position-absolute top-50 start-50 translate-middle text-bg-dark">
        @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form wire:submit.prevent='login' class="card-body">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" wire:model='email' class="form-control" id="email" aria-describedby="email">
    @error('email')
                <span class="text-danger small">
                    {{ $message }}
                </span>
            @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" wire:model='password' class="form-control" id="password">
    @error('password')
                <span class="text-danger small">
                    {{ $message }}
                </span>
            @enderror
  </div>
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>
</div>
    {{-- The whole world belongs to you. --}}
</div>

<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Cadastro de Funcionário</h5>

        <div class="card-body">
            <form wire:submit.prevent="store" class="row g-3" >
                
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome"
                        placeholder="Ex: Fernando..." wire:model.defer="nome">
                </div>

                <div class="col-md-5">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" wire:model.defer="email">
                </div>

                <div class="col-md-3">
                    <label for="inputPassword3" class="form-label">Senha</label>
                    <input type="password" id="inputPassword3" class="form-control" wire:model.defer="password">
                </div>

                <div class="col-md-4">
                    <label for="inputCity" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="inputCity" wire:model.defer="cpf">
                  </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
            </form>
        </div>
    </div>
</div>

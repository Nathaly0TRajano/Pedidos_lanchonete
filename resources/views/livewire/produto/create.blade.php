<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form class=" mt-2 p-5 border " style="background-color: #e4efff" wire:submit.prevent="store">
        <div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome:</label>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <input type="name" class="form-control" id="inputEmail3" wire:model.defer="nome">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ingredientes:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" wire:model.defer="ingredientes"></textarea>
        </div>
        <div>
            <label for="valor" class="form-label">Valor:</label>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control " aria-label="Amount (to the nearest dollar)" wire:model.defer="valor">
              </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Escolha a foto do produto</label>
            <input class="form-control" type="file" id="formFile" wire:model.defer="imagem">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

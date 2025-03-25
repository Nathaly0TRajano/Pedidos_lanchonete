<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;

    public function render()
    {
        return view('livewire.produto.create');
    }
    

    public function store(){

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
        ]);

        session()->flash('success', 'Cadastro do produto realizado');
    }

    protected $rules = [
        'nome'=>'required|max:255|min:3|',
        'ingredientes'=> 'required|min:7',
        'valor'=> 'required|decimal:2'
    ];

    protected $messeges = [
        'nome.required' =>'O campo não pode ficar vazio',
        'nome.max' =>'O nome precisa ter menos de 255 caracteres',
        'nome.min' =>'O nome precisa ter mais que 3 caracteres',
        'ingredientes.required' => 'O campo não pode ficar vazio',
        'ingredientes.min' => 'O campo precisa ter no minímo 7 caracteres',
        'valor.required' => 'O campo valor não pode ficar vazio',
        'valor.decimal' => 'O campo precisa ser escrito em decimal',
    ];
}

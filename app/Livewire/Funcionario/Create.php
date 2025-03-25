<?php

namespace App\Livewire\Funcionario;

use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email;
    public $password;
    public $cpf;

    public function render()
    {
        return view('livewire.funcionario.create');
    }

     
    protected $rules = [
        'nome' => 'required|max:80|min:3',
        'email' => 'required|email|unique:funcionario',
        'password' => 'required|min:6',
        'cpf' => 'required|unique'
    ];

    protected $messeges = [
        'nome.required' =>'O campo não pode ficar vazio',
        'nome.max' =>'O nome precisa ter menos de 80 caracteres',
        'nome.min' =>'O nome precisa ter mais que 3 caracteres',
        'email.required' => 'Email é obrigatório',
        'email.email' => 'Formato de email inválido',
        'email.unique' => 'Este endereço de email já está cadastrado',
        'password.required' => 'A senha obrigatória',
        'password.min' => 'A senha precisa ter mais de 6 caracteres',
        'cpf.required' =>'O campo cpf não pode ficar vazio',
        'cpf.unique' =>'Este cpf já existe'
    ];

    
    public function store(){
        $user = User::create([
            'name' => $this->nome, 
            'email' => $this->email, 
            'password' => Hash::make($this->password),
            'role' => 'funcionario'
        ]); 

        Funcionario::create([
            'cpf'=>$this->cpf,
            'user_id' => $user->id
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}

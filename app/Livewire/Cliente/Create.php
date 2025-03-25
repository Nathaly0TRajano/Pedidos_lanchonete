<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $email;
    public $password;
    public $endereco;
    public $telefone;
    public $cpf;



    public function render()
    {
        return view('livewire.cliente.create');
    }

    public function store(){
        $user = User::create([
              'name' => $this->nome, 
              'email' => $this->email, 
              'password' => Hash::make($this->password),
              'role' => 'cliente'
          ]); 
  
          Cliente::create([
              'endereco'=>$this->endereco,
              'telefone'=>$this->telefone,
              'cpf'=>$this->cpf,
              'user_id' => $user->id
          ]);
  
          session()->flash('success', 'Cadastro Realizado');
      }
}

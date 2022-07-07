@extends('templates.template')

@section('content')
<h1 class="text-center">Visualizar</h1>



<div class="col-8 m-auto">
   
   Nome: {{ $curriculo->name }} <br>
   Telefone: {{  $curriculo->telefone }} <br>
   Endereço de email: {{  $curriculo->email }} <br>
   Endereço web: {{  $curriculo->enderecoweb }} <br>
   Experiência profissional:  {{  $curriculo->experiencias}} <br>
   <a href="{{url('curriculos')  }}">
      <button class="btn btn-success"> Voltar</button>
   </a>
   

</div>
@endsection



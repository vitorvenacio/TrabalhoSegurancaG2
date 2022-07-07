@extends('templates.template')

@section('content')
<h1 class="text-center">CADASTRAR</h1>

<div class="col-8 m-auto">

    @if (isset ($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach ($errors->all() as $erro )
                {{$erro}} <br>
            @endforeach
        </div> 
    @endif
    
    <form name="formCad" id="formCad" method="post" action="{{ url('curriculos') }}">
        @csrf
        <!-- segurancça https://laravel.com/docs/9.x/csrf#main-content -->
        <label for="exampleFormControlTextarea1" class="form-label">Nome:</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="..." > <br>

        <label for="exampleFormControlTextarea1" class="form-label">Telefone:</label>
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="..."> <br>

        <label for="exampleFormControlTextarea1" class="form-label">Endereço de e-mail:</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="..." > <br>

        <label for="exampleFormControlTextarea1" class="form-label">Endereço web:</label>
        <input class="form-control" type="text" name="enderecoweb" id="enderecoweb" placeholder="..."> <br>
        
        <label for="exampleFormControlTextarea1" class="form-label">Expereriencias profissionais:</label>
        <textarea class="form-control"  rows="3" name="experiencias" id="experiencias" 
            placeholder="Expereriencias profissionais" > </textarea> <br>
        <input class="btn btn-primary" type="submit" value="Cadastra">
        
    </form>
    <a href="{{url('curriculos')  }}">
        <button class="btn btn-success"> Voltar</button>
     </a>
</div>
@endsection



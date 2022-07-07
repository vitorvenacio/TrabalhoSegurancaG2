@extends('templates.template')

@section('content')
<h1 class="text-center">CURRÍCULO</h1>

<div class="text-center mt-3 mb-4">
    <a href="{{url('curriculos/create')  }}">
        <button class="btn btn-success"> Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
    <table class="table text-center  table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($curriculo as $curriculos )
           <tr>
            <th scope="row">{{ $curriculos->name }}</th>
            <td>{{ $curriculos->email }}</td>            
            <td>
                <a href="{{ URL("curriculos/$curriculos->id") }}">
                    <button class="btn btn-dark"> Visualizar</button>
                </a>
            </td>

           </tr>
           @endforeach 
        
        </tbody>
      </table>

</div>
@endsection



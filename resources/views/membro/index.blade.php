@include('layouts.header')

<div class="container" >
  <div class="jumbotron-fluid text-center container">
      <h3 card-title class="display-6 text-center">Agradecemos o seu cadastro </h3>
      <br>
      <img src="/image/ieada.jpg" class="img-fluid" width="100" height="100">
      <br>
      <br>
      <br>
      <br>
  </div>
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <hr>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
  @if(count($membros) > 0)
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NOME</th>
        <th scope="col">SOBRENOME</th>
        <th scope="col">AÇÕES</th>
      </tr>
    </thead>
  
  <tbody>
    @foreach($membros as $membro)
      <tr>
        <td scropt="row">{{$loop->index + 1}}</td>
        <td><a href="/membro/{{$membro->id}}">{{$membro->nome}}</a></td>
        <td><a href="/membro/{{$membro->id}}">{{$membro->sobrenome}}</a></td>
        <td>
          <a href="/membro/edit/{{$membro->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
           <form action="/membro/{{$membro->id}}" method="POST" style="display:inline-block">
              @csrf 
              @method('DELETE')
              <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
           </form>
      </tr>
    @endforeach
  </table>
  </tbody>
  @else
    <p>Você ainda não tem nenhum membro cadastrado, <a href="/membro/create">Cadastrar membro</a></p>
  @endif  
</div>

<div class="container">
    <div class="container">
      <a href="/membro/create" class="btn btn-success">Cadastre aqui!</a>
    </div>
</div>
 
<br>
<br>
<div class="container">
  <h5>Todos os dados amarzenados aqui por esse site serão para uso da secretaria da igreja não se preocupe 
    nenhum dado será compartilhado com terceiros, lembre seu login é restrito não passe ele a ninguém agradecemos o seu 
    cadastro.
  </h5>
</div>
<br>
<br>
@include('layouts.footer')
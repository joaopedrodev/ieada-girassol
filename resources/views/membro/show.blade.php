@include('layouts.header')

<div class="col-md10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/membro/{{$membro->image}}" class="img-fluid" alt="" style="border-radius: 10px">
        </div>
       

        <div id="info-container"  class="col-md-6" style="margin-top: 2.5%">
            
        <h6>ID: {{$membro->id}}</h6>
        <h6>CADASTRADO POR: {{$membroOwner['name']}}</h6>
        <h6>NOME: {{strtoupper($membro->nome)}}</h6> 
        <h6>SOBRENOME: {{strtoupper($membro->sobrenome)}}</h6>
        <h6>ENDEREÇO: {{strtoupper($membro->endereco)}}</h6>
        <h6>BAIRRO: {{strtoupper($membro->bairro)}}</h6>
        <h6>CIDADE: {{strtoupper($membro->cidade)}}</h6>
        <h6>CEP: {{strtoupper($membro->cep)}}</h6>
        <h6>REGISTRO GERAL: {{strtoupper($membro->registro)}}</h6>
        <h6>ORGÃO EXPEDIDOR: {{strtoupper($membro->orgao)}}</h6>
        <h6>CPF: {{strtoupper($membro->cpf)}}</h6>
        <h6>EMAIL: {{strtoupper($membro->email)}}</h6>
        <h6>PROFISSÃO: {{strtoupper($membro->profissao)}}</h6>
        <h6>FORMAÇÃO: {{strtoupper($membro->formacao)}}</h6>
        <h6>ESTADO CIVIL: {{strtoupper($membro->estadocivil)}}</h6>
        <h6>TIPO SANGUINEO: {{strtoupper($membro->tiposanguineo)}}</h6>
        <h6>TELEFONE: {{strtoupper($membro->telefone)}}</h6>
        <h6>BATIZADO?:{{strtoupper($membro->batizado)}}</h6>
    
        <h6>DATA DE NASCIMENTO: {{date('d/m/Y', strtotime($membro->date))}}</h6>
        <h6>Suas habilidades</h6>
        <ul id="items-list">
            @foreach($membro->items as $item)
            <li>{{strtoupper($item)}}</li>
            @endforeach
        </ul>

        </div>
    </div>
</div>
@include('layouts.footer')
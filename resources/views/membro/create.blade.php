
@include('layouts.header')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Formulário de Cadastro de Membros  2022</h1>
        <br>
    <form action="/membro" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <div class="form-group">
                <label for="image">Foto do Membro</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="row">
                <div class="col">
                    <input type="text"  name="nome"class="form-control" placeholder="Nome" required="nome">
                </div>

                <div class="col">
                    <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required="sobrenome">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label for="inputAddress"></label> <input type="text"
                        class="form-control" name="endereco" id="inputAddress"
                        placeholder="Endereço" required="endereco">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="bairro" class="form-control" placeholder="Bairro" required="bairro">
                </div>
                <div class="col">
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" required="cidade">
                </div>
                
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="cep" class="form-control" placeholder="Cep" required="cep">
                </div>
                <div class="col">
                    <input type="text" name="registro" class="form-control"
                        placeholder="Registro Geral" required="rg">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="orgao" class="form-control"
                        placeholder="Órgão Expedidor" required="orgao">
                </div>
                
                <div class="col">
                    <input type="text" name="cpf" class="form-control" placeholder="CPF" required="cp">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="email" name="email" class="form-control"
                        placeholder="Email" required="email">
                </div>
                
                <div class="col">
                    <input type="text" name="profissao" class="form-control" placeholder="Profissão" required="profissao">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="formacao" class="form-control"
                        placeholder="Grau de Escolaridade" required="formacao">
                </div>
                
                <div class="col">
                    <input type="text" name="estadocivil" class="form-control" placeholder="Estado Civil" required="estadocivil">
                </div>
            </div>
            <br>
            
            
            
            
                <div class="row">
                <div class="col">
                    <input type="text" name="unidadefederativa" class="form-control"
                        placeholder="Unidade Federativa" required="Uf">
                </div>
                <br>
                <div class="col">
                    <input type="text" name="tiposanguineo" class="form-control" placeholder="Tipo Sanguineo" required="tiposanguineo">
                </div>
            </div>
            <br>
                <div class="row">
                <div class="col">
                    <input type="text" name="telefone" class="form-control"
                        placeholder="Telefone ou Celular" required="telefone">
                </div>
                <br>
                <div class="col">
                <input type="text" name="batizado" class="form-control"
                        placeholder="Você é Batizado ?" required="batizado">
                    
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="date">Data de nascimento</label>
                <input type="date" name="date" id="date">
            </div>

            <div class="form-group">
                <label for="title">Que dom especial você possui?</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Canta" id="">Canta
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Toca violão" id="">Toca Violão
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Toca baixo" id="">Toca baixo
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Toca guitarra" id="">Toca guitarra
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Toca bateria" id="">Toca bateria
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Toca teclado" id="">Toca teclado
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Pregado(a)" id="">Pregador(a)
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Prefiro não informar" id="">Prefiro não informar
                </div>
            </div>
        
            
            <br> 
            
            <button type="submit" class="btn btn-primary">Enviar Cadastro</button>
        </div>
    </form> 
</div>
@include('layouts.footer')
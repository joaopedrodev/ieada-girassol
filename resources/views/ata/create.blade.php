@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Criar ata de reunião</h1>
        <br>
    <form action="/ata/index" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <div class="form-group">
               <label>Titulo</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Texto da reunião</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="50"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Salvar ata</button>
            </div>
        </div>    
    </form>
</div>     
@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Editar ata de reunião</h1>
        <br>
        <form action="/ata/update/{{$atas->id}}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @method('PUT')
            <div class="form-group">
               <label>Titulo</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Titulo" value="{{$atas->title}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Texto da reunião</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="50">{{$atas->description}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Salvar ata</button>
            </div>
        </div>    
    </form>
</div>     
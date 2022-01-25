@include(".header")

@forelse ($data as $developer)
<div class="card py-4" style="width: 16rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqtYlBdDn2iouTCJ-DS20jUy8uGX0qYmad7Q&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nombre: {{$developer->Nombre}}</h5>
    <h6>Apellido: {{$developer->Apellido}}</h6>
    <p class="card-text">Tencnologia: {{$developer ->Tecnologia}}</p>
    <a href="./developer/{{$developer->id}}/edit"><button type="button" class="btn btn-warning">Editar</button></a>
    <form action="/developer/{{$developer->id}}" method="post" class="d-inline">
      @method("delete")
      @csrf
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    <a href="./developer/{{$developer->id}}"><button type="button" class="btn btn-primary">Info</button></a>
  </div>
</div>

@empty
<div class="p-3">
  <div class="alert alert-danger" role="alert">
    No hay desarrolladores
  </div>
</div>
@endforelse
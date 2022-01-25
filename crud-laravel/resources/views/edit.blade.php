@include(".header")

<div class="d-flex flex-direction-column justify-content-center">
  <form action="/developer/{{$developer->id}}" method="post">
    @method("put")

    @csrf

    <h3 class="text-center py-3">Editar informacion</h3>

    <div class="form-floating mb-3">
      <input value="{{$developer->Nombre}}" name="nombre" type="text" class="form-control" id="floatingInput" placeholder="Ingrese su nombre" autocomplete="off">
      <label for="floatingInput">Nombre</label>
    </div>

    <div class="form-floating mb-3">
      <input value="{{$developer->Apellido}}" name="apellido" type="text" class="form-control" id="floatingInput" placeholder="Ingrese su apellido" autocomplete="off">
      <label for="floatingInput">Apellido</label>
    </div>

    <div class="form-floating mb-3">
      <input value="{{$developer->Tecnologia}}" name="tecnologia" type="text" class="form-control" id="floatingInput" placeholder="React, Angular, Laravel" autocomplete="off">
      <label for="floatingInput">Tecnologia</label>
    </div>

    <div>
      <button type="submit" class="btn btn-success">Editar</button>
      <a href="./"><button type="button" class="btn btn-warning">Atras</button></a>
    </div>

  </form>

</div>
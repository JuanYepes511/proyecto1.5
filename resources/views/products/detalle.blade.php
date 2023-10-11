@extends('layout.main')
@section('content')

<h1 class="text-center m-5">Detalle del producto</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="img/producto1.png" class="img-fuild">
        </div>
        <div class="col-md-4">
            <h1>Computador</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus est aperiam deleniti hic omnis, nisi doloremque enim consectetur? Nemo saepe corrupti odit sit repellendus itaque cum non ducimus ipsa sint.</p>
            <h3>$4'500.000</h3>
            <button type="button" class="btn my-background">Añadir al carrito</button>        
        </div>
    </div>
</div>
@endsection
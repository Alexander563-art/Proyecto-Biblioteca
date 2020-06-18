@if ($errors->any())

<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <h4>El formulario contiene errores</h4>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>


</div>

@endif

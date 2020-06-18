<div class="form-group">
    <label for="nombre" class="col-lg-3 cotrol-label requerido">Nombre</label>
    <div class="col-lg-8">
        <input type="text" name="nombre" id="nombre" class="form-control" required value="{{old('nombre')}}" />
    </div>
</div>


<div class="form-group">
    <label for="url" class="col-lg-3 cotrol-label requerido">Url</label>
    <div class="col-lg-8">
        <input type="text" name="url" id="url" class="form-control" required value="{{old('url')}}" />
    </div>
</div>


<div class="form-group">
    <label for="icono" class="col-lg-3 cotrol-label">Icono</label>
    <div class="col-lg-8">
        <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono')}}" />
    </div>
    <div class="col-lg-1">
        <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
    </div>


</div>

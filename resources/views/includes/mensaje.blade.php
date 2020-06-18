@if (session("mensaje"))

<div class="alert alert-success alert-dismissible" data-auto-dismissible="5000">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <h4>Mensaje Sistema Biblioteca</h4>
    <ul>

        <li>{{session("mensaje")}}</li>

    </ul>


</div>

@endif

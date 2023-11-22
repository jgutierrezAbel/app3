
<a href="/empleado/create"class="btn btn-success">Crear empleado</a>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Accion</th>


    </tr>

    </thead>
    <tbody>
        @foreach($datosempleado as $empleado)
        <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th><a href="\afiliado\{{$empleado->id}}">Afiliados</a></th>

            <th>
            <form action="/empleado/{{$empleado->id}}" method="post">
                        @csrf
                        @method('DELETE')
                  
                    <a href="/empleado/edit"class="btn btn-primary">Editar</a>
                    <a href="/empleado"class="btn btn-warning">Eliminar 1 </a>
                    <button type="submit" class = "btn btn-primary">Eliminar 2</button>



                    </form>




            </th>
       
       
       
       
        </tr>
        @endforeach

    </tbody>

</table>
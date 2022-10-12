@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="bitacora-tab" data-toggle="tab" href="#bitacora" role="tab" aria-controls="bitacora" aria-selected="true">Bitacora</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="especialista-tab" data-toggle="tab" href="#especialista" role="tab" aria-controls="especialista" aria-selected="false">Especialista</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="codigo-tab" data-toggle="tab" href="#codigo" role="tab" aria-controls="codigo" aria-selected="false">Código Libra</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="backlog-tab" data-toggle="tab" href="#backlog" role="tab" aria-controls="backlog" aria-selected="false">Backlog</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="bitacora" role="tabpanel" aria-labelledby="bitacora-tab">

      <table class="table">
  <thead class="thead-dark">               
    <tr>
      <th scope="col">Id sol</th>
      <th scope="col">Tipo de sol</th>
      <th scope="col">Detalle sol</th>
      <th scope="col">Solicitante</th>
      <th scope="col">Área Solicitante</th>
      <!-- <th scope="col">Fecha sol</th>
      <th scope="col">Especialista resp</th>
      <th scope="col">Gerencia</th>
      <th scope="col">Normativo</th>
      <th scope="col">Prioritario</th>
      <th scope="col">Fec Inicio</th>
      <th scope="col">Fec fin real prod</th>
      <th scope="col">N° control de cambio cal</th>
      <th scope="col">Fecha fin real cal</th>
      <th scope="col">N° control de cambio cal</th>
      <th scope="col">Fec suspensión</th>
      <th scope="col">Detalle del seguimiento</th>
      <th scope="col">% avance</th>
      <th scope="col">Fec cierre</th>
      <th scope="col">estado</th>
      <th scope="col">Observaciones</th>       -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
   
  </tbody>
</table>



  </div>




  <div class="tab-pane" id="especialista" role="tabpanel" aria-labelledby="especialista-tab">

      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Datos Personales
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <form>
  <div class="form-row">

    <div class="form-group col-md-2">
      <label for="inputCodigo">Código Unidad</label>
      <input type="text" class="form-control" id="inputCodigo" placeholder="Unidad">
    </div>

    <div class="form-group col-md-2">
      <label for="inputCedula">Cédula</label>
      <input type="text" class="form-control" id="inputCedula" placeholder="Cédula">
    </div>

     <div class="form-group">
      <label for="inputNombres">Nombres</label>
      <input type="text" class="form-control" id="inputNombres" placeholder="Nombres">
    </div>
    
      <div class="form-group col-md-4">
        <label for="inputApellidos">Apellidos</label>
        <input type="text" class="form-control" id="inputApellidos" placeholder="Apellidos">
      </div>

      <div class="form-group col-md-1">
        <label for="inputEdad">Edad</label>
        <input type="text" class="form-control" id="inputEdad" placeholder="Edad">
      </div>

      <div class="form-group col-md-4" placeholder="Fecha Nacimiento">
        <label for="inputFechaN">Fecha de Nacimiento</label>
        <select id="inputFechaN" class="form-control">
          <option selected>Seleccione...</option>
          <option>...</option>
        </select>
      </div>


      <div class="form-group col-md-4" placeholder="Fecha Nacimiento">
        <label for="inputFechaN">Género</label>
        <select id="inputFechaN" class="form-control">
          <option selected>Seleccione...</option>
          <option>...</option>
        </select>
      </div>

  </div> 

   
 
</form>

      </div> <!--aqui termina el form -->
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Teléfonos
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Dirección
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Familiar
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Ubicación 
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Vehículo
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Equipo
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

  </div>



  <div class="tab-pane" id="codigo" role="tabpanel" aria-labelledby="codigo-tab">


<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Registro Código Libra
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
              <table class="table">
  <thead class="thead-dark">               
    <tr>
      <th scope="col">Id Lib</th>
      <th scope="col">Descripcion f</th>
      <th scope="col">Descripción p</th>
      <th scope="col">Siglas</th>
      <th scope="col">Descripcion Aplicativo</th>
      <th scope="col">Acciones</th>
      <!-- <th scope="col">Fecha sol</th>
      <th scope="col">Especialista resp</th>
      <th scope="col">Gerencia</th>
      <th scope="col">Normativo</th>
      <th scope="col">Prioritario</th>
      <th scope="col">Fec Inicio</th>
      <th scope="col">Fec fin real prod</th>
      <th scope="col">N° control de cambio cal</th>
      <th scope="col">Fecha fin real cal</th>
      <th scope="col">N° control de cambio cal</th>
      <th scope="col">Fec suspensión</th>
      <th scope="col">Detalle del seguimiento</th>
      <th scope="col">% avance</th>
      <th scope="col">Fec cierre</th>
      <th scope="col">estado</th>
      <th scope="col">Observaciones</th>       -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
   
  </tbody>
</table>
      </div> <!--Aqui termina la tabla -->
    </div>
  </div> 
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Ubicación Libra
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
    

  </div>



  <div class="tab-pane" id="backlog" role="tabpanel" aria-labelledby="backlog-tab">

         <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Registro Backlog
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
         <table class="table">
  <thead class="thead-dark">               
    <tr>
      <th scope="col">Id Lib</th>
      <th scope="col">Descripcion f</th>
      <th scope="col">Descripción p</th>
      <th scope="col">Siglas</th>
      <th scope="col">Descripcion Aplicativo</th>
      <th scope="col">Acciones</th>
      <!-- <th scope="col">Fecha sol</th>
      <th scope="col">Especialista resp</th>
      <th scope="col">Gerencia</th>
      <th scope="col">Normativo</th>
      <th scope="col">Prioritario</th>
      <th scope="col">Fec Inicio</th>
      <th scope="col">Fec fin real prod</th>
      <th scope="col">N° control de cambio cal</th>
      <th scope="col">Fecha fin real cal</th>
      <th scope="col">N° control de cambio cal</th>
      <th scope="col">Fec suspensión</th>
      <th scope="col">Detalle del seguimiento</th>
      <th scope="col">% avance</th>
      <th scope="col">Fec cierre</th>
      <th scope="col">estado</th>
      <th scope="col">Observaciones</th>       -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
   
  </tbody>
</table>
      </div> <!--aqui termina la tabla del backlog -->
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Solicitudes
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>  
</div>
  </div>
</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

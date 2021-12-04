
<!--PLANTILLA-->
@extends('plantilla.plantilla')

<!--TITULO MIGAJAS DE PAN-->
@section('title-bread')
    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Programas</h4>
@endsection

<!--MIGAJAS DE PAN-->
@section('bread')

<li class="breadcrumb-item">
    <a href="{{url('programas')}}">Programas</a>
</li>

@endsection

<!--CONTENIDO-->
@section('contenido')



<!--------------------------------------------->
<!---MOSTRARA AL COORDINADOR Y ADMINISTRADOR TODOS LOS PROGRAMAS AL CONTRARIO SOLO ALGUNOS-->
<!--------------------------------------------->
@if( Auth::user()->rol()->first()->tipoRol == 'Administrador' ||  Auth::user()->rol()->first()->tipoRol == 'Coordinador' )

<!--------------------------------------------->
<!---LLAMA MODAL PARA CREAR-->
<!--------------------------------------------->
<button type="button" class="btn btn-primary btn-circle"  data-toggle="modal" data-target="#CreatePrograma">
    <i class="fas fa-plus"></i>
</button>



<!----------------------------------------------------------->
<!--CARD FICHAS-->
<!----------------------------------------------------------->


<div class="row">
    <div class="card-columns">

        @foreach ($programas as $programa)

        <div class="card">

            <div class="card-body">

                <h4 class="card-title">{{  $programa->Nombre  }}</h4>
                <p class="card-text">{{  $programa->Nivel  }}</p>
                <p>{{$programa->centro()->Nombre}}</p>

                <p class="card-text">
                    @if($programa->Estado == 'Activo')
                        <span class="badge badge-pill badge-success">{{  $programa->Estado  }}</span>
                    @elseif($programa->Estado == 'Inactivo')
                        <span class="badge badge-pill badge-secondary">{{  $programa->Estado  }}</span>
                    @else
                        <span class="badge badge-pill badge-info">{{  $programa->Estado  }}</span>
                    @endif
                </p>

            </div>

            <div class="card-footer">
                <div class="row">

                    <!--------------------------------------------->
                    <!---URL PARA VER-->
                    <a href="{{  url('programas/'.$programa->IdPrograma ) }}">
                    <button type="button" class="btn btn-primary btn-circle">
                        <i class="fas fa-info"></i>
                    </button>
                    </a>

                    <!--------------------------------------------->
                    <!---LLAMA MODAL PARA EDITAR-->
                    <!--------------------------------------------->
                    <button type="button" class="btn btn-warning btn-circle"  data-toggle="modal" data-target="#EditPrograma{{$programa->IdPrograma}}">
                        <i class="fas fa-edit"></i>
                    </button>


                     <!--------------------------------------------->
                    <!---LLAMA MODAL PARA ELIMINAR-->
                    <!--------------------------------------------->
                    <button type="button" class="btn btn-danger btn-circle"  data-toggle="modal" data-target="#DeletePrograma{{$programa->IdPrograma}}">
                        <i class=" fas fa-trash-alt"></i>
                    </button>

                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
<!----------------------------------------------------------->
<!--END CARD FICHAS-->
<!----------------------------------------------------------->

@else





@if(    Auth::user()->instructor() != null ||   Auth::user()->instructor() != '' )
@if(  Auth::user()->instructor()->programas()  != 'null' || Auth::user()->instructor()->programas()  != '' )

<!----------------------------------------------------------->
<!--CARD FICHAS-->
<!----------------------------------------------------------->


<div class="row">
    <div class="card-columns">

        @foreach (  Auth::user()->instructor()->programas() as $programa)

        <div class="card">

            <div class="card-body">

                <h4 class="card-title">{{  $programa->Nombre  }}</h4>
                <p class="card-text">{{  $programa->Nivel  }}</p>
                <p>{{  $programa->centro()->Nombre  }}</p>

                <p class="card-text">
                    @if($programa->Estado == 'Activo')
                        <span class="badge badge-pill badge-success">{{  $programa->Estado  }}</span>
                    @elseif($programa->Estado == 'Inactivo')
                        <span class="badge badge-pill badge-secondary">{{  $programa->Estado  }}</span>
                    @else
                        <span class="badge badge-pill badge-info">{{  $programa->Estado  }}</span>
                    @endif
                </p>

            </div>

            <div class="card-footer">
                <div class="row">

                    <!--------------------------------------------->
                    <!---URL PARA VER-->
                    <a href="{{  url('programas/'.$programa->IdPrograma ) }}">
                    <button type="button" class="btn btn-primary btn-circle">
                        <i class="fas fa-info"></i>
                    </button>
                    </a>

                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
<!----------------------------------------------------------->
<!--END CARD FICHAS-->
<!----------------------------------------------------------->




@else
<h1>No tienes fichas asignadas</h1>
@endif
@endif


@endif


<!--MODALES-->
@include('plantilla.modales.programa')


@endsection






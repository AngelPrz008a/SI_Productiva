<!--PLANTILLA-->
@extends('plantilla.plantilla')

<!--TITULO MIGAJAS DE PAN-->
@section('title-bread')
    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{  $aprendiz->usuarios()->Nombre  }}  {{  $aprendiz->usuarios()->Apellido  }}  </h4>
@endsection

<!--MIGAJAS DE PAN-->
@section('bread')
<li class="breadcrumb-item"><a href="{{  url('fichas')  }}">Fichas</a>
</li>
<li class="breadcrumb-item"><a href="{{  url('fichas/'.$aprendiz->fichas()->IdFicha )  }}">  {{  $aprendiz->fichas()->NumeroFicha  }}  </a>
</li>
<li class="breadcrumb-item"><a href="{{  url('fichas/'.$aprendiz->fichas()->IdFicha.'/aprendices' )  }}"> Aprendices  </a>
</li>
<li class="breadcrumb-item"><a href="{{  url('fichas/'.$aprendiz->fichas()->IdFicha.'/aprendices/'.$aprendiz->id )  }}"> {{  $aprendiz->usuarios()->Nombre  }}  {{  $aprendiz->usuarios()->Apellido  }}  </a>
</li>
@endsection

<!--CONTENIDO-->
@section('contenido')


<!--------------------------------------------------------------->
<!---Card-->
<!--------------------------------------------------------------->
<div class="card">
    <div class="card-body">

        <div class="col-12">

            <!--NOMBRE, APELLIDO-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{ $aprendiz->usuarios()->Nombre }}"  name="nombre" class="form-control"
                        placeholder="Nombre" data-toggle="tooltip" title="Nombre" readonly>
                        @error('nombre')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{ $aprendiz->usuarios()->Apellido  }}"  name="apellido" class="form-control"
                        placeholder="Apellido" data-toggle="tooltip" title="Apellido" readonly>
                        @error('apellido')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>


            <!--FECHA NACIMIENTO, GENERO-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="date" value="{{ $aprendiz->usuarios()->FechaNacimiento  }}"  name="fechaNacimiento" class="form-control"
                        placeholder="Fecha Nacimiento" data-toggle="tooltip" title="Fecha Nacimiento" readonly>
                        @error('fechaNacimiento')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="genero" class="form-control" data-toggle="tooltip" title="Genero">
                            <option value="">Seleccione...</option>
                            <option {{ $aprendiz->usuarios()->Genero == "F" ? 'selected' : ''}}>F</option>
                            <option {{ $aprendiz->usuarios()->Genero =="M" ? 'selected' : ''}}>M</option>
                            </select>
                        @error('genero')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>

            <!--DOCUMENTO: TIPO, NUMERO-->
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <select id="" name="tipoD" class="form-control"  data-toggle="tooltip" title="Tipo Documento">
                            <option value="">Seleccione...</option>
                            <option {{ $aprendiz->usuarios()->TipoDocumento == "CC" ? 'selected' : ''}}>CC</option>
                            <option {{ $aprendiz->usuarios()->TipoDocumento == "TI" ? 'selected' : ''}}>TI</option>
                            <option {{ $aprendiz->usuarios()->TipoDocumento == "CE" ? 'selected' : ''}}>CE</option>
                            <option {{ $aprendiz->usuarios()->TipoDocumento == "NIP" ? 'selected' : ''}}>NIP</option>
                            <option {{ $aprendiz->usuarios()->TipoDocumento == "NIT" ? 'selected' : ''}}>NIT</option>
                            <option {{ $aprendiz->usuarios()->TipoDocumento == "PAP" ? 'selected' : ''}}>PAP</option>
                        </select>
                        @error('tipoD')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" value="{{  $aprendiz->usuarios()->NumeroIdentificacion  }}"  name="numeroD" class="form-control"
                        placeholder="Número Documento" data-toggle="tooltip" title="Número Documento" readonly>
                        @error('numeroD')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>

            <!--EMAIL: PERSONAL, SENA-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{  $aprendiz->usuarios()->EmailPersonal }}"  name="emailP" class="form-control"
                        placeholder="Email Personal" data-toggle="tooltip" title="Email Personal" readonly>
                        @error('emailP')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{  $aprendiz->usuarios()->EmailSena }}"  name="emailS" class="form-control"
                        placeholder="Email Sena" data-toggle="tooltip" title="Email Sena" readonly>
                        @error('emailS')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>


                <!--NUMERO: CELULAR, TELEFONO-->
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{  $aprendiz->usuarios()->NumeroCelular }}"  name="celular" class="form-control"
                        placeholder="Celular" data-toggle="tooltip" title="Celular" readonly>
                        @error('celular')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{  $aprendiz->usuarios()->NumeroFijo }}"  name="telefono" class="form-control"
                        placeholder="Telefono" data-toggle="tooltip" title="Telefono" readonly>
                        @error('telefono')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>


            <!--DIRECCION  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" value="{{  $aprendiz->usuarios()->Direccion }}"  name="direccion" class="form-control"
                        placeholder="Dirección" data-toggle="tooltip" title="Dirección" readonly>
                        @error('direccion')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>


                <!--ESTADO, ROL, FICHA-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                       <select name="estado" class="form-control"
                       data-toggle="tooltip" title="Estado">
                            <option value="">Seleccione</option>
                            <option {{  $aprendiz->usuarios()->Estado == 'Activo' ? 'selected' : ''  }} value="Activo">Activo</option>
                            <option {{  $aprendiz->usuarios()->Estado == 'Inactivo' ? 'selected' : ''  }}  value="Inactivo">Inactivo</option>
                       </select>
                        @error('estado')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-md-0">
                    <div class="form-group">
                        <input type="text" value="Aprendiz"  name="rol" class="form-control"
                        placeholder="Rol" data-toggle="tooltip" title="Rol" hidden>
                        @error('rol')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-md-0">
                    <div class="form-group">
                        <input type="text" value="{{  $aprendiz->fichas()->IdFicha  }}"  name="ficha" class="form-control"
                        placeholder="Ficha" data-toggle="tooltip" title="Ficha" hidden>
                        @error('ficha')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <!--------------------------------------------->
            <!---LLAMA MODAL PARA EDITAR-->
            <!--------------------------------------------->
            <button type="button" class="btn btn-warning btn-circle"  data-toggle="modal" data-target="#EditAprendiz{{$aprendiz->id}}">
                <i class="far fa-edit"></i>
            </button>

        </div>


    </div>
</div>
<!--------------------------------------------------------------->
<!---END Card-->
<!--------------------------------------------------------------->



<!--------------------------------------------------------------->
<!---Card-->
<!--------------------------------------------------------------->
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">

                <h3>Instructor a Cargo</h3>

                @foreach ( $aprendiz->i()->usuarios() as $usuario)
                    <a href="{{  url('instructores/'.$aprendiz->i()->IdInstructor )  }}">{{ $usuario->Nombre }} {{ $usuario->Apellido }}</a>
                @endforeach

                <h3>Ficha asignada</h3>

                <a href="{{  url('fichas/'. $aprendiz->fichas()->IdFicha )  }}">{{  $aprendiz->fichas()->NumeroFicha  }}</a>

            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <h3>Empresa</h3>

                @if( $aprendiz->empresas() != null || $aprendiz->empresas() != '' )
                    {{  $aprendiz->empresas()->Nombre  }}
                @else
                    {{  'Sin Empresa'  }}
                @endif

            </div>
        </div>
    </div>
</div>
<!--------------------------------------------------------------->
<!---END Card-->
<!--------------------------------------------------------------->


@include('plantilla.modales.aprendiz')

@endsection

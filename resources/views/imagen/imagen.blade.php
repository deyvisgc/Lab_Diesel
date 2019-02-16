@extends('layouts.admin')
@section('contenido')
    <button type="button" class="btn btn-outline-info btn-fw" data-toggle="popover" title="Informacion" data-content="Porfavor rellene todos los campos y valide los datos que sean reales al terminar el contrato ">Informacion del Contrato</button>
    <button type="button"  data-toggle="modal" data-target="#mlaboratorios"   style="margin-left: 10px;" class="btn btn-inverse-danger" id="cancelar_Contrato"><i class="fas fa-camera fa-lg text-white"></i> Laboratorio</button>
    <button type="button"  style="margin-left: 10px;" data-toggle="modal" data-target="#mMecanica"  class="btn btn-inverse-warning btn-fw" id="Contrato"> <i class="fas fa-camera fa-lg  text-white" data-toggle="modal" data-target="#modal-register" ></i> Mecanica</button>
    <button type="button"  style="margin-left: 10px;" data-toggle="modal" data-target="#mCarwash" class="btn btn-inverse-success" id="Contrato"> <i class="fas fa-camera fa-lg  text-white"  data-toggle="modal" data-target="#modal-register" ></i> Car Wash</button><br><br>

    <div class="container">

            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                            Laboratorio DIESEL</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Mecanica General</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Car Wash</a>

                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p class="card-description">
                            <div class="card-body">
                                <h2> <i class="fas fa-camera fa-lg  text-danger" ></i> Laboratorio Diesel</h2>
                        <p class="card-description">

                        </p><br>

                        <div class="table-responsive">
                            <table class="table table-striped" id="tb_imagen1" >
                                <thead>
                                <tr>

                                    <th >IMAGEN</th>
                                    <th>TIPO DE SERVICIO</th>
                                    <th>ESTADO</th>
                                    <th>ACTUALIZAR</th>
                                    <th>ELIMINAR</th>
                                    <th>CAMBIAR ESTADO</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    </div>

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="card-description">
                                <div class="card-body">
                                    <h2> <i class="fas fa-camera-retro fa-lg  text-danger" ></i> Mecanica General</h2>
                            <p class="card-description">

                            </p><br>

                            <div class="table-responsive">
                                <table class="table table-striped" id="tb_imagen2" >
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th id="imagen">IMAGEN</th>
                                        <th>TIPO DE SERVICIO</th>
                                        <th>ESTADO</th>
                                        <th>Cambiar estado</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="card-description">
                                <div class="card-body">
                                    <h2> <i class="fas fa-camera fa-lg  text-danger" ></i> Car Wash</h2>
                            <p class="card-description">

                            </p><br>

                            <div class="table-responsive">
                                <table class="table table-striped" id="tb_imagen3" >
                                    <thead>
                                    <tr>
                                        <th>IMAGEN</th>
                                        <th>TIPO DE SERVICIO</th>
                                        <th>ESTADO</th>
                                        <th>Cambiar estado</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

    </div>

    <!-- Modal  registro-->
    <div class="modal fade" id="mlaboratorios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                 <h4 class="modal-title" style="padding-left:50px; ">Registrar Imagen de Laboratorio</h4>
                </div>
                <div class="modal-body">
                    <form id="frmImagen" class="form-horizontal" role="form" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="file-upload" class="subir">
                            <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                        </label>
                        <input id="file-upload" name="imagen" onchange='cambiar()' type="file" style='display: none;'/>
                        <div id="info"></div><br>
                         <div class="row">

                             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                 <div class="form-group">
                                     <label >Estado</label>
                                     <input id="estado" type="text"  class="form-control" readonly name="estado" value="Activo"  >
                                 </div>
                             </div><br>
                             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                 <div class="form-group">
                                     <label >Tipo Servicio</label>
                                     <select class="form-control" id="tipo_Servicio" name="tipo_Servicio"   style="width:230px;height: 48px">
                                         @foreach($tiposer as $tipo)
                                             <option value="{{$tipo->id_tiposervicio}}">{{$tipo->nombre_servicio}}</option>
                                         @endforeach

                                     </select>
                                     <p class="errorServicio text-danger hidden"></p>

                                 </div>
                             </div>
                             <div class="modal-footer">
                                 <button style="margin-left: 200px" type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                 <button id="btnGuardarImagen" type="button" class="btn btn-outline-success">Guardar</button>
                             </div>
                         </div>

                    </form>
                        </div>

                    </form>
                </div>


            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal  update-->
    <div class="modal fade" id="mupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" style="padding-left:50px; ">Registrar Imagen de Laboratorio</h4>
                </div>
                <div class="modal-body">
                    <form id="frmImagen" class="form-horizontal" role="form" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="file-upload" class="subir">
                            <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                        </label>
                        <input id="file-upload imagen" class="imagen" name="imagen" onchange='cambiar()' type="file" style='display: none;'/>
                        <div id="info"></div><br>
                        <div class="row">

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Estado</label>
                                    <input id="estado1" type="text"  class="form-control" readonly name="estado"  >
                                </div>
                            </div><br>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Tipo Servicio</label>
                                    <select class="form-control" id="tipo_Servicio" name="tipo_Servicio"   style="width:230px;height: 48px">

                                    </select>
                                    <p class="errorServicio text-danger hidden"></p>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button style="margin-left: 200px" type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                <button id="btnupdateImagen" type="button" class="btn btn-outline-success">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>

                </form>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal  registro 2-->
    <div class="modal fade" id="mMecanica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" style="padding-left:50px; ">Registrar Imagen de Laboratorio</h4>
                </div>
                <div class="modal-body">
                    <form id="frmImagen" class="form-horizontal" role="form" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="file-upload" class="subir">
                            <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                        </label>
                        <input id="file-upload" name="imagen" onchange='cambiar()' type="file" style='display: none;'/>
                        <div id="info"></div><br>
                        <div class="row">

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Estado</label>
                                    <input id="estado" type="text"  class="form-control" readonly name="estado" value="Activo"  >
                                </div>
                            </div><br>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Tipo Servicio</label>
                                    <select class="form-control" id="tipo_Servicio" name="tipo_Servicio"   style="width:230px;height: 48px">
                                        @foreach($tiposer as $tipo)
                                            <option value="{{$tipo->id_tiposervicio}}">{{$tipo->nombre_servicio}}</option>
                                        @endforeach

                                    </select>
                                    <p class="errorServicio text-danger hidden"></p>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button style="margin-left: 200px" type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                <button id="btnGuardarImagen" type="button" class="btn btn-outline-success">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>

                </form>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    <div class="modal fade" id="mCarwash" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" style="padding-left:50px; ">Registrar Imagen de Laboratorio</h4>
                </div>
                <div class="modal-body">
                    <form id="frmImagen" class="form-horizontal" role="form" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="file-upload" class="subir">
                            <i class="fas fa-cloud-upload-alt"></i> Subir archivo
                        </label>
                        <input id="file-upload" name="imagen" onchange='cambiar()' type="file" style='display: none;'/>
                        <div id="info"></div><br>
                        <div class="row">

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Estado</label>
                                    <input id="estado" type="text"  class="form-control" readonly name="estado" value="Activo"  >
                                </div>
                            </div><br>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Tipo Servicio</label>
                                    <select class="form-control" id="tipo_Servicio" name="tipo_Servicio"   style="width:230px;height: 48px">
                                        @foreach($tiposer as $tipo)
                                            <option value="{{$tipo->id_tiposervicio}}">{{$tipo->nombre_servicio}}</option>
                                        @endforeach

                                    </select>
                                    <p class="errorServicio text-danger hidden"></p>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button style="margin-left: 200px" type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                <button id="btnGuardarImagen" type="button" class="btn btn-outline-success">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>

                </form>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->



@endsection

@section('script')

    <script>
        var tabla;
        var tabla1;
        var tabla2;
        var pdrs;
        $(document).ready( function () {
          tabla =   $('#tb_imagen1').DataTable({

              stateSave: true,
              responsive: true,
              processing: false,
              serverSide : true,
              language: {
                  "sProcessing":     "Procesando...",
                  "sLengthMenu":     "Mostrar _MENU_ registros",
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTable":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                  "sInfoEmpty":      "Ningún dato disponible en esta tabla",
                  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix":    "",
                  "sSearch":         "Buscar:",
                  "sUrl":            "",
                  "sInfoThousands":  ",",
                  "sLoadingRecords": "Cargando...",
                  "oPaginate": {
                      "sFirst":    "Primero",
                      "sLast":     "Último",
                      "sNext":     "Siguiente",
                      "sPrevious": "Anterior"
                  },
                  "oAria": {
                      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                  },
              },
              destroy: true,
              ajax: '{{url('Registro')}}',
              columns: [
                  {data: 'imagen', name: 'imagen', orderable: true, searchable: true},
                  {data: 'nombre_servicio',name:'nombre_servicio'},
                  {data: 'img_estado', name:'img_estado'},
                  {"mRender": function ( data, type, row ) {
                          return '<a  onclick="Actualizar('+row.id_imagen+')" ><button type="button" class="btn btn-outline-info tex "><i class="fa fa-edit fa-lg  text-white" ></button></a>';}
                  },
                  {"mRender": function ( data, type, row ) {
                          return '<a onclick="Eliminar('+row.id_imagen+')" ><button type="button" class="btn btn-outline-danger"><i class="fa fa-edit fa-lg  text-white" ></button></a>';}
                  },
                  {"mRender": function ( data, type, row ) {
                          return '<a onclick="Cambiar('+row.id_imagen+')" ><button type="button" class="btn btn-outline-info"><i class="fa fa-edit fa-lg  text-white" ></button></a>';}
                  },
              ]





          });

        $(document).ready( function () {
            tabla1=   $('#tb_imagen2').DataTable();
        } );
        $(document).ready( function () {
            tabla2=   $('#tb_imagen3').DataTable();
        } );
        } );
        function cambiar(){
            pdrs = document.getElementById('file-upload').files[0].name;
            document.getElementById('info').innerHTML = pdrs;
        }
    $('#btnGuardarImagen').click(guardarImagen);
    $('#btnupdateImagen').click(updateimagen);
    function guardarImagen(e){
        e.preventDefault();
        var formData = new FormData(document.getElementById("frmImagen"));
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'{{url('Registro')}}',
            dataType:'json',
            type:'post',
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function (response) {
                $('.errorImagen').addClass('hidden');
                $('.errorServicio').addClass('hidden');

                if(response.errors) {
                if (response.errors.imagen) {
                    $('.errorImagen').removeClass('hidden');
                    $('.errorImagen').text(response.errors.imagen);
                }
                if (response.errors.tipo_Servicio) {
                    $('.errorServicio').removeClass('hidden');
                    $('.errorServicio').text(response.errors.tipo_Servicio);
                }
                }
                if(response.success==true){

                    $('#mlaboratorios').modal('hide');


                    $('#tipo_Servicio').val("");
                    $('#file-upload imagen').val("");
                    $("#info").html("");



                    swal({
                        position: 'center',
                        type: 'success',
                        title: 'Registro Exitoso',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    tabla.ajax.reload();
                }
            },
            error: function(){
                alert("error in ajax form submission");
            }
        });

    }


        function Actualizar(id_imagen) {
            $('#mupdate').modal('show');
            if (id_imagen){
               $ .ajax({
                   url:'{{url('actualizar')}}/'+id_imagen,
                   type:'get',
                   dataType: 'json',
                   success:function (response) {
                   $.each(response,function (index ,val) {
                       alert(val.img_ruta);
                       $('#estado1').val(val.img_estado);

                       $('.imagen').attr('src', '{{asset('Imagenes/laboratorios/')}}');




                   })

                   }

                })
            }
            
        }
        function updateimagen() {
            
        }

        function Eliminar(id_imagen) {
        if (id_imagen){

            Swal.fire({
                title: 'Estás seguro?',
                text: "No podrás revertir esto.!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'}).
            then((result) => {
                if (result.value) {
                    $.ajax({
                        url:'{{url('eliminar')}}/'+id_imagen,
                        datatype: 'json',
                        type: 'get',
                        success: function (data) {
                            if (data.success==true){
                                tabla.ajax.reload();
                                swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'Eliminado Correctamente',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }

                        },
                        error: function () {
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Algo salió mal!',

                            });
                        }
                    });
                }
                else{
                    Swal.fire('eliminacion cancelada')
                }
            });
        }

        }

    </script>

    @endsection

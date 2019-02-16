@extends('layouts.admin')
@section('contenido')


    <button type="button"  data-toggle="modal" data-target="#mlaboratorios"   style="margin-left: 10px;" class="btn btn-inverse-success" id="cancelar_Contrato"><i class="fas fa-camera fa-lg text-white"></i> Nuevo Servicio</button><br><br>


    <div class="container">

        <div class="col-xs-12 ">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tipo Servicio Activos</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tipo Servicio Inactivos</a>

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
                        <table class="table table-striped" id="tb_Activo" >
                            <thead>
                            <tr>
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
                        <table class="table table-striped" id="tb_Inactivo" >
                            <thead>
                            <tr>

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
        </div>

    </div>

    <!-- Modal  registro-->
    <div class="modal fade" id="mlaboratorios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" style="padding-left:50px; ">Registrar Tipo Servicio</h4>
                </div>
                <div class="modal-body">
                    <form id="frmServicio" class="form-horizontal" role="form" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label >Tipo Servicio</label>
                                        <input id="estado" type="text"  class="form-control"  name="tipo_Servicio"  >
                                        <p class="errorNom text-danger hidden"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Estado</label>
                                    <input id="estado" type="text"  class="form-control" readonly name="estado" value="Activo"  >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button style="margin-left: 200px" type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                <button id="RegisServicio" type="button" class="btn btn-outline-success">Guardar</button>
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
                    <h4 class="modal-title" style="padding-left:50px; ">Actualizar tipo Laboratorio</h4>
                </div>
                <div class="modal-body">
                    <form id="FrmServicio" class="form-horizontal" role="form" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label >Tipo Servicio</label>
                                        <input id="servicio" type="text"  class="form-control"  name="tipo_Servicio"  >
                                        <input id="id_tiposervicio" hidden type="text"  class="form-control"  name="id_tiposervicio"  >

                                        <p class="errorNom text-danger hidden"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Estado</label>
                                    <input id="estado_servicio" type="text"  class="form-control" readonly name="estado" value="Activo"  >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button style="margin-left: 200px" type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                <button id="updateServicio" type="button" class="btn btn-outline-success">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>

                </form>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="DeleteActi" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                    <button type="button" id="eliminar" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        var tabla;
        var tabla1;

        $(document).ready( function () {
            tabla =   $('#tb_Activo').DataTable({

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
                ajax: '{{url('servicio')}}',
                columns: [
                    {data: 'nombre_servicio', name: 'nombre_servicio'},
                    {data: 'estado_servicio',name:'estado_servicio'},

                    {"mRender": function ( data, type, row ) {
                            return '<a><button type="button" class="btn btn-outline-info tex btnEdit" data-edit="/servicio/'+row.id_tiposervicio+'/edit"><i class="fa fa-edit fa-lg  text-white" ></button></a>';}
                    },

                    {"mRender": function ( data, type, row ) {
                            return '<a onclick="Eliminar('+row.id_tiposervicio+')"><button type="button" class="btn btn-outline-danger"><i class="fa fa-edit fa-lg  text-white"></button></a>';}
                    },

                    {"mRender": function ( data, type, row ) {
                            return '<a onclick="Cambiar('+row.id_tiposervicio+')" ><button type="button" class="btn btn-outline-info"><i class="fa fa-edit fa-lg  text-white" ></button></a>';}
                    },
                ]





            });
            tabla1 =   $('#tb_Inactivo').DataTable({

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
                ajax: '{{url('servicioInactivo')}}',
                columns: [
                    {data: 'nombre_servicio', name: 'nombre_servicio'},
                    {data: 'estado_servicio',name:'estado_servicio'},

                    {"mRender": function ( data, type, row ) {
                            return '<a><button type="button" class="btn btn-outline-info tex btnEdit" data-edit="/servicio/'+row.id_tiposervicio+'/edit"><i class="fa fa-edit fa-lg  text-white" ></button></a>';}
                    },

                    {"mRender": function ( data, type, row ) {
                            return '<a onclick="Eliminar('+row.id_tiposervicio+')"><button type="button" class="btn btn-outline-danger"><i class="fa fa-edit fa-lg  text-white"></button></a>';}
                    },

                    {"mRender": function ( data, type, row ) {
                            return ' <li class="nav-item dropdown d-none d-lg-flex">\n' +
                                '            <div class="nav-link">\n' +
                                '              <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">Opciones</span>\n' +
                                '              <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">\n' +
                                '                <a class="dropdown-item font-weight-medium" href="#">\n' +
                                '                  Activo\n' +
                                '                </a>\n' +
                                '                <div class="dropdown-divider"></div>\n' +
                                '                <a class="dropdown-item font-weight-medium" href="#">\n' +
                                '                  Inactivo\n' +
                                '                </a>\n'
                                '          </li>';}
                    },
                ]





            });
        });
        $('#RegisServicio').click(RegistrarServicio);
        $('#updateServicio').click(updateServicio);

        function RegistrarServicio(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault;
            var frm=$('#frmServicio');
            $.ajax({
                url:'{{url('servicio')}}',
                dataType:'json',
                type:'post',
                data:frm.serialize(),
                success:function (response) {
                    $('.errorNom').addClass('hidden');
                    if(response.errors) {
                        if (response.errors.tipo_Servicio) {
                            $('.errorNom').removeClass('hidden');
                            $('.errorNom').text(response.errors.tipo_Servicio);
                        }
                    }
                    if(response.success==true){
                        $('#mlaboratorios').modal('hide');
                        frm.trigger('reset');
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Registro Exitoso',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        tabla.ajax.reload();
                        tabla1.ajax.reload();
                    }
                },
            })


        }
        $("#tb_Activo,#tb_Inactivo").on('click','.btnEdit[data-edit]',function (e) {
            e.preventDefault();
            var url = $(this).data('edit');
            $.ajax({
                url : url,
                type : 'GET',
                datatype : 'json',
                success:function(data){
                    $('#id_tiposervicio').val(data.id_tiposervicio);
                    $('#servicio').val(data.nombre_servicio);
                    $('#estado_servicio').val(data.estado_servicio);
                    $('.edit_errorName').addClass('hidden');
                    $('#esta').val(data.cate_estado);
                    $('#mupdate').modal('show');
                }
            });
            
        });

        function updateServicio(e) {

            e.preventDefault();
            var url="servicio/"+$('#id_tiposervicio').val();
            var frm=$('#FrmServicio');
            $.ajax({
                type:'PUT',
                url:url,
                dataType:'json',
                data : frm.serialize(),
                success:function (data) {
                    if (data.errors) {
                        if (data.errors.servicio) {
                            $('.errorNom').removeClass('hidden');
                            $('.errorNom').text(data.errors.servicio);
                        }

                    }

                    if (data.success == true) {
                        // console.log(data);
                        $('.errorNom').addClass('hidden');
                        frm.trigger('reset');
                        $('#mupdate').modal('hide');
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Registro Exitoso',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        tabla.ajax.reload(null, false);
                        tabla1.ajax.reload();
                    }
                },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('porfavor buelva a cargar su formulario');
                    }
            })
        }
        function Eliminar(id_tiposervicio) {
            if (id_tiposervicio){
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
                            url: '{{url('delete')}}/' + id_tiposervicio,
                            datatype: 'json',
                            type: 'get',
                            success: function (data) {
                                tabla.ajax.reload();
                                tabla1.ajax.reload();
                                swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'Eliminado Correctamente',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
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
                })

            }

        }

    </script>
    @endsection

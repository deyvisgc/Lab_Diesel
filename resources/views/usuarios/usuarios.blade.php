@extends('layouts.admin')
@section('contenido')
    <button type="button"  data-toggle="modal" data-target="#mUsuario"   style="margin-left: 10px;" class="btn btn-inverse-info" id="usuarios"><i class="fas fa-user fa-lg text-white"></i> Nuevo Usuario</button><br><br>


    <div class="container">

        <div class="col-xs-12 ">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lista de Usuarios</a>


                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p class="card-description">
                        <div class="card-body">
                            <h2> <i class="fas fa-user fa-lg  text-info" ></i> Usuarios</h2>
                    <p class="card-description">

                    </p><br>

                    <div class="table-responsive">
                        <table class="table table-striped" id="tb_user" >
                            <thead>
                            <tr>

                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
</div>
    </div>





    <div class="modal fade" id="mUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" style="padding-left:50px; ">Registrar Imagen de Laboratorio</h4>
                </div>
                <div class="modal-body">
                    <form id="frmUsuario" class="form-horizontal" role="form" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Usuario</label>
                                    <input id="username" type="text"  class="form-control"  name="username">
                                    <p class="errorUser text-danger hidden"></p>
                                </div>
                            </div><br>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Correo</label>
                                    <input id="correo" type="email"  class="form-control"  name="email">
                                    <p class="errorCorreo text-danger hidden"></p>
                                </div>
                            </div><br>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Password</label>
                                    <input id="password" type="password"  class="form-control"  name="password">
                                    <p class="errorPass text-danger hidden"></p>
                                </div>
                            </div><br>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label >Confirmar Pasword</label>
                                    <input id="password1" type="password"  class="form-control"  name="password_confirmation">
                                    <p class="errorPass text-danger hidden"></p>
                                </div>
                            </div><br>

                                <label for="file-upload" class="subir" style="margin-left:175px;">
                                    <i class="fas fa-cloud-upload-alt "></i> Subir Foto
                                </label><br>
                                <input id="file-upload" name="imagen" onchange='cambiar()' type="file" style='display: none;'/>
                            <p class="errorImagen text-danger hidden"></p>
                                <div id="info"></div><br><br>



                            <div class="modal-footer">
                                <button style="margin-left: 200px" type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                <button id="RegisUser" type="button" class="btn btn-outline-success">Guardar</button>
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

      @endsection
@section('script')
    <script>

        var pdrs;
        var tabla;
        function cambiar(){
            pdrs = document.getElementById('file-upload').files[0].name;
            document.getElementById('info').innerHTML = pdrs;
        }

        $(document).ready( function () {
            tabla = $('#tb_user').DataTable({

                stateSave: true,
                responsive: true,
                processing: false,
                serverSide: true,
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Ningún dato disponible en esta tabla",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                },
                "order": [[ 1, "desc" ]],
                ajax: '{{url('usuario')}}',
                columns: [
                    {data:'username',name:'username'},
                    {data:'email',name:'email'},
                    {data: 'imagen', name: 'imagen', orderable: true, searchable: true},
                    {data: 'user_estado', name: 'user_estado'},
                    {
                        "mRender": function (data, type, row) {
                            return '<a  onclick="Actualizar('+row.id_imagen+')"><button type="button" class="btn btn-outline-info tex "><i class="fa fa-edit fa-lg  text-white" ></button></a>';
                        }
                    },
                    {
                        "mRender": function (data, type, row) {
                            return '<a onclick="Eliminar('+row.id_imagen+')"><button type="button" class="btn btn-outline-danger"><i class="fa fa-edit fa-lg  text-white" ></button></a>';
                        }
                    },
                ]


            });
        });


        $("#RegisUser").click(registrar);

        function registrar(e){
            e.preventDefault();
            var formData = new FormData(document.getElementById("frmUsuario"));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'{{url('usuario')}}',
                dataType:'json',
                type:'post',
                data:formData,
                cache: false,
                contentType: false,
                processData: false,
                success:function (response) {
                    $('.errorUser').addClass('hidden');
                    $('.errorCorreo').addClass('hidden');
                    $('.errorPass').addClass('hidden');
                    $('.errorImagen').addClass('hidden');

                    if(response.errors) {
                        if (response.errors.username) {
                            $('.errorUser').removeClass('hidden');
                            $('.errorUser').text(response.errors.username);
                        }
                        if (response.errors.email) {
                            $('.errorCorreo').removeClass('hidden');
                            $('.errorCorreo').text(response.errors.email);
                        }

                        if (response.errors.password) {
                            $('.errorPass').removeClass('hidden');
                            $('.errorPass').text(response.errors.password);
                        }

                        if (response.errors.imagen) {
                            $('.errorImagen').removeClass('hidden');
                            $('.errorImagen').text(response.errors.imagen);
                        }
                    }
                    if(response.success==true){
                        borrarcampos();
                        $('#mUsuario').modal('hide');
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
        function borrarcampos() {
            $("#username").val("");
            $("#correo").val("");
            $("#password").val("");
            $("#password-confirm").val("");
            $("#file-upload").val("");
            $("#info").html("");

        }
    </script>
    @endsection

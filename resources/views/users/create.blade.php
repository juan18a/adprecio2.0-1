@extends('layouts.layout_dashboard')

@section('content')


             <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Usuarios</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Crear Usuario</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


         <div class="card">
                                                    <div class="card-header">
                                                        <strong>Formulario:</strong> Usuario
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Usuario</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Usuario" class="form-control"><small class="form-text text-muted">Ingrese nombre del Usuario</small></div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                                                <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Email" class="form-control"><small class="help-block form-text">Ingresa tu email</small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                                                <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control"><small class="help-block form-text">Ingresa tu password</small></div>
                                                            </div>
                                                            
                                                                      
                                                      
                                                               
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Guardar
                                                        </button>
                                                        <!--
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Limpiar
                                                        </button>-->
                                                    </div>
        </div>


@endsection
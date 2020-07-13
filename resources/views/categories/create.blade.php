@extends('layouts.layout_dashboard')

@section('content')


             <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Categorias</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Crear Categoria</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


             @if ($errors->any())
                           <div class="alert alert-danger">
                             <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div><br />
             @endif


         <div class="card">
                            <div class="card-header">
                             <strong>Formulario:</strong> Categoria
                 </div>
                        <div class="card-body card-block">
                                  
                                  <?php 

                                   ?>
                    

  <form  action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        
                   <div class="row form-group">
                                     @csrf
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Categoria</label></div>
                        <div class="col-12 col-md-9">

                             <input type="text" id="text-input" name="categoria" autocomplete="off" placeholder="Categoria" class="form-control">

                             <small class="form-text text-muted">Ingrese nombre de la Categoria</small>
                        
                        </div>
                                
                    </div>
                                                                                            
                                                               
                                                      
                                                               
                                                  
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Guardar
                                                        </button>
                                                        <!--
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Limpiar
                                                        </button>-->

                                              </form>
                                                    </div>
        </div>


@endsection
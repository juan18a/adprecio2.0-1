@extends('layouts.layout_dashboard')

@section('content')


             <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Productos</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Crear Producto</li>
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
                                                        <strong>Formulario:</strong> Producto
                                                    </div>
                                                    <div class="card-body card-block">

          <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        
                                 <div class="row form-group">
                                     @csrf
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Producto</label></div>
                     <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Producto" class="form-control"><small class="form-text text-muted">Ingrese nombre del Producto</small></div>
                                    </div>
                                                            
                                                                       <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descripción</label></div>
                     <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="5" placeholder="Contenido..." class="form-control"></textarea></div>
                                                            </div>
                                                           
                                                                                            
                                      <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stock</label></div>
                             <div class="col-12 col-md-9"><input type="number" min="1" id="text-input" name="stock" placeholder="Stock" class="form-control"><small class="form-text text-muted">Ingrese número de Stock</small></div>
                                      </div>
                                                           

                                                            

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Precio</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" min="1" id="text-input" name="price" placeholder="Precio" step="0.01" class="form-control"><small class="form-text text-muted">Ingrese Precio</small></div>
                                                            </div>

                                                       
                                                             <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Categoria</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="category_product" id="select" class="form-control">

                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->category}}</option>    
                                                                        @endforeach   


                                                                       </select>
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
                                                    </div>
        </div>
      </form>

@endsection
@extends('layouts.layout_dashboard')

@section('content')


             <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Categoria</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Lista de Categorias</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


                  @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div>
                  @endif




                <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lista de Categorias</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>UUID</th>
                                            <th>Categoria</th>
                                            <th>Editar</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                       @foreach($categories as $category)
                                             <tr>
                                                 <td>{{$category->id}}</td>
                                                 <td>{{$category->uuid}}</td>
                                                 <td>{{$category->category}}</td>
                                                 <td><a href="{{ route('categories.edit', $category->id)}}" class="btn btn-primary">Edit</a></td>
                                                 <td>
                                                     <form method="post" action="{{ route('categories.destroy', $category->id)}}" >
                                                        @method('DELETE')
                                                        @csrf


                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                     </form>
                                                 </td>
                                             </tr>
                                     @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

@endsection
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
                            <li class="active">Lista de Productos</li>
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


                         @if ($errors->any())
                           <div class="alert alert-danger">
                             <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div><br />
                        @endif




 @include('layouts.layout_dolar_today')

<script>
autorefresh()
</script>



                <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lista de Productos</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered display responsive no-wrap">
                                    <thead>
                                        <tr>
                                            
                                            <th>Nombre</th>
                                          
                                            <th>Precio USD</th>
                                             <th>IVA USD</th>
                                             <th>Total USD</th>
                                            <th>Tasa USD/BS.S</th>
                                            <th>Precio sin IVA</th>
                                            <th>IVA BS.S</th>
                                            <th>Precio BS.S</th>
                                            <th>Precio ML</th>
                                            <th>Edición</th>
                                     
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($products as $product)

                                        <tr>

                                            <td>{{$product->name}}</td>
                                            
                                            <td>{{number_format($product->price, 2)}}</td>

                                            <td>

                                               {{ $IVA = ( $product->price * 16)/100 }}

                                            </td>

                                              

                                            <td>
                                                  {{ $TotalUSD = $product->price + $IVA }}

                                            </td>

                                            <td>

                                                <script type="text/javascript"> mostrarTasa(); </script>

                                            </td>

                                            <td>

                                                <script type="text/javascript">
                                                    var price = '<?php echo $product->price;?>';
                                                    calcularPrecio(price);
                                              </script>


                                            </td>




                                             <td><script type="text/javascript">
                                                    var IVA = '<?php echo $IVA;?>';
                                                    calcularPrecio(IVA);
                                              </script></td>
                                              
                                              <td><script type="text/javascript">
                                                    var price = '<?php echo $TotalUSD;?>';
                                                    calcularPrecio(price);
                                              </script></td>

                                              <td><script type="text/javascript">
                                                    var price = '<?php echo $TotalUSD;?>';
                                                    calcularPrecioVenta(price);
                                              </script></td>



                                              <td>
                                               
                     


                         <button type="button" class="btn btn-primary mb-1" data-target="#edit_express_product"
                            data-toggle="modal" 
                            data-product-id="{{$product->id}}" 
                            data-product-name="{{$product->name}}"
                            data-product-stock="{{$product->stock}}"
                            data-product-price="{{$product->price}}"
                            >
                                                    Editar
                         </button>


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

  @include('forms.form_product_edit')
                                  
        
@endsection


@extends('layouts.layout_dashboard')






@section('content')

     <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Escritorio</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Escritorio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

       

  @include('layouts.layout_dolar_today')


    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Valor de Dolar</div>
                        <div class="stat-digit" >

<script>
autorefresh()
</script>


                            Bs.S&nbsp; <script type="text/javascript"> mostrarTasa(); </script>
          


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
   






  



@endsection



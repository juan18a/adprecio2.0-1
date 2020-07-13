







               <div class="modal fade" id="edit_express_product" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Edición Express</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              

            <!--                       COMIENZO DEL CUERPO                         -->





          <form method="post" action="{{ route('products.update', $product->id)}}  enctype="multipart/form-data" class="form-horizontal">
                                                        
                    <div class="row form-group">
                          @method('PATCH')
                          @csrf
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Producto</label></div>
                     <div class="col-12 col-md-9">

                        <input type="hidden" id="text-input" name="operacion" value="express">

                        <input type="hidden" id="text-input" name="id">
                        <input type="text" id="text-input" name="name"  placeholder="Producto" class="form-control">



                        <small class="form-text text-muted">Ingrese nombre del Producto</small></div>
                                    </div>
                                                          
                                                           
                                                                                            
                                      <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stock</label></div>
                             <div class="col-12 col-md-9"><input type="number" min="1" id="text-input" value={{$product->stock}} name="stock" placeholder="Stock" class="form-control"><small class="form-text text-muted">Ingrese número de Stock</small></div>
                                      </div>
                                                           

                                                            

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Precio</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" min="1" id="text-input" name="price"  value={{$product->price}} placeholder="Precio" step="0.01" class="form-control"><small class="form-text text-muted">Ingrese Precio</small></div>
                                                            </div>

                                                       
                                               
                                                      
                                                               
                                                  
                                                    </div>
                                               
                                                                        <!--                       FIN DEL CUERPO                         -->







                
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Actualizar</button>

                            </div>
                       
                   
</form>
</div>
                       

         
            

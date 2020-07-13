$('#edit_express_product').on('show.bs.modal', function(e) {
	var id_product = $(e.relatedTarget).data('product-id');
    var nameProduct = $(e.relatedTarget).data('product-name');
    var stockProduct = $(e.relatedTarget).data('product-stock');
    var priceProduct = $(e.relatedTarget).data('product-price');
	$(e.currentTarget).find('input[name="id"]').val(id_product);
    $(e.currentTarget).find('input[name="name"]').val(nameProduct);
    $(e.currentTarget).find('input[name="stock"]').val(stockProduct);
    $(e.currentTarget).find('input[name="price"]').val(priceProduct);
});
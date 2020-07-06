function updateCart(id) {
    var qty = $("#" + id).val();
    // console.log(id);
    // console.log(qty);
    $.post('views/Cart_method/Update_cart.php', { id: id, qty: qty }, function(data) {
        $("#noti_cart").html(data);
        $("#table-x").load(" #table-data");
    });

};
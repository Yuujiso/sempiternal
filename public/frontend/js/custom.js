$(document).ready(function() {

    $('.addToCartBtn').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var product_quantity = $(this).closest('.product_data').find('.quantity-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id' : product_id,
                'product_quantity' : product_quantity,
            },
            success: function (response) {
                alert(response.status);
            }
        })
    });


    $('.increment-btn').click(function (e) {
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.quantity-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10)
        {
            value++;
            $(this).closest('.product_data').find('.quantity-input').val(value);
        }
    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.quantity-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1)
        {
            value--;
            $(this).closest('.product_data').find('.quantity-input').val(value);
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.deleteFromCart').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.product_id').val();



        $.ajax({
            method: "POST",
            url: "/delete-cart-item",
            data: {
                'product_id': product_id,
            },
            success: function (response) {
                window.location.reload();
               swal("Success");
            }
        })
    })

    $('.changeQuantity').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var product_quantity = $(this).closest('.product_data').find('.quantity-input').val();
        data = {
            'product_id' : product_id,
            'product_quantity' : product_quantity,
        }
        $.ajax({
            method: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {
                window.location.reload();
            }
        })

    })
})

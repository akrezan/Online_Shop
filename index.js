
$(document).ready(function(){

    // banner owl carousel

    $("#owl-demo .owl-carousel").owlCarousel({

        // dots: true,
        // navigation : true, // Show next and prev buttons
        //slideSpeed : 300,
        //paginationSpeed : 400,
        autoplay: true,
        autoplayTimeout: 5000,
        loop:true,
        items: 1

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

    //top Sale Owl Carousel
    $("#top-sale .owl-carousel").owlCarousel({

        loop: true,
        nav: true,
        loop:true,
        dots: false,
        responsive: {
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            },
        }

    });

    //isotope filter

    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
    });

    //filter items on button click

    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });

    //New Products Owl Carousel
    $("#new-products .owl-carousel").owlCarousel({

        loop: true,
        nav: false,
        loop:true,
        dots: true,
        responsive: {
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            },
        }

    });

    //Blogs Owl Carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        loop:true,
        dots: true,
        responsive: {
            0:{
                items: 1
            },
            600:{
                items: 3
            },

        }

    });


    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    //let $input = $(".qty .qty_input");


    // click on qty up button

    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

        }}); // closing ajax request


    });



    // click on qty down button
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request

    }); // closing qty down button






});
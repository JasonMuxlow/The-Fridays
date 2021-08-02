$(document).ready(function () {

/// so im saying if i click list button remove grid add list///
/// took my base one but for the shop page i had remake it as i couldnt use basic bootstrap row col ect.
    $(".list-view-shop_button").click(function () {
        $(".view-toggle-shop").removeClass("grid-view-shop");
        $(".view-toggle-shop").removeClass("masonry-view-shop");
        $(".view-toggle-shop").addClass("list-view-shop");
    });

    $(".grid-view-shop_button").click(function () {
        $(".view-toggle-shop").removeClass("list-view-shop");
        $(".view-toggle-shop").removeClass("masonry-view-shop");
        $(".view-toggle-shop").addClass("grid-view-shop");
    });

    $(".masonry-view-shop_button").click(function () {
        $(".view-toggle-shop").removeClass("list-view-shop");
        $(".view-toggle-shop").removeClass("grid-view-shop");
        $(".view-toggle-shop").addClass("masonry-view-shop");
    })
});

// everything below is what joel helped me with i understand what the
// high and low is doing but the  A-Z button im not 100% and definitly
// couldnt of wrote it

//btn for high to low
$('.btn-shop-high').click(function () {
    // choosing the wrapper and individual divs to be sorted
    $(' .shop-wrapper .store-item').sort(function (a, b) {
        // compares the two data-price values and sorts with a before b = lowest to highest.
        return $(b).data('price') - $(a).data('price');
        // reapplying the sorted list to the wrapper
    }).appendTo('.shop-wrapper');
});

// btn for low to high
$('.btn-shop-low').click(function () {
    // choosing the wrapper and individual divs to be sorted
    $('.shop-wrapper .store-item').sort(function (b, a) {
        // compares the two data-price values and sorts with a before b = lowest to highest.
        return $(b).data('price') - $(a).data('price');
        // reapplying the sorted list to the wrapper
    }).appendTo('.shop-wrapper');
});

/// search bar
//this function pulls all text sends it to lower class then filters it out
$(document).ready(function () {
    // on release of key on keyboard
    $("#search-store").on("keyup", function () {
        // turns searched value into lowercase
        let value = $(this).val().toLowerCase();
        // filters the divs within the wrapper
        $(".shop-wrapper .store-item").filter(function () {
            // returns filtered options that match the searched value (returns a value greater than -1)
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

///below is a function from online that is sorting A-Z above is the original function
// TODO: GET A BETTER SYNTAX UNDERSTANDING
//I KINDA UNDERTSNAD WHAT IS HAPPENING BELOW BUT CANT GET MY HEAD AROUDN WHAT EVERYTHING DOES.


$('.btn-shop-a-z').click(function () {
    // making varisables

    var mylist = $('.shop-wrapper');
    var listitems = mylist.children('.store-item').get();
    // ^^ saying the children inside my list (  so the divs inside ) to target store items

    listitems.sort(function (a, b) {
        // all of the children ive selected is we are giving it a sort fucntion and they are all comparing  b-a for example individualy

        return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
        // returning the value of .text()and making it upper case in a-b and comparing them
    })
    // so this is for each item sorted make sure it stsays inside the wrapper mylist because
    // we have opened the content up and need to make sure it stays inside the wrapper
    $.each(listitems, function (idx, itm) {
        mylist.append(itm);
    });
});

$('.btn-shop-z-a').click(function () {
    // making varisables
    var mylist = $('.shop-wrapper');
    var listitems = mylist.children('.store-item').get();
    // ^^ saying the children inside my list (  so the divs inside ) to target store items
    listitems.sort(function (b, a) {
        // all of the children ive selected is we are giving it a sort fucntion and they are all comparing  b-a for example individualy
        return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
        // returning the value of .text()and making it upper case in a-b and comparing them
    })
    // so this is for each item sorted make sure it stays inside the wrapper mylist because
    // we have opened the content up and need to make sure it stays inside the wrapper
    $.each(listitems, function (idx, itm) {
        mylist.append(itm);
    });
});
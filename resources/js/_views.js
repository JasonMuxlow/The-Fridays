
//// my list and toggle was in a call with joel walking though it///
$(document).ready(function(){

/// so im saying if i click list button remove grid add list///

    $(".list-view_button").click(function(){
        $(".view-toggle").removeClass("grid-view");
        $(".view-toggle").removeClass("masonry-view");
        $(".view-toggle").addClass("list-view");
    });

    $(".grid-view_button").click(function(){
        $(".view-toggle").removeClass("list-view");
        $(".view-toggle").removeClass("masonry-view");
        $(".view-toggle").addClass("grid-view");
    });

    $(".masonry-view_button").click(function(){
        $(".view-toggle").removeClass("list-view");
        $(".view-toggle").removeClass("grid-view");
        $(".view-toggle").addClass("masonry-view");
    })
});



$(document).ready(function(){

/// so im trying to make it so it hides and showes certain news parts
    $(".all-news-button").click(function(){
        $(".view-toggle").show();
    });

    $(".csgo-news-button").click(function(){
        $(".view-toggle").hide();
        $(".csgo-category").show();
    });

    $(".cod-news-button").click(function(){
        $(".view-toggle").hide();
        $(".cod-category").show();
    });

    $(".dota-news-button").click(function(){
        $(".view-toggle").hide();
        $(".dota-category").show();
    });

    $(".lol-news-button").click(function(){
        $(".view-toggle").hide();
        $(".lol-category").show();
    });

    $(".creator-news-button").click(function(){
        $(".view-toggle").hide();
        $(".creator-category").show();
    });

    $(".fortnight-news-button").click(function(){
        $(".view-toggle").hide();
        $(".fortnight-category").show();
    });

    // so below was my original way of trying
    // to get it to just show cetain articles
    // but the problem was it was hiding everything
    // that had view toggles  so above is the solution and alot simpler hahah

    // $(".all-news-button").click(function(){
    //     $(".view-toggle").show("csgo-category");
    //     $(".view-toggle").show("creator-category");
    //     $(".view-toggle").show("misc-category");
    //     $(".view-toggle").show("dota-category");
    //     $(".view-toggle").show("lol-category");
    //     $(".view-toggle").show("cod-category");
    //     $(".view-toggle").show("fortnight-category");
    // });
    // //
    // $(".csgo-news-button").click(function(){
    //     $(".view-toggle").hide("creator-category");
    //     $(".view-toggle").hide("misc-category");
    //     $(".view-toggle").hide("dota-category");
    //     $(".view-toggle").hide("lol-category");
    //     $(".view-toggle").hide("cod-category");
    //     $(".view-toggle").hide("fortnight-category");
    //     $(".view-toggle").show("csgo-category");
    // });
    //
    // $(".cod-news-button").click(function(){
    //     $(".view-toggle").hide("csgo-category");
    //     $(".view-toggle").hide("creator-category");
    //     $(".view-toggle").hide("misc-category");
    //     $(".view-toggle").hide("dota-category");
    //     $(".view-toggle").hide("lol-category");
    //     $(".view-toggle").show("cod-category");
    //     $(".view-toggle").hide("fortnight-category");
    // });
    //
    // $(".dota-news-button").click(function(){
    //     $(".view-toggle").hide("csgo-category");
    //     $(".view-toggle").hide("creator-category");
    //     $(".view-toggle").hide("misc-category");
    //     $(".view-toggle").show("dota-category");
    //     $(".view-toggle").hide("lol-category");
    //     $(".view-toggle").hide("cod-category");
    //     $(".view-toggle").hide("fortnight-category");
    // });
    //
    // $(".lol-news-button").click(function(){
    //     $(".view-toggle").hide("csgo-category");
    //     $(".view-toggle").hide("creator-category");
    //     $(".view-toggle").hide("misc-category");
    //     $(".view-toggle").hide("dota-category");
    //     $(".view-toggle").show("lol-category");
    //     $(".view-toggle").hide("cod-category");
    //     $(".view-toggle").hide("fortnight-category");
    // });
    //
    // $(".creator-news-button").click(function(){
    //     $(".view-toggle").hide("csgo-category");
    //     $(".view-toggle").show("creator-category");
    //     $(".view-toggle").hide("misc-category");
    //     $(".view-toggle").hide("dota-category");
    //     $(".view-toggle").hide("lol-category");
    //     $(".view-toggle").hide("cod-category");
    //     $(".view-toggle").hide("fortnight-category");
    // });
    //
    // $(".fortnight-news-button").click(function(){
    //     $(".view-toggle").hide("csgo-category");
    //     $(".view-toggle").hide("creator-category");
    //     $(".view-toggle").hide("misc-category");
    //     $(".view-toggle").hide("dota-category");
    //     $(".view-toggle").hide("lol-category");
    //     $(".view-toggle").hide("cod-category");
    //     $(".view-toggle").show("fortnight-category");
    // });

});
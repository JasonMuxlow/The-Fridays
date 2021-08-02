$(document).ready(function() {

/// so im trying to make it so it hides and showes played and upcoming games -ja
    $(".played-matches-button").click(function () {
        $(".view-toggle").hide();
        $(".played-games").show();
    });

    $(".upcoming-matches-button").click(function () {
        $(".view-toggle").hide();
        $(".upcoming-games").show();
    });

})
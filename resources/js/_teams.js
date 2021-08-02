$(document).ready(function () {

// this just toggles the table to show and hidden in my css on the click of the button

    $('.show-players-button').on('click', function () {
        var arrayOfElements = document.getElementsByClassName('table-team-players');
        var lengthOfArray = arrayOfElements.length;
        for (var i = 0; i < lengthOfArray; i++) {
            if (arrayOfElements[i].classList.contains('showTable')) {
                arrayOfElements[i].classList.remove('showTable');
            } else {
                arrayOfElements[i].classList.add('showTable');
            }
        }
        // $('.table-team-players').toggle('display');
        // $('.table-team-players').css('filter');
    });

    // /finally got to make the hover to keep after you toggle the button//
    // this makes the table display//
//     $('.team-frame').on('mouseover', function () {
//         $('.table-team-players').css('display', 'table');
//     });
//
// // this makes the table disapear
//     $('.team-frame').on('mouseleave', function () {
//         $('.table-team-players').css('display', 'none');
//     });
// TODO: make each card hover individual

})

// TODO: make it toggle and still allow the hover but it works at the moment
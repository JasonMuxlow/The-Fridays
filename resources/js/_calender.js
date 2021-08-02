$(document).ready(function () {

    const month_array = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    let monthDate = new Date();
    let month = monthDate.getMonth();

    let yearDate = new Date();
    let year = yearDate.getFullYear()

    $(".calender-month").html(month_array[month] + " " + year);

        // console.log(month_array[month] +year);

    $('.month_buttons').click(function () {

        if ($(this).attr("id") == "calendar_left-button") {
            month--;
            // this is just saying when you clikc left move back one in the array

            // console.log(month);
        }

        if ($(this).attr("id") == "calendar_right-button") {
            month++;

            // click right it cycles through the array forward
            // console.log(month);
        }

        let dayDate = new Date(year, month, 1);
        let day = dayDate.getDay()

        // ^^ you are getting the first day of the month so it know if its 1st wednesday ect

        if (day == 0) {
            day = 7;
        }
            // because arrays start at 0 after 6 it goes to 0 so we need to tell it to go to 7

        if (month == -1) {
            month = 11;
            year--;
        }

        if (month == 12) {
            month = 0;
            year++;
        }

        // console.log(year);
        // console.log(month);
        // console.log(day);

        $('.calender-month').html(`${month_array[month]} ${year}`);
        $('.first-day').css("grid-column-start", day.toString());
    })


    // this function basically just allows me to hover and unhover to show diffrent events

    ///on row 3 this shows game day//
    $('.calender-show-3').on('mouseover', function () {
        $('.calender-valorant-3').html("Fri vs OG");
    })

    $('.calender-show-3').on('mouseleave', function () {
        $('.calender-valorant-3').html("3, Valorant ");
    })

    // on row 10 this makes the games show on hover
    $('.calender-show-10').on('mouseover', function () {
        $('.calender-cod-10').html("Fri vs G2");
        $('.calender-csgo-10').html("Fri vs Fnatic");
    })

    $('.calender-show-10').on('mouseleave', function () {
        $('.calender-cod-10').html("10, COD ");
        $('.calender-csgo-10').html("10, CS:GO ");
    })

    // on row 16 this shows signing
    $('.calender-show-16').on('mouseover', function () {
        $('.calender-meet-16').html("shirt signing");
    })

    $('.calender-show-16').on('mouseleave', function () {
        $('.calender-meet-16').html("16, Meet & Greet");
    })

    //line 27 game day //
    $('.calender-show-27').on('mouseover', function () {
        $('.calender-league-27').html("Fri vs Liquid");
    })

    $('.calender-show-27').on('mouseleave', function () {
        $('.calender-league-27').html("27, League");
    })

// line 31 game dat
    $('.calender-show-31').on('mouseover', function () {
        $('.calender-dota-31').html("Fri vs Liquid");
    })

    $('.calender-show-31').on('mouseleave', function () {
        $('.calender-dota-31').html("31, Dota");
    })
})

// mouseover and mouseleave was the functions i chose to use because they are basic and simple

//bellow is what i took from bootstrap joel told me to look a popovers as they allow you to gain extra space and show more info//


// ^^ this just allows you to trigger the popover
$(document).ready(function () {
/// the local storage is what joel helped me with and i dont fully understand it but i need to look into it
//     TODO: learn local storager
    let theme = localStorage.getItem('theme');

    $('html').removeClass('theme-light');
    $('html').removeClass('theme-dark');
    $('html').addClass(theme);

/// this is from the code i did with the training with alexander
    $("#flexSwitchCheckChecked").click(function () {
        $('html').toggleClass('theme-dark').toggleClass('theme-light');


        let currentTheme = $('html').attr('class');
        window.localStorage.setItem('theme', currentTheme);
        console.log(currentTheme);

    })


});
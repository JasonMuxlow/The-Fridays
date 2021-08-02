
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- App CSS -->
    <link rel="stylesheet" href="./dist/main.css"/>

    <title>
        <?php
        // To Get the Current Filename.
        $currentPage= $_SERVER['SCRIPT_NAME'];
        // To Get the directory name in
        // which file is stored.
        $currentPage = substr($currentPage, 1, -4);
        // To Show the Current Filename on Page.
        echo $currentPage ?>
    </title>


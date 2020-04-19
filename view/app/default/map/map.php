<?php if (!empty($_SESSION)) {
    if (!empty($_SESSION['login'])) {
        if ($_SESSION['login']['user'] === "particulier") { ?>

            <body class="body_mapbox">

            <div class="container_map">

                <div class="separator_map"></div>

                <div class="flex-child flex-child--grow bg-darken10 viewport-twothirds viewport-full-mm" id="map"></div>

                <div class="separator_map"></div>

            </div>
            </body>

        <?php } else {
            header('Location: http://localhost/mynursery');
        }
    } else {
        header('Location: http://localhost/mynursery');
    }
} else {
    header('Location: http://localhost/mynursery');
}

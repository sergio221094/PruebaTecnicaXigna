<?php get_header();?>
<body>
    <header>
        <img class="logo" src="<?php bloginfo('template_url')?>/assets/img/logo-slim-soft.png">
        <h1>Cepillo Dental Colgate Slim Soft</h1>
        <h3>Cerdas 17x más delgadas para una limpieza más profunda.</h3>
        <iframe src="https://www.youtube.com/embed/1OggtFIZHqg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </header>
    <div class="center">
        <input id="MySpinner" data-angleOffset=90 data-linecap=round type="text" class="dial">
    </div>
    <div class="contenedor">
        <img id="cepillo" class="imagen-cepillo" src="<?php bloginfo('template_url')?>/assets/img/cepillo-normal.png">
        <div class="opciones">
            <img id="btn-1" onclick="first();" class="img-numero" src="<?php bloginfo('template_url')?>/assets/img/numero-01.png">
            <img id="btn-2" onclick="Second();" class="img-numero" src="<?php bloginfo('template_url')?>/assets/img/numero-02.png">
        </div>
    </div>

</body>

</html>


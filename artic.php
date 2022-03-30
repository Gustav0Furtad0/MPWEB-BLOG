<?php
include 'restrictservice/conexao.php';
//$id = $_GET['id'];
$id = 3;
$query = mysqli_query($conn, "SELECT * FROM post WHERE id = $id LIMIT 1");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP Negócios</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
</head>

<body>
    <header class="cabecalho">
        <a href="index.html">
            <h1 class="logo">MP Negócios - Marketing Digital</h1>
        </a>
        <button class="btn-menu">
            <i id="btlg" class="fa fa-bars"></i>
            <i id="btdg" class="fa fa-arrow-right"></i>
        </button>
        <nav class="menu-moredevice">
            <div class="ases">
                <a href="">HOME</a>
                <a href="">AFILIADO VIKING</a>
                <a href="">SOBRE NÓS</a>
                <a href="">CONTATO</a>
            </div>
        </nav>
    </header>
    
    <nav class="menu">
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">AFILIADO VIKING</a></li>
            <li><a href="">SOBRE NÓS</a></li>
            <li><a href="">CONTATO</a></li>
        </ul>
    </nav>
    <main>
        <section class="postssolo">
            <article class="item">
                <h1 class="titulopost">Teste postagem asdasdasdasdasdasdasd</h1>
                <h3>2020-08-13</h3>
                <div><img alt="asDASDASDASDADASDASSADASDASDASD" src="https://images.pexels.com/photos/983200/pexels-photo-983200.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" style="height:768px; width:1366px" /></div>

                <div>&nbsp;</div>

                <div><img alt="" src="https://images.pexels.com/photos/983200/pexels-photo-983200.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" style="height:2126px; width:3780px" /></div>

                <p><img alt="" src="https://images.pexels.com/photos/3735716/pexels-photo-3735716.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" /> <img alt="" src="https://images.pexels.com/photos/3735716/pexels-photo-3735716.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" style="height:2250px; width:1500px" /></p>

                <h1>&nbsp;</h1>

                <h1 style="text-align:center">H1text aaasdasdad</h1>

                <h2>H2text aaasdasdad</h2>

                <h3 style="text-align:right">H3text aaasdasdad</h3>

                <h4>H4text aaasdasdad</h4>

                <h5 style="text-align:justify">H5text aaasdasdad</h5>

                <h6 style="text-align:justify">H6text aaasdasdad</h6>

                <pre>
                Code <a href="https://www.google.com/search?q=banana&amp;oq=banada&amp;aqs=chrome.1.69i57j0l3j46j0j46l2.2399j0j7&amp;sourceid=chrome&amp;ie=UTF-8">asdasdasdasd</a></pre>

                <address>Adress aaasdasdas</address>

                <address>&nbsp;</address>

                <div>cont (div) asdasdasdas</div>

                <p>p normal asdasdasdasdsa</p>

                <blockquote>
                <p>&quot;Meu inimigo &eacute; seu amigo, portanto vai tomar no cu&quot;&nbsp; &nbsp; - Furtado, Gustavo 2020</p>
                </blockquote>

                <p><img alt="laugh" src="http://cdn.ckeditor.com/4.14.1/full/plugins/smiley/images/teeth_smile.png" style="height:23px; width:23px" title="laugh" /></p>

                <hr />
                <ul>
                    <li>asd</li>
                </ul>

                <ol>
                    <li>gjgasdasd</li>
                    <li>asdasdasd</li>
                </ol>

                <ul>
                    <li>asdasd</li>
                    <li>asd</li>
                    <li><a href="https://www.google.com/search?q=banana&amp;oq=banada&amp;aqs=chrome.1.69i57j0l3j46j0j46l2.2399j0j7&amp;sourceid=chrome&amp;ie=UTF-8">sad</a></li>
                </ul>

                <p><a href="https://www.google.com/search?q=banana&amp;oq=banada&amp;aqs=chrome.1.69i57j0l3j46j0j46l2.2399j0j7&amp;sourceid=chrome&amp;ie=UTF-8">Banana</a></p>

                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <p>&nbsp;</p>

                <p style="text-align:center"><iframe Allowfullscreen frameborder="0" height="315" src="https://www.youtube.com/embed/rxGtJBOtmHI" width="560"></iframe></p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere excepturi perspiciatis, sed unde quam deleniti vero cupiditate dicta delectus esse veniam maiores earum sequi officiis doloribus? Iure neque qui maiores?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates earum veniam illum consequuntur itaque, deserunt delectus, ex aperiam obcaecati numquam quia optio neque repellat ipsa commodi? Voluptate enim tempore totam.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia molestiae ad hic voluptates nulla consequatur cupiditate ab ipsam esse quis magni repellat, obcaecati quam facilis temporibus quo fugit itaque minus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit modi vitae officiis sapiente ea quo commodi aperiam exercitationem totam nihil, blanditiis provident molestiae quae sit, accusamus delectus saepe. Aliquam, dolorum.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum soluta nam non cum voluptate provident molestiae rerum sequi veritatis voluptas! Explicabo beatae in provident alias blanditiis perspiciatis dolorum repellat facilis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto voluptatum beatae dolorum ipsam. Accusamus iure quis dignissimos ipsa deserunt maxime saepe pariatur, magni, iusto eligendi minima? Veniam odit accusamus veritatis!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, at consequuntur animi recusandae voluptas dolor omnis! Dolor aliquid error laboriosam officiis vel, asperiores ipsa assumenda vero, similique quas delectus nulla?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe dolor unde voluptatem iure at aut animi sequi eius, maxime incidunt distinctio fuga tempore adipisci sapiente, debitis consectetur fugiat doloremque magni.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius et expedita labore ut maiores, rem molestiae veritatis inventore doloremque voluptates laboriosam iusto tenetur quaerat laborum. Reiciendis praesentium aliquam facere neque!
            </article>
        </section>
    </main>
    <aside>
        <div class="autores">
            <img src="img/logo/logo-mobile-2-circl-invert.png" alt="">
            <h1>Autores</h1>
            <p>Pessoas comuns que começaram com nada (e continuam sem), assim como a grande maioria das pessoas, e que
                hoje ganham a vida com marketing digital
                e possuem a tão almejada liberdade financeira
            </p>
        </div>
        <div class="breads">
            <div class="viking">
                <h2 class="h2-viking">Afiliado VIKING</h2>
            </div>
            <div class="viking">
                <h2 class="prop"></h2>
            </div>
            <div class="viking">
                <h2 class="king"></h2>
            </div>
        </div>
    </aside>
    <footer>
        <div class="social">
            <h1>Redes Sociais</h1>
            <button><a href=""><i class="fa fa-facebook"></i></a></button>
            <button><a href="https://www.instagram.com/m.p.negocios/"><i class="fa fa-instagram"></i></a></button>
            <button><a href=""><i class="fa fa-youtube-play"></i></a></button>
        </div>
        <div class="copy">
            <h2>Rodapé a decidir</h2>
            <h3>Site feito por Gustavo Furtado <br>
                <i class="fa fa-instagram"></i><a
                    href="https://www.instagram.com/gustavofurtadosjn/">@gustavofurtadosjn</a></h3>
        </div>
    </footer>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- MEU JS -->
    <script>
        $(".btn-menu").click(function () {
            if ($(".menu").css('display') == 'none') {
                $(".menu").show();
                $("#btlg").hide();
                $("#btdg").show();
            } else {
                $(".menu").hide();
                $("#btdg").hide();
                $("#btlg").show();
            }
        });
    </script>
</html>
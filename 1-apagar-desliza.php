<?
$h1         = 'Desliza';
$title      = 'Desliza';
$desc       = 'Desliza';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Desliza';
include('inc/head.php');
include('inc/fancy.php');
?>
</head>
<body>
<? include('inc/topo.php');?>
<div class="wrapper">
    <main>
        <div class="content">
            <section>
                <?=$caminho?>
                <h1><?=$h1?></h1>
                <article class="full">
                    <a href="<?=$url?>1-apagar-desliza#teste" class="btn desliza">Teste</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error saepe itaque nemo pariatur assumenda maxime libero cum accusantium sequi, consequatur odit quos. Illo voluptatum, quaerat et, dicta sed mollitia ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatum, accusamus, velit mollitia repudiandae perspiciatis inventore non id recusandae nulla quasi assumenda nisi omnis molestiae fugiat. Quo similique, enim possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum porro maxime, doloremque explicabo ipsam sequi odio mollitia officia. Voluptates voluptatibus cumque illum obcaecati tempore laboriosam optio ex ab sapiente, doloribus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error saepe itaque nemo pariatur assumenda maxime libero cum accusantium sequi, consequatur odit quos. Illo voluptatum, quaerat et, dicta sed mollitia ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatum, accusamus, velit mollitia repudiandae perspiciatis inventore non id recusandae nulla quasi assumenda nisi omnis molestiae fugiat. Quo similique, enim possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum porro maxime, doloremque explicabo ipsam sequi odio mollitia officia. Voluptates voluptatibus cumque illum obcaecati tempore laboriosam optio ex ab sapiente, doloribus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error saepe itaque nemo pariatur assumenda maxime libero cum accusantium sequi, consequatur odit quos. Illo voluptatum, quaerat et, dicta sed mollitia ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatum, accusamus, velit mollitia repudiandae perspiciatis inventore non id recusandae nulla quasi assumenda nisi omnis molestiae fugiat. Quo similique, enim possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum porro maxime, doloremque explicabo ipsam sequi odio mollitia officia. Voluptates voluptatibus cumque illum obcaecati tempore laboriosam optio ex ab sapiente, doloribus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error saepe itaque nemo pariatur assumenda maxime libero cum accusantium sequi, consequatur odit quos. Illo voluptatum, quaerat et, dicta sed mollitia ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatum, accusamus, velit mollitia repudiandae perspiciatis inventore non id recusandae nulla quasi assumenda nisi omnis molestiae fugiat. Quo similique, enim possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum porro maxime, doloremque explicabo ipsam sequi odio mollitia officia. Voluptates voluptatibus cumque illum obcaecati tempore laboriosam optio ex ab sapiente, doloribus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error saepe itaque nemo pariatur assumenda maxime libero cum accusantium sequi, consequatur odit quos. Illo voluptatum, quaerat et, dicta sed mollitia ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatum, accusamus, velit mollitia repudiandae perspiciatis inventore non id recusandae nulla quasi assumenda nisi omnis molestiae fugiat. Quo similique, enim possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum porro maxime, doloremque explicabo ipsam sequi odio mollitia officia. Voluptates voluptatibus cumque illum obcaecati tempore laboriosam optio ex ab sapiente, doloribus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error saepe itaque nemo pariatur assumenda maxime libero cum accusantium sequi, consequatur odit quos. Illo voluptatum, quaerat et, dicta sed mollitia ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatum, accusamus, velit mollitia repudiandae perspiciatis inventore non id recusandae nulla quasi assumenda nisi omnis molestiae fugiat. Quo similique, enim possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum porro maxime, doloremque explicabo ipsam sequi odio mollitia officia. Voluptates voluptatibus cumque illum obcaecati tempore laboriosam optio ex ab sapiente, doloribus.</p>
                    <h2 id="teste">TESTE AQUI</h2>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error saepe itaque nemo pariatur assumenda maxime libero cum accusantium sequi, consequatur odit quos. Illo voluptatum, quaerat et, dicta sed mollitia ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatum, accusamus, velit mollitia repudiandae perspiciatis inventore non id recusandae nulla quasi assumenda nisi omnis molestiae fugiat. Quo similique, enim possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum porro maxime, doloremque explicabo ipsam sequi odio mollitia officia. Voluptates voluptatibus cumque illum obcaecati tempore laboriosam optio ex ab sapiente, doloribus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error saepe itaque nemo pariatur assumenda maxime libero cum accusantium sequi, consequatur odit quos. Illo voluptatum, quaerat et, dicta sed mollitia ducimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatum, accusamus, velit mollitia repudiandae perspiciatis inventore non id recusandae nulla quasi assumenda nisi omnis molestiae fugiat. Quo similique, enim possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum porro maxime, doloremque explicabo ipsam sequi odio mollitia officia. Voluptates voluptatibus cumque illum obcaecati tempore laboriosam optio ex ab sapiente, doloribus.</p>
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
    <script>
    $(function() {
    // Handler for .ready() called.
    // Deslize suave
    $(".desliza").on("click", function (e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    $("html, body").stop().animate({
    "scrollTop": ($target.offset().top)
    }, 900, "swing", function () {
    window.location.hash = target;
    });
    });
    });
    </script>
</body>
</html>
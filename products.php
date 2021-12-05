<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/parts/header.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/parts/nav.php';
?>
<main>
    <section class="products_section-1">
        <div class="container">
            <div class="title-2">
                <img class="line" src="image/products/left_line.png"/>
                <div class="text text_size-36"><span class="text_big">Продукция</span></div>
                <img class="line" src="image/products/right_line.png"/>
            </div>
        </div>
    </section>
    <section class="products_section-2">
        <div class="container">
            <div class="row list_link-3 text_big text_size-20">
                <a class="col" href="/product_choiced.php"><div class="col link-3 img-1"><div>Графит природный</div></div></a>
                <a class="col" href="/product_choiced.php"><div class="col link-3 img-2"><div>Графит искусственный</div></div></a>
                <a class="col" href="/product_choiced.php"><div class="col link-3 img-3"><div>Материалы</div></div></a>
                <a class="col" href="/product_choiced.php"><div class="col link-3 img-4"><div>Изделия</div></div></a>
            </div>
        </div>
    </section>
    <section class="products_section-3">
        <div class="container"></div>
    </section>
</main>
<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/parts/footer.php";
?>
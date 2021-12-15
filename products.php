<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/parts/header.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/parts/nav.php';
?>
<main>
    <section class="products_section-1">
        <div class="container">
            <div class="title-2">
                <div class="line"><img src="image/products/left_line.png"/></div>
                <div class="text text_size-36"><strong>Продукция</strong></div>
                <div class="line"><img src="image/products/right_line.png"/></div>
            </div>
        </div>
    </section>
    <section class="products_section-2">
        <div class="container">
            <div class="row list_link-3">
                <a class="col" href="/product_choiced.php"><div class="col link-3 img-1"><div class="text_size-20"><strong>Графит природный</strong></div></div></a>
                <a class="col" href="/product_choiced.php"><div class="col link-3 img-2"><div class="text_size-20"><strong>Графит искусственный</strong></div></div></a>
                <a class="col" href="/product_choiced.php"><div class="col link-3 img-3"><div class="text_size-20"><strong>Материалы</strong></div></div></a>
                <a class="col" href="/product_choiced.php"><div class="col link-3 img-4"><div class="text_size-20"><strong>Изделия</strong></div></div></a>
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
 <section class="page-banner-area page-products" style="height: 200px">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container" style="height: 200px">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold">
                        <?=$product->name?>
                    </h1>
                </div>
            </div>


        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<section class="container">
    <div class="row">
        <div class="col-lg-4 text-center">
            <div class="banner-contact-form bg-white">
                <img style="width: 100%" src="<?=base_url($product->img)?>" alt="">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="banner-contact-form bg-white">
                <h1><?=$product->name?></h1><hr>
                <p><?=$product->description?></p><br>

                <button class="btn btn-primary btn-block">SOLICITAR ORÇAMENTO</button>
            </div>
        </div>
    </div>
</section><hr>

<section class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Produtos Semelhantes</h1>
        </div>

        <?php foreach($products as $p): ?>
            <div class="col-md-3 pt-3 mb-3 text-center">
                <img style="width: 100%"
                    src="<?=base_url($p->img)?>">
                <h4><?=$p->name?></h4>
                <a  href="<?=base_url('produtos/visualizar/'.$p->id_product)?>"
                    class="btn btn-xs text-success">DETALHES</a>
            </div>
        <?php endforeach ?>
    </div>
</section>

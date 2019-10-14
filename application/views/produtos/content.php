<div class="container">
    <div class="col-lg-12 col-md-12 text-center pt-3 mb-3">
        <div class="row">
            <div class="col-md-3 hidden-xs hidden-sm">
                <h3 class="btn btn-primary btn-block">CATEGORIAS</h3>
                <ul class="list-group list-group-flush">
                        <a class="list-group-item" href="<?=base_url('produtos')?>">Todos</a>
                    <?php foreach($categories as $c):?>
                        <a class="list-group-item" href="<?=base_url('produtos?category='.$c->id_category)?>"><?=$c->category_name?></a>
                    <?php endforeach ?>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="row">

                    <div id="carouselExampleControls"
                        class="carousel slide col-md-12"
                        data-ride="carousel">
                        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="<?=base_url('assets/frontend/img/carrossel-products/01.png')?>"
                                    alt="Primeiro Slide">
                            </div>
                           
                        </div>

                        <a class="carousel-control-prev"
                            href="#carouselExampleControls"
                            role="button"
                            data-slide="prev">
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next"
                            href="#carouselExampleControls"
                            role="button"
                            data-slide="next">
                            <span
                                class="carousel-control-next-icon"
                                aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>

                        <br><br>
                    </div>



                    <?php foreach($products as $p): ?>
                        <div class="col-md-3">
                            <img style="width: 100%"
                                src="<?=base_url($p->img)?>">
                            <h4><?=$p->name?></h4>
                            <a  href="<?=base_url('produtos/visualizar/'.$p->id_product)?>"
                                class="btn btn-xs text-success">DETALHES</a>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
</div>

<section class="section text-center"  style="background-color: #dedede">
        <a href="<?=base_url('contato')?>" class="btn btn-primary"> ORÇAMENTO PERSONALIZADO? ENTRE EM CONTATO. </a>
</section>


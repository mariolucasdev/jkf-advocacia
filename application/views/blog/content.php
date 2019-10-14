<div class="container">
    <div class="col-lg-12 col-md-12 text-center pt-3 mb-3">
        <div class="row">
            

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

                    <?php if(empty($posts)): ?>
                        <div class="col-md-12">
                            <h3>Ainda não foram publicados posts nessa categoria. <a href="<?=base_url('blog')?>">Explorar outros posts</a></h3>
                        </div>
                    <?php else: ?>
                        <?php foreach($posts as $p): ?>
                            <div class="col-md-3">
                                <a href="<?=base_url('blog/post/'.$p->id)?>">
                                    <img style="width: 100%"
                                    src="<?=base_url('assets/frontend/img/blog/'.$p->imagem)?>">
                                    <h4><?=$p->titulo?></h3>
                                    <small><?=date('d/m/Y', strtotime($p->data))?> por <?=$p->autor?></small>
                                </a>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>


                </div>
            </div>

            <div class="col-md-3 hidden-xs hidden-sm">
                <h3 class="btn btn-primary btn-block">CATEGORIAS</h3>
                <ul class="list-group list-group-flush">
                        <a class="list-group-item" href="<?=base_url('blog')?>">Todos</a>
                    <?php foreach($categorias as $c):?>
                        <a class="list-group-item" href="<?=base_url('blog/categoria/'.$c->id)?>"><?=$c->titulo?></a>
                    <?php endforeach ?>
                </ul>
            </div>

        </div>
    </div>
</div>

<section class="section text-center"  style="background-color: #dedede">
        <a href="<?=base_url('contato')?>" class="btn btn-primary"> ORÇAMENTO PERSONALIZADO? ENTRE EM CONTATO. </a>
</section>


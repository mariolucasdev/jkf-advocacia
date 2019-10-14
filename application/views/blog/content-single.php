<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0&appId=474524816440629&autoLogAppEvents=1"></script>

<div class="container">
    <div class="col-lg-12 col-md-12 text-center pt-5 mb-3">
        <div class="row">
            
            <div class="col-md-9 text-left">
                <img
                    style="width: 100%"
                    src="<?=base_url('assets/frontend/img/blog/'.$post->imagem)?>"
                    alt="<?=$post->titulo?>"><br><br>
                    
                    <h1><?=$post->titulo?></h1>
                    <p><?=$post->conteudo?></p><br>
                    <p>Por <?=$post->autor?> em <?=date('d/m/Y', strtotime($post->data))?></p><hr>

                    <div class="pull-right fb-share-button"
                        data-href="<?=current_url()?>"
                        data-layout="button"
                        data-size="large">
                        <a target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar
                        </a>
                    </div>

                    <br>
                    <br>

                    <div class="fb-comments" data-href="<?=current_url()?>" data-width="100%" data-numposts="5"></div>

                    <br><br>
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


                    


                </div>
            </div>

            

        </div>
    </div>
</div>

<section class="section text-center"  style="background-color: #dedede">
        <a href="<?=base_url('contato')?>" class="btn btn-primary"> ORÇAMENTO PERSONALIZADO? ENTRE EM CONTATO. </a>
</section>


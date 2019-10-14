<div class="container">
    <div class="col-lg-12 col-md-12 text-center pt-3 mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php foreach($clientes as $c): ?>
                        <div class="col-md-3">
                            <img style="width: 80%" class="img-clientes" src="<?=base_url('assets/frontend/img/clients/'.$c->img)?>" alt="">
                            <h4><?=$c->nome?></h4>
                            <p><?=$c->atividade?></p>
                            
                            <h4 class="text-primary">

                                <?php if($c->facebook): ?>
                                    <a  class="text-primary"
                                        target="_blank"
                                        href="<?=$c->facebook?>">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                <?php else :?>
                                    <a class="text-primary">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                <?php endif ?>
                                
                                <?php if($c->instagram): ?>
                                    <a class="text-primary" href="<?=$c->instagram?>">
                                        <label for="">
                                            <i class="fab fa-instagram text-priamary"></i>
                                        </label>
                                    </a>
                                <?php else :?>
                                    <a class="text-primary">
                                        <label for="">
                                            <i class="fab fa-instagram text-priamary"></i>
                                        </label>
                                    </a>
                                <?php endif ?>

                                <?php if($c->website): ?>
                                    <a class="text-primary" href="<?=$c->website?>">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                <?php else :?>
                                    <a class="text-primary">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                <?php endif ?>

                            </h4>
                        </div>
                    <?php endforeach ?>

                    <style>
                        .img-clientes {
                            -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                            filter: grayscale(100%);
                            transition: 0.3s;
                        }

                        .img-clientes:hover {
                            filter:none;
                            transition: 0.3s;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section text-center"  style="background-color: #dedede">
        <a href="<?=base_url('contato')?>" class="btn btn-primary"> ORÇAMENTO PERSONALIZADO? ENTRE EM CONTATO. </a>
</section>


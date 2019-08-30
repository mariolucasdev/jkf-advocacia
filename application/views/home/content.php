    <section id="about" class="section">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-lg-12 col-md-12 text-center">
                    <h2 class="section-title">SOBRE
                        <div class="line"></div>
                    </h2>
                    <br>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="row justy-content-center">

                        <?php foreach ($sobre as $s) : ?>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="text-center about-block">
                                    <div class="process-block">
                                        <img
                                            src="<?=base_url('assets/frontend/img/about/'.$s->img)?>"
                                            alt=""
                                            class="img-fluid">

                                        <h3><?=$s->title?></h3>
                                        <p><?=$s->description?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>

                <div class="col-lg-12 pt-6 col-md-12 text-center">
                    <h2 class="section-title">DIFERENCIAIS DA AVANTI <div class="line"></div></h2>
                </div>

                <div class="col-lg-12 pt-6 col-md-12">
                    <div class="row justy-content-center">

                        <?php foreach($diferenciais as $d): ?>
                            <div class="col-lg-3 col-sm-6 col-md-6 mb-5">
                                <div class="text-center about-block">
                                    <div class="img-icon mb-4">
                                        <i style="color: #006EB6" class="<?=$d->icon?>"></i>
                                    </div>
                                    <h4 class="mb-2"><?=$d->title?></h4>
                                    <p><?=$d->description?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                        
                    </div>
                </div>
                    
            </div>
        </div>
    </section>

    <!-- Web services
    ================================================== -->
    <section class="section text-center" id="services-2">
        <a href="<?=base_url('solucoes')?>" class="btn btn-primary"> VEJA NOSSAS SOLUÇÕES </a>
    </section>
    <br><br>
    <br><br>
    <br><br>


    <!-- HERO
    ================================================== -->
    <section class="banner-area py-5" id="banner">
       <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-8">
                   <div class="banner-content text-center pt-8">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                            JKF Advocacia
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="<?=base_url('solucoes')?>" class="btn btn-primary btn-circled">
                                NOSSAS SOLUÇÕES
                            </a>
                        </p>
                    </div>
                </div>
                
                <!-- <div class="col-lg-4 ">

                    <?php if($this->session->sucesso): ?>
                        <div class="alert alert-success"><?=$this->session->sucesso?></div>
                    <?php elseif($this->session->erro): ?>
                        <div class="alert alert-danger"><?=$this->session->erro?></div>
                    <?php endif ?>

                    <div class="banner-contact-form bg-white">
                        <form method="post" action="<?=base_url('contato/enviar_email')?>">
                            <div class="form-group">

                                <input type="hidden" name="local" value="<?=current_url()?>">

                                <input type="text" name="nome" class="form-control" placeholder="Seu Nome">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Seu E-mail">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="assunto" placeholder="Assunto">
                            </div>
                            <div class="form-group">
                                <textarea name="mensagem" cols="30" rows="4" class="form-control" placeholder="Mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary text-white btn-block">Enviar</button>
                        </form>
                    </div>
                </div> -->
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
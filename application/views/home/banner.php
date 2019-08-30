    <!-- HERO
    ================================================== -->
    <section class="banner-area py-5" id="banner">
       <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-8">
                   <div class="banner-content text-center text-lg-left">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                            Avanti Tecnologia<br>Soluções em Informática
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5">
                            Soluções em automação comercial, certificado digital e equipamentos de informática.
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="<?=base_url('solucoes')?>" class="btn btn-primary btn-circled">
                                NOSSAS SOLUÇÕES
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 ">
                    <div class="banner-contact-form bg-white">
                        <form method="post" action="<?=base_url('contato/enviar')?>">
                            <div class="form-group">
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
                            <a href="#" class="btn btn-dark btn-block btn-circled">Enviar</a>
                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
<div class="main-navigation" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable">

                <a class="navbar-brand d-lg-none d-block" href="">
                    <!-- <h4>Rapoo</h4> -->
                    <img
                        style="width: 150px"
                        src="<?=base_url('assets/frontend/img/logotipos/logo-h-light.png')?>"
                        alt="Logotipo Avanti Tecnologia"
                        title="Logotipo Avanti" />
                </a>

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        
                        <li class="nav-item ">
                            <a href="<?=base_url()?>" class="nav-link js-scroll-trigger">
                                Home
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nossas Soluções
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item "
                                    href="<?=base_url('solucoes/sistema-comercial')?>">
                                    Sistema Comercial
                                </a>
                                <a class="dropdown-item "href="<?=base_url('solucoes/certificado-digital')?>">
                                    Certificado Digital
                                </a> 
                                <a class="dropdown-item " href="<?=base_url('solucoes/tef')?>">
                                    Solução de Pagamento TEF
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produtos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item "
                                    href="<?=base_url('produtos')?>">
                                    TODOS
                                </a>
                                <?php foreach($categories as $c): ?>
                                    <a class="dropdown-item "
                                        href="<?=base_url('produtos?category='.$c->id_category)?>">
                                        <?=$c->category_name?>
                                    </a>
                                <?php endforeach ?>

                            </div>
                        </li>
                        
                        <li class="nav-item ">
                            <a href="<?=base_url('clientes')?>" class="nav-link js-scroll-trigger">
                                Clientes
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="<?=base_url('blog')?>" class="nav-link js-scroll-trigger">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="<?=base_url('contato')?>" class="nav-link js-scroll-trigger">
                                Contato
                            </a>
                        </li>

                    </ul>

                    <ul class="ml-lg-auto list-unstyled m-0">
                        <li><a href="#" class="btn btn-white btn-circled">Orçamento</a></li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>

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
                <?php if($this->session->sucesso): ?>
                    <div class="alert alert-success"><?=$this->session->sucesso?></div>
                <?php elseif($this->session->erro): ?>
                    <div class="alert alert-danger"><?=$this->session->erro?></div>
                <?php endif ?>
                
                <h1><?=$product->name?></h1><hr>
                <p><?=$product->description?></p><br>

                <button
                    data-toggle="modal"
                    data-target="#orcamento"
                    class="btn btn-primary btn-block">SOLICITAR ORÇAMENTO</button>
                
                <div class="modal fade"
                    id="orcamento"
                    tabindex="-1"         
                    role="dialog"
                    aria-labelledby="orcamentoLabel" 
                    aria-hidden="true">
                    
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Modal Orcamento de Produto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nome">Seu Nome*</label>
                                        <input
                                            required
                                            class="form-control"
                                            name="nome"
                                            type="text">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="telefone">Telefone*</label>
                                        <input
                                            required
                                            class="form-control"
                                            name="telefone"
                                            type="text">
                                    </div>
                                </div>
                                <label for="email">E-mail*</label>
                                <input
                                    required
                                    class="form-control"
                                    name="email"
                                    type="text">

                                <label for="produto">Produto</label>
                                <input
                                    name="produto"
                                    value="<?=$product->name?>"
                                    class="form-control"
                                    type="text"><br>

                                <input type="hidden" name="status" value="aberto">

                                <input
                                    type="submit"
                                    class="btn btn-primary btn-block"
                                    value="Solitar Orçamento">
                            </form>
                        </div>
                    </div>
                </div>
                
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

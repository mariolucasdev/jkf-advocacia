<div class="container">
    <div class="col-lg-12 col-md-12 text-center pt-3 mb-3">
        <div class="row pt-6">
            <div class="col-md-6 text-left">

                <?php if($this->session->sucesso): ?>
                    <div class="alert alert-success"><?=$this->session->sucesso?></div>
                <?php elseif($this->session->erro): ?>
                    <div class="alert alert-danger"><?=$this->session->erro?></div>
                <?php endif ?>

                <h3>Não fique com dúvidas, fale conosco!</h3>
                <form method="post" action="<?=base_url('contato/enviar_email')?>">

                    <input type="hidden" name="local" value="<?=current_url()?>">
                    <label for="nome"> Nome *</label>
                    <input
                        required
                        class="form-control"
                        name="nome"
                        type="text">

                    <label for="nome"> E-mail * </label>
                    <input
                        required
                        class="form-control"
                        name="email"
                        type="text">
                    
                    <label for="nome"> Telefone </label>
                    <input
                        class="form-control"
                        name="telefone"
                        type="text">

                    <label for="nome"> Assunto * </label>
                    <input
                        required
                        class="form-control"
                        name="assunto"
                        type="text">
                    
                    <label for="nome"> Mensagem * </label>
                    <textarea
                        required
                        class="form-control"
                        name="mensagem"></textarea><br>

                    <button class="btn btn-primary btn-block" type="submit"> Enviar </button>
                </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.1111052436077!2d-40.0859938852213!3d-7.883442994320452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaee56233948382e1!2sAvanti%20Tecnologia%20-%20Automa%C3%A7%C3%A3o%20Comercial!5e0!3m2!1spt-BR!2sbr!4v1568400071479!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>


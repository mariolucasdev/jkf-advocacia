<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">
            EDITAR CLIENTES
        </h3>
        <div class="box-tools pull-right">
            <a class="btn btn-success " href="<?=base_url('manage/clientes')?>">Voltar</a>
          <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->
          <!-- <span class="label label-primary">Label</span> -->
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="row">
        <div class="col-md-12">

            <div class="box-body">
                <?php if($this->session->erro):?>
                    <p class="bg-danger"> <?=$this->session->erro?></p>
                <?php endif ?>

                <form class="form" method="post" enctype="multipart/form-data">

                    <label for="nome">Nome</label>
                    <input
                        value="<?=$cliente->nome?>"
                        class="form-control"
                        name="nome"
                        type="text"
                        required
                        autocomplete="off">

                    <label for="atividade">Atividade</label>
                    <input
                        value="<?=$cliente->atividade?>"
                        class="form-control"
                        name="atividade"
                        required>

                    <label for="facebook">facebook</label>
                    <input
                        value="<?=$cliente->facebook?>"
                        class="form-control"
                        name="facebook">

                    <label for="instagram">instagram</label>
                    <input
                        value="<?=$cliente->instagram?>"
                        class="form-control"
                        name="instagram">

                    <label for="website">website</label>
                    <input
                        value="<?=$cliente->website?>"
                        class="form-control"
                        name="website">

                    <label for="imagem">imagem</label>
                    <br>
                    
                    <?php if($cliente->img != ''):?>
                        <img style="width: 80px" src="<?=base_url('assets/frontend/img/clients/'.$cliente->img)?>" alt="">
                        <a href="" class="btn btn-sm btn-danger">excluir imagem</a>
                    <?php else: ?>
                        <input
                            type="file"
                            name="imagem">
                    <?php endif ?>
                    <br>
                    
                    <button type="submit" class="btn btn-primary"> Enviar Dados</button>
                    
                </form>
            
            </div>
            

        </div>
      </div>
    </div>
  </section>
</div>

<script>
 $(function () {
$("#example").DataTable();
});
</script>


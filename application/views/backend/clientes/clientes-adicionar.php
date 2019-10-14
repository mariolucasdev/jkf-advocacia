<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">
            CLIENTES
        </h3>
        <div class="box-tools pull-right">
            <a class="btn btn-success " href="<?=base_url('manage/clientes?action=adicionar')?>">Adicionar</a>
          <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->
          <!-- <span class="label label-primary">Label</span> -->
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
            <div class="col-md-12">

                <?php if($this->session->erro):?>
                    <p class="bg-danger"> <?=$this->session->erro?></p>
                <?php endif ?>

                <form class="form" method="post" enctype="multipart/form-data">

                    <label for="nome">Nome</label>
                    <input class="form-control" name="nome" type="text" placeholder="Nome da Empresa" required autocomplete="off">
                    <label for="atividade">Atividade</label>
                    <input class="form-control" name="atividade" placeholder="Atividade da Empresa" required>
                    <label for="facebook">facebook</label>
                    <input class="form-control" name="facebook" placeholder="Facebook" required>
                    <label for="instagram">instagram</label>
                    <input class="form-control" name="instagram" placeholder="Instagram" required>
                    <label for="website">website</label>
                    <input class="form-control" name="website" placeholder="website" required>
                    <label for="imagem">imagem</label>
                    <input type="file" name="imagem">
                    
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
$(function(){
    $("#example").DataTable();
});
</script>


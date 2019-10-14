<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">
            ORÇAMENTOS
        </h3>
        <div class="box-tools pull-right">
            <!-- <a
              data-toggle="modal"
              data-target="#adicionarPost"
              class="btn btn-success ">ENVIAR MENSAGEM PARA LEADS</a> -->
            <a class="btn btn-primary" href="<?=base_url('manage/orcamento?status=aberto')?>">ABERTO</a>
            <a class="btn btn-primary" href="<?=base_url('manage/orcamento?status=fechado')?>">FECHADO</a>
            <a class="btn btn-primary" href="<?=base_url('manage/orcamento')?>">TODOS</a>
          <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->
          <!-- <span class="label label-primary">Label</span> -->
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="row">
        <div class="col-md-12">
            
            <?php if($this->session->sucesso):?>
                <p class="bg-success"> <?=$this->session->sucesso?></p>
            <?php endif ?>
            
            <table class="table">
                <thead>
                    <th>Cliente</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Produto</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($orcamentos as $o): ?>
                        <?php if($o->status == 'aberto'): ?>
                          <tr class="text-success">
                              <td><?=$o->nome?></td>
                              <td><?=$o->telefone?></td>
                              <td><?=$o->email?></td>
                              <td><?=$o->produto?></td>
                              <td><?=$o->status?></td>
                          </tr>
                        <?php else : ?>
                          <tr class="text-danger">
                              <td><?=$o->nome?></td>
                              <td><?=$o->telefone?></td>
                              <td><?=$o->email?></td>
                              <td><?=$o->produto?></td>
                              <td><?=$o->status?></td>
                          </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal -->
<div class="modal fade" id="adicionarPost" tabindex="-1" role="dialog" aria-labelledby="adicionarPostLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adicionarPostLabel">Adicionar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="form" method="post" action="">
            <label for="assunto">Assunto</label>
            <input class="form-control" type="text" name="assunto"><br>
            
            <label for="assunto">Título do Botão</label>
            <input class="form-control" type="text" name="btn"><br>

            <label for="assunto">Link de Ação</label>
            <input class="form-control" type="text" name="call"><br>
            <!-- <label for="conteudo">Conteúdo</label> -->
            <label for="mensagem">Mensagem</label>
            <textarea class="textarea form-control" name="mensagem" id="" cols="30" rows="10"></textarea>

            <input class="btn btn-success form-control" type="submit" value="enviar"><br><br>
        </form>
                

      </div>
    </div>
  </div>
</div>


<script>
 $(function () {
$("#example").DataTable();
});
</script>


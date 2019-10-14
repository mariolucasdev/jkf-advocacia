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
      <div class="row">
        <div class="col-md-12">
            
            <?php if($this->session->sucesso):?>
                <p class="bg-success"> <?=$this->session->sucesso?></p>
            <?php endif ?>
            
            <table class="table">
                <thead>
                    <th>avatar</th>
                    <th>nome</th>
                    <th>atividade</th>
                    <th>instagram</th>
                    <th>facebook</th>
                    <th>website</th>
                </thead>
                <tbody>
                    <?php foreach($clientes as $c): ?>
                        <tr>
                            <td><img src="<?=base_url('assets/frontend/img/clients/'.$c->img)?>" style="width: 50px"></td>
                            <td><?=$c->nome?></td>
                            <td><?=$c->atividade?></td>
                            <td><?=$c->instagram?></td>
                            <td><?=$c->facebook?></td>
                            <td><?=$c->website?></td>
                            <td><a href="<?=base_url('manage/clientes?action=editar&id='.$c->id)?>">editar</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
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


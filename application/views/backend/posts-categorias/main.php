<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">
            Categorias do Blog
        </h3>
        <div class="box-tools pull-right">
            <a class="btn btn-success" data-toggle="modal" data-target="#adicionarCategoria">Adicionar</a>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>Categoria</th>
                </thead>
                <tbody>
                    <?php foreach($categorias as $c): ?>
                        <tr>
                            <td><?=$c->id?></td>
                            <td><?=$c->titulo?></td>
                            <td><a href="<?=base_url('manage/blog/posts/?action=editar&id='.$c->id)?>">editar</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- Modal -->
<div class="modal fade" id="adicionarCategoria" tabindex="-1" role="dialog" aria-labelledby="adicionarCategoriaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adicionarCategoriaLabel">Adicionar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="form" method="post" action="" enctype="multipart/form-data">
          <label for="titulo">Categoria</label>
          <input class="form-control" type="text" name="titulo"><br>

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


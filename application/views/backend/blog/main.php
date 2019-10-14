<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">
            Blog
        </h3>
        <div class="box-tools pull-right">
            <!-- <a class="btn btn-success " href="<?=base_url('manage/blog?action=adicionar')?>">Adicionar</a> -->
            <a
              data-toggle="modal"
              data-target="#adicionarPost"
              class="btn btn-success ">Adicionar</a>
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
                    <th>id</th>
                    <th>titulo</th>
                    <th>ação</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach($posts as $p): ?>
                        <tr>
                            <td><?=$p->id?></td>
                            <td><?=$p->titulo?></td>
                            <!-- <td>
                              <a
                                data-toggle="modal"
                                data-target="#<?=$p->id?>">editar</a></td> -->
                            <td><a class="text-danger"
                                data-toggle="modal"
                                data-target="#excluir<?=$p->id?>">excluir</a></td>
                        </tr>

                        <div class="modal fade" id="<?=$p->id?>" tabindex="-1" role="dialog" aria-labelledby="<?=$p->id?>Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="adicionarPostLabel">
                                  Editar Post
                                </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form class="form" method="post" action="" enctype="multipart/form-data">
                                    <label for="titulo">Titulo do Post</label>
                                    <input
                                      class="form-control"
                                      type="text"
                                      name="titulo"
                                      value="<?=$p->titulo?>"><br>

                                    <!-- <label for="conteudo">Conteúdo</label> -->
                                    <textarea
                                      class="textarea form-control"
                                      name="conteudo"
                                      id=""
                                      cols="30"
                                      rows="10">
                                      <?=$p->conteudo?>
                                    </textarea>

                                    <label for="imagem">Imagem (tamanho recomendado: 750x300)</label>
                                    <input type="file" name="imagem">

                                    <label for="categoria">Categoria</label>
                                    <input
                                      class="form-control"
                                      type="text"
                                      name="categoria"
                                      value="<?=$p->categoria?>">

                                    <label for="autor">Autor</label>
                                    <input
                                      class="form-control"
                                      type="text"
                                      name="autor"
                                      value="<?=$p->autor?>"><br>

                                    <input class="btn btn-success form-control" type="submit" value="enviar"><br><br>
                                </form>
                                        

                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="excluir<?=$p->id?>" tabindex="-1" role="dialog" aria-labelledby="excluir<?=$p->id?>Label" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="adicionarPostLabel">
                                  Excluir Post
                                </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <p>Tem certeza que deseja excluir esse post?</p>

                                  <a class="btn btn-danger"
                                    href="
                                    <?=base_url('manage/excluirPost/'.$p->id)?>">Sim, quero excluir</a>

                              </div>
                            </div>
                          </div>
                        </div>
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

        <form class="form" method="post" action="" enctype="multipart/form-data">
            <label for="titulo">Titulo do Post</label>
            <input class="form-control" type="text" name="titulo"><br>
            <!-- <label for="conteudo">Conteúdo</label> -->
            <textarea class="textarea form-control" name="conteudo" id="" cols="30" rows="10"></textarea>
            <label for="imagem">Imagem (tamanho recomendado: 800x450)</label>
            <input type="file" name="imagem">

            <label for="imagem">Categoria</label>
            <input class="form-control" type="text" name="categoria">

            <label for="imagem">Autor</label>
            <input class="form-control" type="text" name="autor"><br>

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


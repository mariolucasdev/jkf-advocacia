 <section class="page-banner-area page-blog" style="height: 200px">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container" style="height: 200px">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold">
                        <?=$post->titulo?>
                    </h1>
                    <p>Postado em <?=date('d/m/Y', strtotime($post->data))?> por <?=$post->autor?></p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
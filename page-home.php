<?php //Template Name: Home
get_header()
?>

<?php if (have_posts()): while (have_posts()): the_post();?>
<!-- Banner principal -->
<section class="banner mb-3 w-100">
  <div class="container">
    <div class="row position-relative">
      <div class="col-12">
        <h1 style="font-family: EB Garamond;font-style: normal;font-weight: 600;font-size: 24px;line-height: 10px;  margin-bottom: 8px;margin-top: 160px;"><?php the_field('titulo_introducao')?></h1>
        <h1><?php the_field('titulo_introducao_2')?></h1>
        <a class="btn mt-5 btn-roxo" href="#melhores-ofertas">CONFIRA <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></a>
      </div>
    </div>
  </div>
</section>

<!-- Banners redes -->
<section class="container">
  <div class="row justify-content-between">
    <div class="autoplay">
      <div class="col-md-4 mb-5  banner-insta m-2">
        <a href="https://www.instagram.com/beatriz_pedraslapidadas/" target="_blank"> <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/Imagens/Banner-insta2.png" alt="Instagram"></a>
      </div>
      <div class="col-md-4 mb-5 text-center banner-youtube m-2">
        <a href="https://www.youtube.com/channel/UCu7jTtDsViugHih0ZDeVlnA" target="_blank"><img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/Imagens/banner-youtube.png" alt="Youtube"></a>
      </div>
      <div class="col-md-4 mb-5 text-end banner-tiktok m-2">
        <a href="https://www.tiktok.com/@gilbertogilgarimpo?lang=pt-BR" target="_blank"><img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/Imagens/Banner-tiktok.png" alt="TikTok"></a>
      </div>
    </div>
  </div>
</section>
<!-- Melhores Produtos -->
<section id="melhores-ofertas" class="melhores-ofertas bg-cinza pb-5">
  <div class="container">
    <div class="d-flex flex-row">
      <h2 class="pl-h2"><?php the_field('titulo_primeiro_slide')?></h2>
      <div class="linha"></div>
    </div>
    <div class="row">
      <div class="slide">
        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5"><?php the_field('melhores_produtos_1')?></h4>
            <p class="text-center mb-0 mt-1">R$<?php the_field('preco_melhores_produtos_1')?></p>
            <p class="text-center"><?php the_field('cond_pag_melhores_produtos_1')?></p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5"><?php the_field('melhores_produtos_2')?></h4>
            <p class="text-center mb-0 mt-1">R$<?php the_field('preco_melhores_produtos_2')?></p>
            <p class="text-center"><?php the_field('cond_pag_melhores_produtos_2')?></p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5"><?php the_field('melhores_produtos_3')?></h4>
            <p class="text-center mb-0 mt-1">R$<?php the_field('preco_melhores_produtos_3')?></p>
            <p class="text-center"><?php the_field('cond_pag_melhores_produtos_3')?></p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5"><?php the_field('melhores_produtos_4')?></h4>
            <p class="text-center mb-0 mt-1">R$<?php the_field('preco_melhores_produtos_4')?></p>
            <p class="text-center"><?php the_field('cond_pag_melhores_produtos_4')?></p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="pedras-brutas" class="melhores-ofertas bg-cinza pb-5">
  <div class="container">
    <div class="d-flex flex-row">
      <h2 class="pl-h2"><?php the_field('titulo_card')?></h2>
      <div class="linha"></div>
    </div>
    <div class="row">
      <div class="mt-4 col-md-3 d-none d-md-block">
        <div class="card img-brutas">
          <img src="<?php the_field('imagem_card')?>" alt="Pedras brutas">
        </div>
      </div>
      <div class="slide col-md-9">

        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5">ESMERALDA ROXA</h4>
            <p class="text-center mb-0 mt-1">R$999,99</p>
            <p class="text-center">10x de R$99,99</p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>

        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5">ESMERALDA ROXA</h4>
            <p class="text-center mb-0 mt-1">R$999,99</p>
            <p class="text-center">10x de R$99,99</p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5">ESMERALDA ROXA</h4>
            <p class="text-center mb-0 mt-1">R$999,99</p>
            <p class="text-center">10x de R$99,99</p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="pedras-lapidadas" class="melhores-ofertas bg-cinza pb-5">
  <div class="container">
    <div class="d-flex flex-row">
      <h2 class="pl-h2">Pedras Lapidadas</h2>
      <div class="linha"></div>
    </div>
    <div class="row">
      <div class="mt-4 col-md-3 d-none d-md-block">
        <div class="card img-lapidadas">
          <img src="<?php the_field('imagem_principal_pedras_lapidadas')?>" alt="Pedras lapidadas">
        </div>
      </div>
      <div class="slide col-md-9">

        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5">ESMERALDA ROXA</h4>
            <p class="text-center mb-0 mt-1">R$999,99</p>
            <p class="text-center">10x de R$99,99</p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5">ESMERALDA ROXA</h4>
            <p class="text-center mb-0 mt-1">R$999,99</p>
            <p class="text-center">10x de R$99,99</p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
        <div class=" mt-4">
          <div class="card">
            <div class="foto">

            </div>
            <h4 class="text-center mt-5">ESMERALDA ROXA</h4>
            <p class="text-center mb-0 mt-1">R$999,99</p>
            <p class="text-center">10x de R$99,99</p>
            <div class="linha-horizontal"></div>
            <a class="btn btn-roxo btn-card" href="#">ADICIONAR AO CARRINHO</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile;else:endif;?>

<?php get_footer()?>
<?php //Template Name: Loja
get_header()
?>

<?php if (have_posts()): while (have_posts()): the_post();?>
																  <!-- Breadcrumb -->
																  <section class="bg-cinza-escuro py-1">
																    <div class="container">
																      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
																        <ol class="breadcrumb">
																          <li class="breadcrumb-item"><a class="text-light" href="http://gilberto-gil-pedras-preciosas.local/">Home</a></li>
																          <li class="breadcrumb-item active text-light" aria-current="page">Loja</li>
																        </ol>
																      </nav>
																    </div>
																  </section>
																  <!-- Loja -->
																<?php include TEMPLATEPATH . "/inc/introducao.php";?>

																	<style type="text/css">
																	.bg-loja {
																		background: url("<?php the_field('background_interna');?>") center;
																		background-size: cover;
																		height: 240px;
																	}
																	</style>
																  <section class="loja bg-cinza pb-5">
																    <div class="container">
																      <div class="row justify-content-center">
																        <div class="col-8 py-5 d-none d-sm-block">
																          <h2><span><?php the_field('titulo_interna')?></span></h2>
																        </div>
																      </div>
																      <!-- Sidebar e produtos -->
																      <div class="row justify-content-end">
																        <div class="col-2 mt-4 bg-branco sidebar p-0 d-none d-sm-block">
																          <div class="accordion mt-4" id="accordionExample">
																            <div class="mt-4 ml-2 pl-cat d-flex">
																              <div>
																                <img src="Imagens/icones/lista.svg" alt="">
																              </div>
																              <div>
																                <h4 class="line-h-0 mb-0"><?php the_field('titulo_menu_sidebar')?></h4>
																              </div>
																            </div>
																            <div class="sidebar-sep my-3">
																            </div>
																            <div class="accordion-item border-0">
																              <h2 class="accordion-header border-0 m-0" id="headingOne">
																                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																                  <strong> PEDRAS BRUTAS</strong>
																                </button>
																              </h2>
																              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
																                <div class="accordion-body">
																                  <code>
																                      <ul>
																                        <li><a href="#">Turmalinas</a></li>
																                      </ul>
																                    </code>
																                </div>
																              </div>
																            </div>
																            <div class="accordion-item border-0">
																              <h2 class="accordion-header border-0 m-0" id="headingTwo">
																                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																                  <strong>PEDRAS LAPIDADAS</strong>
																                </button>
																              </h2>
																              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
																                <div class="accordion-body">
																                  <code>
																                        <ul>
																                          <li><a href="#">Turmalinas</a></li>
																                        </ul>
																                    </code>
																                </div>
																              </div>
																            </div>
																            <div class="accordion-item border-0">
																              <h2 class="accordion-header border-0 m-0" id="headingThree">
																                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																                  <strong>ESMERALDAS</strong>
																                </button>
																              </h2>
																              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
																                <div class="accordion-body">
																                  <code>
																                      <ul>
																                        <li><a href="#">Esmeraldas</a></li>
																                      </ul>
																                  </code>
																                </div>
																              </div>
																            </div>
																            <div class="accordion-item border-0">
																              <h2 class="accordion-header border-0 m-0" id="headingfour">
																                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
																                  <strong>RUBIS</strong>
																                </button>
																              </h2>
																              <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
																                <div class="accordion-body">
																                  <code>
																                      <ul>
																                        <li><a href="#">Rubi</a></li>
																                      </ul>
																                  </code>
																                </div>
																              </div>
																            </div>
																            <div class="accordion-item border-0">
																              <h2 class="accordion-header border-0 m-0" id="headingfive">
																                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
																                  <strong>SAFIRAS</strong>
																                </button>
																              </h2>
																              <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
																                <div class="accordion-body">
																                  <code>
																                      <ul>
																                        <li><a href="#">Safira</a></li>
																                      </ul>
																                  </code>
																                </div>
																              </div>
																            </div>
																          </div>
																        </div>
																        <div class="slide col-md-10">
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
																      <div class="row justify-content-end">
																        <div class="slide col-md-10">
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
																      <div class="row justify-content-end">
																        <div class="slide col-md-10">
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
																      <div class="row justify-content-end">
																        <div class="slide col-md-10">
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
																    </div>
																    </div>
																  </section>

																  <?php endwhile;else:endif;?>

  <?php get_footer()?>
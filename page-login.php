<?php //Template Name: Login 
get_header() 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Breadcrumb -->
  <section class="bg-cinza-escuro py-1">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-light" href="http://gilberto-gil-pedras-preciosas.local/">Home</a></li>
          <li class="breadcrumb-item active text-light" aria-current="page">Login</li>
        </ol>
      </nav>
    </div>
  </section>
  <!-- Login -->
  <section class="bg-cinza">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 mt-3">
          <div class="row caixa-login bg-white mb-5">
            <div class="col-md-6 pt-5 pb-md-5 padding-r-0">
              <div class="text-center mb-4">
                <svg width="70" height="70" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.5 0C5.6075 0 0 5.6075 0 12.5C0 15.5187 1.07583 18.2908 2.86417 20.4533C2.86875 20.4596 2.86917 20.4675 2.87417 20.4733C4.16542 22.0304 5.78708 23.2242 7.59417 23.9954C7.615 24.0042 7.63542 24.0138 7.65625 24.0225C7.8025 24.0842 7.95042 24.1413 8.09875 24.1971C8.15708 24.2192 8.21542 24.2417 8.27458 24.2629C8.4025 24.3087 8.53125 24.3521 8.66083 24.3937C8.74375 24.4204 8.82667 24.4467 8.91042 24.4717C9.025 24.5058 9.14 24.5387 9.25583 24.57C9.3575 24.5975 9.46 24.6229 9.5625 24.6475C9.66625 24.6725 9.77042 24.6975 9.875 24.7196C9.99167 24.7446 10.1096 24.7667 10.2279 24.7883C10.3229 24.8058 10.4175 24.8242 10.5133 24.8396C10.6446 24.8608 10.7767 24.8775 10.9092 24.8946C10.9946 24.9054 11.0796 24.9179 11.1654 24.9271C11.3154 24.9429 11.4667 24.9542 11.6183 24.9646C11.6888 24.9696 11.7587 24.9771 11.8296 24.9808C12.0508 24.9933 12.2746 25 12.5 25C12.7254 25 12.9492 24.9933 13.1712 24.9817C13.2421 24.9779 13.3121 24.9704 13.3825 24.9654C13.5342 24.9546 13.6854 24.9437 13.8354 24.9279C13.9213 24.9187 14.0062 24.9062 14.0917 24.8954C14.2242 24.8783 14.3562 24.8617 14.4875 24.8404C14.5829 24.825 14.6779 24.8067 14.7729 24.7892C14.8908 24.7675 15.0087 24.7454 15.1258 24.7204C15.2304 24.6979 15.3342 24.6733 15.4383 24.6483C15.5408 24.6233 15.6433 24.5979 15.745 24.5708C15.8608 24.54 15.9758 24.5067 16.0904 24.4725C16.1742 24.4475 16.2571 24.4212 16.34 24.3946C16.4696 24.3529 16.5983 24.3096 16.7262 24.2638C16.785 24.2425 16.8433 24.22 16.9021 24.1979C17.0508 24.1421 17.1983 24.0846 17.3446 24.0233C17.3654 24.0146 17.3858 24.005 17.4067 23.9963C19.2133 23.225 20.8354 22.0312 22.1267 20.4742C22.1317 20.4683 22.1321 20.46 22.1367 20.4542C23.9242 18.2908 25 15.5187 25 12.5C25 5.6075 19.3925 0 12.5 0ZM17.5654 23.0083C17.5592 23.0112 17.5533 23.0146 17.5471 23.0175C17.3983 23.0892 17.2471 23.1567 17.0946 23.2225C17.06 23.2371 17.0258 23.2521 16.9912 23.2667C16.8579 23.3225 16.7229 23.3754 16.5871 23.4262C16.5304 23.4475 16.4738 23.4683 16.4167 23.4883C16.2962 23.5312 16.1754 23.5725 16.0533 23.6117C15.9775 23.6358 15.9012 23.6587 15.825 23.6812C15.7167 23.7137 15.6079 23.745 15.4979 23.7742C15.4054 23.7987 15.3121 23.8212 15.2188 23.8433C15.1208 23.8667 15.0233 23.8904 14.9246 23.9112C14.8167 23.9342 14.7079 23.9537 14.5996 23.9733C14.5117 23.9896 14.4242 24.0067 14.3354 24.0208C14.2133 24.04 14.09 24.0554 13.9671 24.0708C13.8892 24.0808 13.8117 24.0925 13.7329 24.1008C13.5925 24.1158 13.4508 24.1254 13.3096 24.1354C13.2467 24.1396 13.1842 24.1467 13.1204 24.15C12.9142 24.1608 12.7075 24.1667 12.5 24.1667C12.2925 24.1667 12.0858 24.1608 11.88 24.15C11.8167 24.1467 11.7542 24.14 11.6908 24.1354C11.5492 24.1258 11.4079 24.1158 11.2675 24.1008C11.1887 24.0925 11.1112 24.0808 11.0333 24.0708C10.9104 24.0554 10.7871 24.04 10.665 24.0208C10.5763 24.0067 10.4887 23.9896 10.4008 23.9733C10.2921 23.9537 10.1833 23.9338 10.0758 23.9112C9.97708 23.8904 9.87917 23.8667 9.78167 23.8433C9.68833 23.8208 9.595 23.7987 9.5025 23.7742C9.39292 23.745 9.28375 23.7133 9.17542 23.6812C9.09917 23.6587 9.02292 23.6358 8.94708 23.6117C8.825 23.5725 8.70375 23.5312 8.58375 23.4883C8.52667 23.4679 8.47 23.4471 8.41333 23.4262C8.2775 23.3754 8.1425 23.3225 8.00917 23.2667C7.97458 23.2525 7.94083 23.2375 7.90625 23.2229C7.75375 23.1575 7.6025 23.0896 7.45333 23.0179C7.44708 23.015 7.44125 23.0121 7.435 23.0087C5.98125 22.3054 4.69708 21.3071 3.655 20.0946C4.46042 17.1287 6.74042 14.7379 9.67375 13.7867C9.73167 13.8221 9.79208 13.8537 9.85167 13.8871C9.88667 13.9067 9.92125 13.9275 9.95667 13.9462C10.0808 14.0121 10.2067 14.0737 10.3354 14.1292C10.4342 14.1725 10.5363 14.2092 10.6379 14.2467C10.6579 14.2537 10.6779 14.2617 10.6979 14.2687C11.2629 14.4687 11.8675 14.5833 12.5 14.5833C13.1325 14.5833 13.7371 14.4687 14.3017 14.2687C14.3217 14.2617 14.3417 14.2537 14.3617 14.2467C14.4633 14.2092 14.5654 14.1725 14.6642 14.1292C14.7929 14.0737 14.9187 14.0121 15.0429 13.9462C15.0783 13.9271 15.1129 13.9067 15.1479 13.8871C15.2075 13.8537 15.2683 13.8221 15.3267 13.7863C18.26 14.7379 20.5396 17.1287 21.3454 20.0942C20.3033 21.3062 19.0192 22.3046 17.5654 23.0083ZM7.91667 9.16667C7.91667 6.63958 9.97292 4.58333 12.5 4.58333C15.0271 4.58333 17.0833 6.63958 17.0833 9.16667C17.0833 10.7742 16.2496 12.1887 14.9933 13.0071C14.8292 13.1137 14.6583 13.2092 14.4829 13.2925C14.4621 13.3025 14.4417 13.3129 14.4208 13.3225C13.2142 13.8713 11.7858 13.8713 10.5792 13.3225C10.5583 13.3129 10.5375 13.3025 10.5171 13.2925C10.3412 13.2092 10.1708 13.1137 10.0067 13.0071C8.75042 12.1887 7.91667 10.7742 7.91667 9.16667ZM21.9704 19.3013C21.0258 16.5121 18.8708 14.2579 16.1175 13.1871C17.2188 12.195 17.9167 10.7625 17.9167 9.16667C17.9167 6.18 15.4867 3.75 12.5 3.75C9.51333 3.75 7.08333 6.18 7.08333 9.16667C7.08333 10.7625 7.78125 12.195 8.88292 13.1871C6.12958 14.2583 3.97458 16.5121 3.03 19.3013C1.64958 17.385 0.833333 15.0367 0.833333 12.5C0.833333 6.06708 6.06708 0.833333 12.5 0.833333C18.9329 0.833333 24.1667 6.06708 24.1667 12.5C24.1667 15.0367 23.3504 17.385 21.9704 19.3013Z" fill="#333333" />
                </svg>
              </div>
              <h2 class="text-center mb-5">Minha Conta</h2>
              <form class="px-5">
                <div class="mb-3">
                  <label for="InputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control border-secondary shadow-none" id="InputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Não compartilharemos seu e-mail com mais ninguém.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha</label>
                  <input type="password" class="form-control border-secondary shadow-none" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input shadow-none" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                  <div>
                    <a class="text-danger" href="#">Esqueci minha senha</a>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">ENTRAR</button>
              </form>
            </div>

            <div class="col-md-6 pt-md-5 pb-5 separador-login">
              <h2 class="text-center my-5">Novo por aqui?<br>Crie sua conta.</h2>
              <form class="px-5 mt-4">
                <div class="mb-3">
                  <label for="nomeCompleto" class="form-label">Nome completo</label>
                  <input type="text" class="form-control border-secondary shadow-none" id="nomeCompleto" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="InputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control border-secondary shadow-none" id="InputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Não compartilharemos seu e-mail com mais ninguém.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha</label>
                  <input type="password" class="form-control border-secondary shadow-none" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirme sua senha</label>
                  <input type="password" class="form-control border-secondary shadow-none" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input shadow-none" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Aceito os termos.</label>
                </div>
                <button type="submit" class="btn btn-primary">CRIAR CONTA</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; else: endif; ?>

  <?php get_footer() ?>
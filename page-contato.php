<?php
/**
	Template Name: Contato
*/
get_header();
?>

	<main id="primary" class="site-main">

		<?php if (have_posts()): while ( have_posts() ) : the_post(); ?>
			<!-- Infos -->
			<section class="p-navbar bg-white">
				<div class="container">
					<div class="py-5 text-center">
						<h6>ESTÁ COM DÚVIDAS?</h6>
						<h2 class="display-4 text-primary">Entre em Contato</h2>
					</div>

					<div class="row">
						<div class="col-lg mb-4">
							<form class="bg-dark text-light rounded p-4 box-shadow">
								<div class="form-group">
									<label for="name">Nome</label>
									<input type="text" class="form-control bg-dark text-light" id="name">
								</div>
								<div class="form-group">
									<label for="email-contact">Email</label>
									<input type="email" class="form-control bg-dark text-light" id="email-contact">
								</div>
								<div class="form-group">
									<label for="msg">Mensagem</label>
									<textarea id="msg" class="form-control bg-dark text-light" rows="5"></textarea>
								</div>
								<div class="form-group">
									<label for="verify" hidden="hidden">Se você não é um robô, não mude este campo</label>
									<input type="text" class="form-control bg-dark text-light" id="verify" name="dontchange" hidden="hidden">
								</div>
								<button class="btn btn-light">Enviar Mensagem</button>
							</form>
						</div>

						<div class="col-lg">
							<h2 class="h6">ENDEREÇO</h2>
							<ul class="list-unstyled text-secondary">
								<li>R. Nestor H. Luiz</li>
								<li>Jaguaruna, Santa Catarina - SC</li>
								<li>Próximo ao Fórum</li>
								<li class="h6 mt-3"><a href="https://www.google.com/maps/@-28.6322196,-49.0240717,17z" target="_blank">VER NO MAPA <img class="pl-1" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" alt="Arrow" width="25"></a></li>
							</ul>

							<h2 class="h6">DADOS DE CONTATO</h2>
							<ul class="list-unstyled text-secondary">
								<li>contato@<?php strtolower(bloginfo('name')); ?>.com</li>
								<li>+55 48 99975-1669</li>
								<li>De Segunda à Sexta</li>
								<li>Das 8:00h às 18:00h</li>
							</ul>

							<h2 class="h6">REDES SOCIAIS</h2>
							<ul class="list-unstyled mt-3 social-media-contact">
								<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="https://www.facebook.com/" target="_blank">Facebook</a></li>
								<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="https://twitter.com/" target="_blank">Twitter</a></li>
								<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="https://www.youtube.com/" target="_blank">Youtube</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!-- FAQ -->
			<section class="container" id="faq">
				<div class="my-5 text-center">
					<span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
					<h2 class="display-4 text-primary">Perguntas Frequentes</h2>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6" id="FAQ" data-children=".question">
						<div class="question py-2">
							<a class="lead" data-toggle="collapse" data-parent="#FAQ" href="#question1" aria-expanded="true" aria-controls="question1">→ É possível cancelar a viagem?</a>
							<div id="question1" class="collapse show" role="tabpanel">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
							</div>
						</div>
						<div class="dropdown-divider"></div>
						<div class="question py-2">
							<a class="lead" data-toggle="collapse" data-parent="#FAQ" href="#question2" aria-expanded="true" aria-controls="question2">→ Qual a garantia que tenho se perder o voo?</a>
							<div id="question2" class="collapse" role="tabpanel">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
							</div>
						</div>
						<div class="dropdown-divider"></div>
						<div class="question py-2">
							<a class="lead" data-toggle="collapse" data-parent="#FAQ" href="#question3" aria-expanded="true" aria-controls="question3">→ Qual a principal forma de viagem?</a>
							<div id="question3" class="collapse" role="tabpanel">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
							</div>
						</div>
						<div class="dropdown-divider"></div>
						<div class="question py-2">
							<a class="lead" data-toggle="collapse" data-parent="#FAQ" href="#question4" aria-expanded="true" aria-controls="question4">→ Qual o melhor destino de viagem?</a>
							<div id="question4" class="collapse" role="tabpanel">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
							</div>
						</div>
						<div class="dropdown-divider"></div>
						<div class="question py-2">
							<a class="lead" data-toggle="collapse" data-parent="#FAQ" href="#question5" aria-expanded="true" aria-controls="question5">→ Vocês dão descontos para grupos grandes?</a>
							<div id="question5" class="collapse" role="tabpanel">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p>
							</div>
						</div>
						<div class="dropdown-divider mb-5"></div>
					</div>
				</div>
			</section>
		<?php endwhile; endif; ?>
	</main><!-- #main -->

<?php
get_footer();

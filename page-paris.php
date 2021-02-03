<?php
/**
	Template Name: Paris
*/
get_header();
?>

	<main id="primary" class="site-main">

		<?php if (have_posts()): while ( have_posts() ) : the_post(); ?>
			<!-- Carousel -->
			<section class="container-fluid p-navbar">
				<div class="row bg-dark text-white">
					
					<div class="col-lg-7 p-0">
						<div id="carousel-paris" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/images/paris/paris1.jpg" alt="Paris">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/images/paris/paris2.jpg" alt="Paris">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/images/paris/paris3.jpg" alt="Paris">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carousel-paris" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Anterior</span>
						  </a>
						  <a class="carousel-control-next" href="#carousel-paris" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Próximo</span>
						  </a>
						</div>
					</div>

					<div class="col-lg-5 p-4">
						<h1 class="display-4">Um dos lugares mais bonitos do mundo</h1>
						<p class="lead">Somente com o Traveler você poderá visitar um dos lugares mais bonitos do mundo com um preço imbátivel.</p>
						<form class="pt-4">
							<div class="input-group input-group">
								<input type="text" class="form-control" placeholder="Quer ir para Paris? Digite seu melhor e-mail" aria-label="Email">
								<span class="input-group-append">
									<button class="btn btn-primary disabled" data-toggle="tooltip" title="Recurso em Desenvolvimento" type="button">Inscreva-se</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</section>

			<!-- Events -->
			<section class="bg-white">
				<div class="container">
					<div class="text-center p-5">
						<h6>O MELHOR LUGAR PARA PASSAR SUAS FÉRIAS</h6>
						<h2 class="display-4 text-primary">Eventos em Paris</h2>
					</div>

					<div class="table-responsive mb-5">
						<table class="table table-hover table-responsive-md">
							<thead>
								<tr>
									<th>Data</th>
									<th>Evento</th>
									<th>Local</th>
									<th>Plano</th>
								</tr>
							</thead>
							<tbody>
								<?php $myquery = new WP_Query('category_name=paris'); ?>
								<?php while ($myquery->have_posts()): $myquery->the_post(); ?>
									<tr>
										<td><?= get_post_meta($post->ID, 'data', true) ?></td>
										<td><?= the_title(); ?></td>
										<td><?= get_post_meta($post->ID, 'local', true) ?></td>
										<td><?= get_post_meta($post->ID, 'plano', true) ?></td>
									</tr>
								<?php endwhile; ?> 
							</tbody>
						</table>
					</div>
				</div>
			</section>
		<?php endwhile; endif; ?>
	</main><!-- #main -->

<?php
get_footer();

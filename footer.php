<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Traveler
 */

?>
	<!-- Footer -->
	<footer class="bg-dark text-light"> 
		<div class="container py-4">
			<div class="row">
				<div class="col-md-6">
					<h4 class="h6">NOSSA HISTÓRIA</h4>
					<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum enim sequi ea nulla, obcaecati impedit, a laboriosam. Cumque, aspernatur tenetur eligendi recusandae? Veniam assumenda, ab dolores tempora porro saepe, labore ipsum doloremque, in adipisci suscipit!</p>
				</div>
				<div class="col-md-3">
					<h4 class="h6">CONTATO</h4>
					<ul class="list-unstyled text-secondary">
						<li>contato@<?php strtolower(bloginfo('name')); ?>.com</li>
						<li>+55 48 99975-1669</li>
						<li>De Segunda à Sexta</li>
						<li>Das 8:00h às 18:00h</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4 class="h6">REDES SOCIAIS</h4>
					<ul class="list-unstyled">
						<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2 social-media-footer" href="https://www.facebook.com/" target="_blank">Facebook</a></li>
						<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2 social-media-footer" href="https://twitter.com/" target="_blank">Twitter</a></li>
						<li><a class="btn btn-outline-secondary btn-sm btn-block mb-2 social-media-footer" href="https://www.youtube.com/" target="_blank">Youtube</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bg-primary text-center py-3">
			<p class="mb-0"><?php printf(esc_html__('%2$s.', 'traveler'), 'traveler', '<a class="text-white" href="https://douglasgoulart.com">Douglas Pinheiro Goulart</a>') ?> - <?php bloginfo('name'); ?> © <?php echo date('Y'); ?>. Todos os direitos reservados.</p>
		</div>
	</footer>	
</div><!-- #page -->

<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>

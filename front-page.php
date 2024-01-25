<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

add_action( 'wp_enqueue_scripts', 'dequeue_storefront_child_theme_style', 9999);

function dequeue_storefront_child_theme_style() {
    wp_dequeue_style('twentytwenty-style');
	wp_dequeue_style('child-style');
	wp_dequeue_style('twentytwenty-print-style');
}

// wp_dequeue_style('style'); // whatever slug you registered your style.css on
wp_enqueue_style('front-page', get_stylesheet_directory_uri() . '/tailwindy/output.css');

get_header();
?>

	<div class="mb-16">
		<div class="bg-gray-100">
			<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
				<div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
					<div>
						<p
							class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
							A Project by George Mason University
						</p>
					</div>
					<h1
						class="max-w-xl mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
						<img src="<?=get_stylesheet_directory_uri() ?>/tailwindy/bruise-typed.png" alt="GMU Bruise website">
					</h1>
					<p class="text-base text-gray-700 md:text-lg">
						Equitable and Accessible Software for Injury Detection (EAS-ID)
					</p>
				</div>
			</div>
		</div>
		<div class="relative px-4 sm:px-0">
			<div class="absolute inset-0 bg-gray-100 h-1/2"></div>
			<div
				class="relative grid mx-auto overflow-hidden bg-white divide-y rounded shadow sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-md">
				<div class="inline-block p-8 text-center">
					<div class="flex items-center justify-center w-24 h-24 mx-auto mb-3 rounded-full bg-indigo-50">
						<div class="avatar">
							<div class="w-24 rounded-full">
								<img src="<?=get_stylesheet_directory_uri() ?>/tailwindy/Dr-Lattanzi.jpg" />
							</div>
						</div>
					</div>
					<p class="font-serif tracking-wider text-lg">
						<a href="https://volgenau.gmu.edu/profiles/dlattanz">David Lattanzi</a>
					</p>
					<p class="text-xs">
						<!--abbr title="Co-Principal Investigator">Co-PI</abbr-->
						Dept. of Civil, Env., & Infrastructure<br>
						College of Engineering
					</p>
				</div>
				<div class="inline-block p-8 text-center">
					<div class="flex items-center justify-center w-24 h-24 mx-auto mb-3 rounded-full bg-indigo-50">
						<div class="avatar">
							<div class="w-24 rounded-full">
								<img src="<?=get_stylesheet_directory_uri() ?>/tailwindy/Dr-Scafide.jpg" />
							</div>
						</div>
					</div>
					<p class="font-serif tracking-wider text-lg">
						<a href="https://publichealth.gmu.edu/profiles/kscafide">Katherine Scafide</a>
					</p>
					<p class="text-xs">
						<!--abbr title="Principal Investigator">PI</abbr><br-->
						School of Nursing<br>College of Public Health
					</p>
				</div>
				<div class="inline-block p-8 text-center">
					<div class="flex items-center justify-center w-24 h-24 mx-auto mb-3 rounded-full bg-indigo-50">
						<div class="avatar">
							<div class="w-24 rounded-full">
								<img src="<?=get_stylesheet_directory_uri() ?>/tailwindy/Dr-Wojtusiak.jpg" />
							</div>
						</div>
					</div>
					<p class="font-serif tracking-wider text-lg">
						<a href="https://publichealth.gmu.edu/profiles/jwojtusi">Janusz Wojtusiak</a>
					</p>
					<p class="text-xs">
						<!--abbr title="Co-Principal Investigator">Co-PI</abbr-->
						<abbr title="The Center for Discovery Science and Health Informatics (DSHI)">DSHI</abbr> & 
						<abbr title="The Machine Learning and Inference Laboratory">MLi Lab</abbr>
						<br>College of Public Health
					</p>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer footer-center p-10 bg-primary text-primary-content">
		<nav class="grid grid-flow-col gap-4">
			<a class="link link-hover">Participate</a>
			<a class="link link-hover">Team</a>
			<a class="link link-hover">About us</a>
		</nav>
		<aside>
			<img src="<?=get_stylesheet_directory_uri() ?>/tailwindy/mason-logo.png" alt="George Mason University Logo">
			<p>4400 University Drive, Fairfax, Virginia 22030</p>
			<p>© 2024</p>
		</aside>
	</footer>

	<?php 
		// print_r( crunchify_print_scripts_styles() );
	?>

<?php
get_footer();

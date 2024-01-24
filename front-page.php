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
						class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
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
					<div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
						<svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
							<polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
								points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
						</svg>
					</div>
					<p class="font-bold tracking-wide text-gray-800">Make it better</p>
				</div>
				<div class="inline-block p-8 text-center">
					<div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
						<svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
							<polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
								points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
						</svg>
					</div>
					<p class="font-bold tracking-wide text-gray-800">Do it faster</p>
				</div>
				<div class="inline-block p-8 text-center">
					<div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
						<svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
							<polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
								points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
						</svg>
					</div>
					<p class="font-bold tracking-wide text-gray-800">Working harder</p>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer footer-center p-10 bg-primary text-primary-content">
		<nav class="grid grid-flow-col gap-4">
			<a class="link link-hover">About us</a>
			<a class="link link-hover">Contact</a>
			<a class="link link-hover">Jobs</a>
			<a class="link link-hover">Press kit</a>
		</nav>
		<aside>
			<img src="<?=get_stylesheet_directory_uri() ?>/tailwindy/mason-logo.png" alt="George Mason University Logo">
			<p>Copyright © 2024 - All right reserved by ACME Industries Ltd</p>
		</aside>
	</footer>

	<?php print_r( crunchify_print_scripts_styles() ); ?>

<?php
get_footer();

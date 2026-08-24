<?php
/**
 * Idiom Digital footer.
 *
 * @package Idiom_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer class="bg-[#F5F3EE] text-[#151515]">
	<div class="mx-auto w-full max-w-[1600px] px-6 py-12 sm:px-8 lg:px-12 lg:py-16">

		<div class="grid grid-cols-1 gap-12 border-b border-[#151515]/15 pb-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-4">
				<a
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
					class="inline-flex items-center gap-1.5 text-2xl font-medium tracking-[-0.04em] text-[#151515] no-underline"
					aria-label="<?php esc_attr_e( 'Idiom Digital home', 'idiom-digital' ); ?>"
				>
					<span>idiom digital</span>
					<span class="idiom-dot" aria-hidden="true"></span>
				</a>
			</div>

			<div class="lg:col-span-3 lg:col-start-7">
				<nav
					class="flex flex-col gap-3 text-base"
					aria-label="<?php esc_attr_e( 'Footer navigation', 'idiom-digital' ); ?>"
				>
					<a class="no-underline transition-opacity hover:opacity-50" href="<?php echo esc_url( home_url( '/work' ) ); ?>">
						Work
					</a>

					<a class="no-underline transition-opacity hover:opacity-50" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
						Services
					</a>

					<a class="no-underline transition-opacity hover:opacity-50" href="<?php echo esc_url( home_url( '/ventures' ) ); ?>">
						Ventures
					</a>

					<a class="no-underline transition-opacity hover:opacity-50" href="<?php echo esc_url( home_url( '/about' ) ); ?>">
						About
					</a>

					<a class="no-underline transition-opacity hover:opacity-50" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
						Contact
					</a>
				</nav>
			</div>

			<div class="lg:col-span-3 lg:col-start-10">
				<div class="flex flex-col gap-3 text-base">
					<a
						href="#"
						class="no-underline transition-opacity hover:opacity-50"
					>
						LinkedIn
					</a>

					<a
						href="#"
						class="no-underline transition-opacity hover:opacity-50"
					>
						Instagram
					</a>
				</div>
			</div>

		</div>

		<div class="flex flex-col gap-4 pt-6 text-sm text-[#747474] sm:flex-row sm:items-center sm:justify-between">

			<p>
				Designed and built by Idiom Digital.
			</p>

			<p>
				&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> Idiom Digital
			</p>

		</div>

	</div>

	<?php wp_footer(); ?>
</footer>

</body>
</html>
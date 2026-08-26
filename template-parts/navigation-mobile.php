<?php
/**
 * Idiom Digital mobile navigation.
 *
 * @package Idiom_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div
	id="mobile-backdrop"
	class="fixed inset-0 z-30 bg-[#151515]/10 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"
	hidden
></div>

<aside
	id="mobile-nav"
	class="fixed inset-x-0 bottom-0 top-[88px] z-40 flex translate-x-full flex-col bg-[#F5F3EE] px-6 pb-8 pt-10 opacity-0 pointer-events-none transition-all duration-300 sm:px-8 lg:hidden"
	aria-hidden="true"
>
	<nav
	class="idiom-mobile-nav flex flex-col gap-4 text-[clamp(2.75rem,12vw,5rem)] font-medium leading-[1.05] tracking-[-0.05em] text-[#151515] [&_a]:no-underline"
	aria-label="<?php esc_attr_e( 'Mobile Primary Menu', 'idiom-digital' ); ?>"
>
		<?php if ( has_nav_menu( 'primary' ) ) : ?>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'flex flex-col gap-1',
					'container'      => false,
					'depth'          => 1,
				)
			);
			?>

		<?php else : ?>

			<a
				class="mobile-stagger transition-opacity hover:opacity-50"
				href="<?php echo esc_url( home_url( '/work' ) ); ?>"
			>
				Work
			</a>

			<a
				class="mobile-stagger transition-opacity hover:opacity-50"
				href="<?php echo esc_url( home_url( '/services' ) ); ?>"
			>
				Services
			</a>

			<a
				class="mobile-stagger transition-opacity hover:opacity-50"
				href="<?php echo esc_url( home_url( '/ventures' ) ); ?>"
			>
				Ventures
			</a>

			<a
				class="mobile-stagger transition-opacity hover:opacity-50"
				href="<?php echo esc_url( home_url( '/about' ) ); ?>"
			>
				About
			</a>

			<a
				class="mobile-stagger transition-opacity hover:opacity-50"
				href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
			>
				Contact
			</a>

		<?php endif; ?>
	</nav>

	<div class="mt-auto border-t border-[#151515]/15 pt-6">
		<p class="mb-3 text-sm text-[#747474]">
			Have something worth building?
		</p>

		<a
			href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
			class="inline-flex items-center gap-2 text-lg font-medium text-[#151515] no-underline transition-opacity hover:opacity-50"
		>
			Start a project
			<span aria-hidden="true">→</span>
		</a>
	</div>
</aside>
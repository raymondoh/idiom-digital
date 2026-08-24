<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 bg-[#F5F3EE] text-[#151515]">
	<div class="mx-auto flex h-[88px] w-full max-w-[1600px] items-center justify-between px-6 sm:px-8 lg:px-12">
<a
	href="<?php echo esc_url( home_url( '/' ) ); ?>"
	class="inline-flex items-baseline gap-1.5 text-2xl font-medium tracking-[-0.04em] text-[#151515] no-underline"
	aria-label="<?php esc_attr_e( 'Idiom Digital home', 'idiom-digital' ); ?>"
>
	<span>idiom digital</span>
	<span class="idiom-dot" aria-hidden="true"></span>
</a>

		<nav
			class="hidden items-center gap-8 text-[15px] font-medium lg:flex"
			aria-label="<?php esc_attr_e( 'Primary Menu', 'idiom-digital' ); ?>"
		>
			<?php if ( has_nav_menu( 'primary' ) ) : ?>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'flex items-center gap-8',
						'container'      => false,
						'depth'          => 1,
					)
				);
				?>

			<?php else : ?>

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

			<?php endif; ?>
		</nav>

		<button
			id="mobile-nav-toggle"
			type="button"
			class="inline-flex h-11 w-11 items-center justify-center text-[#151515] lg:hidden"
			aria-controls="mobile-nav"
			aria-expanded="false"
		>
			<span class="sr-only">
				<?php esc_html_e( 'Toggle navigation', 'idiom-digital' ); ?>
			</span>

			<span id="icon-open" aria-hidden="true">
				<svg
					class="h-7 w-7"
					fill="none"
					stroke="currentColor"
					stroke-linecap="round"
					stroke-width="1.5"
					viewBox="0 0 24 24"
				>
					<path d="M4 8h16M4 16h16" />
				</svg>
			</span>

			<span id="icon-close" class="hidden" aria-hidden="true">
				<svg
					class="h-7 w-7"
					fill="none"
					stroke="currentColor"
					stroke-linecap="round"
					stroke-width="1.5"
					viewBox="0 0 24 24"
				>
					<path d="M6 6l12 12M18 6L6 18" />
				</svg>
			</span>
		</button>

	</div>

	<span class="sr-only hidden -translate-x-4 translate-x-0 translate-x-full opacity-0 opacity-100 pointer-events-none pointer-events-auto overflow-hidden"></span>
</header>

<?php get_template_part( 'template-parts/navigation-mobile' ); ?>
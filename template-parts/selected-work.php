<?php
/**
 * Idiom Digital selected work.
 *
 * @package Idiom_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="work" class="bg-[#F5F3EE] text-[#151515]">
	<div class="mx-auto w-full max-w-[1600px] px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

		<div class="mb-14 flex items-center justify-between border-b border-[#151515]/15 pb-5 lg:mb-20">
			<div>
				<p class="mb-2 text-sm text-[#747474]">
					/work
				</p>

				<h2 class="reveal m-0 text-2xl font-medium tracking-[-0.03em]">
					Selected work
				</h2>
			</div>

			<span class="idiom-dot" aria-hidden="true"></span>
		</div>

		<article>

			<p class="mb-5 text-sm text-[#747474]">
				01 / Plumbers Portal
			</p>

			<div class="reveal-image relative overflow-hidden bg-[#DDE6F3] px-4 py-8 sm:px-8 sm:py-12 lg:px-16 lg:py-20">

				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/work/plumbers-portal/plumbers-portal-home.png' ); ?>"
					alt="Plumbers Portal public homepage interface"
					class="block w-full shadow-[0_30px_80px_rgba(21,21,21,0.18)]"
				>

				<div class="mt-5 w-full lg:absolute lg:bottom-10 lg:right-10 lg:mt-0 lg:w-[54%]">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/work/plumbers-portal/plumbers-portal-admin.png' ); ?>"
						alt="Plumbers Portal admin dashboard interface"
						class="block w-full shadow-[0_24px_60px_rgba(21,21,21,0.24)]"
					>
				</div>

			</div>

			<div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-12">

				<div class="lg:col-span-5">
					<h3 class="m-0 text-3xl font-medium tracking-[-0.04em] sm:text-4xl">
						Plumbers Portal
					</h3>

					<p class="mt-2 text-sm text-[#747474]">
						Marketplace platform
					</p>
				</div>

				<div class="lg:col-span-5 lg:col-start-8">
					<p class="max-w-lg text-lg leading-relaxed text-[#5B5B5B]">
						A marketplace designed and developed to connect customers
						with professional plumbers.
					</p>

					<p class="mt-5 text-sm leading-relaxed text-[#747474]">
						Product strategy · UX/UI · Development · Payments
					</p>

					<a
						href="<?php echo esc_url( home_url( '/work/plumbers-portal' ) ); ?>"
						class="mt-7 inline-flex items-center gap-2 font-medium text-[#151515] no-underline transition-opacity hover:opacity-50"
					>
						View project
						<span aria-hidden="true">→</span>
					</a>
				</div>

			</div>

		</article>

	</div>
</section>
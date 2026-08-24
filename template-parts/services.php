<?php
/**
 * Idiom Digital services section.
 *
 * @package Idiom_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="services" class="bg-[#F5F3EE] text-[#151515]">
	<div class="mx-auto w-full max-w-[1600px] px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

		<div class="mb-14 lg:mb-20">
			<p class="mb-5 text-sm text-[#747474]">
				/services
			</p>

			<h2 class="m-0 text-[clamp(3rem,6vw,6rem)] font-medium leading-[0.95] tracking-[-0.055em]">
				What we build.
			</h2>
		</div>

		<div class="border-t border-[#151515]/15">

			<a
				href="<?php echo esc_url( home_url( '/services/websites' ) ); ?>"
				class="group grid grid-cols-1 gap-6 border-b border-[#151515]/15 py-10 text-[#151515] no-underline transition-opacity hover:opacity-60 lg:grid-cols-12 lg:items-center lg:py-14"
			>
				<div class="text-sm text-[#747474] lg:col-span-1">
					01
				</div>

				<h3 class="m-0 text-4xl font-medium tracking-[-0.045em] sm:text-5xl lg:col-span-4">
					Websites
				</h3>

				<p class="max-w-xl text-lg leading-relaxed text-[#5B5B5B] lg:col-span-5">
					Thoughtful websites for businesses, organisations and growing brands.
				</p>

				<div class="flex justify-start lg:col-span-2 lg:justify-end">
					<span
						class="inline-block text-2xl transition-transform duration-300 group-hover:translate-x-2"
						aria-hidden="true"
					>
						→
					</span>
				</div>
			</a>

			<a
				href="<?php echo esc_url( home_url( '/services/web-applications' ) ); ?>"
				class="group grid grid-cols-1 gap-6 border-b border-[#151515]/15 py-10 text-[#151515] no-underline transition-opacity hover:opacity-60 lg:grid-cols-12 lg:items-center lg:py-14"
			>
				<div class="text-sm text-[#747474] lg:col-span-1">
					02
				</div>

				<h3 class="m-0 text-4xl font-medium tracking-[-0.045em] sm:text-5xl lg:col-span-4">
					Web applications
				</h3>

				<p class="max-w-xl text-lg leading-relaxed text-[#5B5B5B] lg:col-span-5">
					Platforms, marketplaces, portals and bespoke systems built around real workflows.
				</p>

				<div class="flex justify-start lg:col-span-2 lg:justify-end">
					<span
						class="inline-block text-2xl transition-transform duration-300 group-hover:translate-x-2"
						aria-hidden="true"
					>
						→
					</span>
				</div>
			</a>

			<a
				href="<?php echo esc_url( home_url( '/services/digital-products' ) ); ?>"
				class="group grid grid-cols-1 gap-6 border-b border-[#151515]/15 py-10 text-[#151515] no-underline transition-opacity hover:opacity-60 lg:grid-cols-12 lg:items-center lg:py-14"
			>
				<div class="text-sm text-[#747474] lg:col-span-1">
					03
				</div>

				<h3 class="m-0 text-4xl font-medium tracking-[-0.045em] sm:text-5xl lg:col-span-4">
					Digital products
				</h3>

				<p class="max-w-xl text-lg leading-relaxed text-[#5B5B5B] lg:col-span-5">
					From the first idea through product design, development, testing and launch.
				</p>

				<div class="flex justify-start lg:col-span-2 lg:justify-end">
					<span
						class="inline-block text-2xl transition-transform duration-300 group-hover:translate-x-2"
						aria-hidden="true"
					>
						→
					</span>
				</div>
			</a>

		</div>

	</div>
</section>
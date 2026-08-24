<?php
/**
 * Idiom Digital ventures section.
 *
 * @package Idiom_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section id="ventures" class="bg-[#F5F3EE] text-[#151515]">
	<div class="mx-auto w-full max-w-[1600px] px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

		<div class="grid grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-7">
				<p class="mb-5 text-sm text-[#747474]">
					/ventures
				</p>

				<h2 class="m-0 max-w-[10ch] text-[clamp(3.5rem,7vw,7rem)] font-medium leading-[0.92] tracking-[-0.06em]">
					We build our own ideas too.
				</h2>
			</div>

			<div class="flex items-end lg:col-span-4 lg:col-start-9">
				<p class="max-w-md text-lg leading-relaxed text-[#5B5B5B] sm:text-xl">
					Idiom Digital also conceives, develops and operates its own digital products.
				</p>
			</div>

		</div>

		<div class="mt-20 border-t border-[#151515]/15 lg:mt-28">

			<a
				href="<?php echo esc_url( home_url( '/ventures/plumbers-portal' ) ); ?>"
				class="group grid grid-cols-1 gap-5 border-b border-[#151515]/15 py-9 text-[#151515] no-underline lg:grid-cols-12 lg:items-center lg:py-12"
			>
				<div class="text-sm text-[#747474] lg:col-span-1">
					01
				</div>

				<h3 class="m-0 text-4xl font-medium tracking-[-0.045em] sm:text-5xl lg:col-span-5">
					Plumbers Portal
				</h3>

				<p class="text-base text-[#5B5B5B] lg:col-span-3">
					Marketplace platform
				</p>

				<div class="flex items-center gap-3 lg:col-span-3 lg:justify-end">
					<span class="text-sm text-[#747474]">
						Launching
					</span>

					<span
						class="text-2xl transition-transform duration-300 group-hover:translate-x-2"
						aria-hidden="true"
					>
						→
					</span>
				</div>
			</a>

			<a
				href="<?php echo esc_url( home_url( '/ventures/motostix' ) ); ?>"
				class="group grid grid-cols-1 gap-5 border-b border-[#151515]/15 py-9 text-[#151515] no-underline lg:grid-cols-12 lg:items-center lg:py-12"
			>
				<div class="text-sm text-[#747474] lg:col-span-1">
					02
				</div>

				<h3 class="m-0 text-4xl font-medium tracking-[-0.045em] sm:text-5xl lg:col-span-5">
					Motostix
				</h3>

				<p class="text-base text-[#5B5B5B] lg:col-span-3">
					Digital product
				</p>

				<div class="flex items-center gap-3 lg:col-span-3 lg:justify-end">
					<span class="text-sm text-[#747474]">
						In development
					</span>

					<span
						class="text-2xl transition-transform duration-300 group-hover:translate-x-2"
						aria-hidden="true"
					>
						→
					</span>
				</div>
			</a>

		</div>

	</div>
</section>
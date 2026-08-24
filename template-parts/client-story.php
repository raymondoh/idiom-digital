<?php
/**
 * Idiom Digital client story section.
 *
 * @package Idiom_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="bg-[#F5F3EE] text-[#151515]">
	<div class="mx-auto w-full max-w-[1600px] px-6 py-24 sm:px-8 lg:px-12 lg:py-32">

		<div class="mb-10 flex items-center justify-between border-b border-[#151515]/15 pb-5 lg:mb-16">
			<div>
				<p class="mb-2 text-sm text-[#747474]">
					/client story
				</p>

				<h2 class="m-0 text-2xl font-medium tracking-[-0.03em]">
					Working together
				</h2>
			</div>

			<span class="idiom-dot" aria-hidden="true"></span>
		</div>

		<div class="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-12">

			<div class="lg:col-span-6">
				<div class="aspect-[4/5] overflow-hidden">
	<img
		src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/client-stories/andrew.jpg' ); ?>"
		alt="Client speaking in front of artwork in a studio environment"
		class="h-full w-full object-cover object-center"
	>
</div>
			</div>

			<div class="flex flex-col justify-between lg:col-span-5 lg:col-start-8">

				<blockquote class="m-0">
					<p class="text-[clamp(2.5rem,4.5vw,5rem)] font-medium leading-[1.02] tracking-[-0.05em] text-[#151515]">
						“Idiom understood what we needed and turned it into something clear, useful and easy to work with.”
					</p>
				</blockquote>

				<div class="mt-12 border-t border-[#151515]/15 pt-6 lg:mt-20">

					<p class="text-base font-medium">
						Client Name
					</p>

					<p class="mt-1 text-sm text-[#747474]">
						Company Name
					</p>

					<a
						href="<?php echo esc_url( home_url( '/work' ) ); ?>"
						class="mt-6 inline-flex items-center gap-2 font-medium text-[#151515] no-underline transition-opacity hover:opacity-50"
					>
						View their project
						<span aria-hidden="true">→</span>
					</a>

				</div>

			</div>

		</div>

	</div>
</section>
<?php
/**
 * Template for the Work page.
 *
 * @package Idiom_Digital
 */

get_header();
?>

<main class="bg-[#F5F3EE] text-[#151515]">

	<section class="px-6 py-24 sm:px-8 lg:px-12 lg:py-32">
		<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-3">
				<p class="m-0 text-sm font-medium tracking-[0.08em] text-[#747474">
					<span class="text-[#93CF9E]">/</span> work
				</p>
			</div>

			<div class="lg:col-span-8 lg:col-start-5">
				<h1 class="m-0 max-w-[10ch] text-[clamp(4rem,8vw,8.5rem)] font-medium leading-[0.9] tracking-[-0.06em]">
					Selected work.
				</h1>

				<p class="mt-8 max-w-2xl text-lg leading-relaxed text-[#5B5B5B] sm:text-xl">
					Websites, platforms and digital products shaped around real problems,
					real users and practical outcomes.
				</p>
			</div>

		</div>
	</section>

	<section class="px-6 pb-24 sm:px-8 lg:px-12 lg:pb-32">
		<div class="mx-auto max-w-[1600px]">

			<article>

				<div class="mb-6 flex items-center justify-between gap-6 border-t border-[#D5D1C8] pt-6">
					<p class="m-0 text-sm font-medium tracking-[0.08em] text-[#747474">
						01 / Marketplace platform
					</p>

					<p class="m-0 text-sm text-[#747474]">
						Plumbers Portal
					</p>
				</div>

				<a
					href="<?php echo esc_url( home_url( '/work/plumbers-portal/' ) ); ?>"
					class="group block no-underline"
				>
					<div class="relative overflow-hidden bg-[#DDE6F3] px-4 py-8 sm:px-8 sm:py-12 lg:px-16 lg:py-20">

						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/work/plumbers-portal/plumbers-portal-home.png' ); ?>"
							alt="Plumbers Portal homepage"
							class="block w-full shadow-[0_30px_80px_rgba(21,21,21,0.18)]"
						>

						<div class="mt-5 w-full lg:absolute lg:bottom-10 lg:right-10 lg:mt-0 lg:w-[54%]">
							<img
								src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/work/plumbers-portal/plumbers-portal-admin.png' ); ?>"
								alt="Plumbers Portal admin dashboard"
								class="block w-full shadow-[0_24px_60px_rgba(21,21,21,0.24)]"
							>
						</div>

					</div>
				</a>

				<div class="grid grid-cols-1 gap-10 py-10 lg:grid-cols-12 lg:gap-8 lg:py-14">

					<div class="lg:col-span-5">
						<h2 class="m-0 text-[clamp(2.5rem,4.5vw,5rem)] font-medium leading-[0.95] tracking-[-0.05em]">
							Plumbers Portal
						</h2>
					</div>

					<div class="lg:col-span-5 lg:col-start-7">
						<p class="m-0 max-w-xl text-lg leading-relaxed text-[#5B5B5B]">
							A marketplace designed and developed to connect customers with
							professional plumbers through quoting, payments, profiles and
							job management.
						</p>

						<p class="mt-6 text-sm leading-relaxed text-[#747474]">
							Product strategy · UX/UI · Development · Payments
						</p>

						<a
							href="<?php echo esc_url( home_url( '/work/plumbers-portal/' ) ); ?>"
							class="group mt-8 inline-flex items-center gap-3 font-medium text-[#151515] no-underline"
						>
							View project
							<span
								class="inline-block transition-transform duration-200 group-hover:translate-x-2"
								aria-hidden="true"
							>
								→
							</span>
						</a>
					</div>

				</div>

			</article>

		</div>
	</section>

</main>

<?php
get_footer();
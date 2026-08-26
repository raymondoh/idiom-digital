<?php
/**
 * Template for the Services page.
 *
 * @package Idiom_Digital
 */

get_header();
?>

<main class="bg-[#F5F3EE] text-[#151515]">

	<section class="px-6 py-24 sm:px-8 lg:px-12 lg:py-32">
		<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-3">
				<p class="m-0 text-sm font-medium tracking-[0.08em] text-[#747474]">
					<span class="text-[#93CF9E]">/</span> services
				</p>
			</div>

			<div class="lg:col-span-8 lg:col-start-5">
				<h1 class="m-0 max-w-[10ch] text-[clamp(4rem,8vw,8.5rem)] font-medium leading-[0.9] tracking-[-0.06em]">
					What we build.
				</h1>

				<p class="mt-8 max-w-2xl text-lg leading-relaxed text-[#5B5B5B] sm:text-xl">
					Websites, web applications and digital products — shaped around what the
					project actually needs, not around a pre-selected technology or template.
				</p>
			</div>

		</div>
	</section>

	<section class="px-6 pb-24 sm:px-8 lg:px-12 lg:pb-32">
		<div class="mx-auto max-w-[1600px] border-t border-[#D5D1C8]">

			<article class="grid grid-cols-1 gap-8 border-b border-[#D5D1C8] py-12 lg:grid-cols-12 lg:gap-8 lg:py-16">
				<div class="lg:col-span-1">
					<p class="m-0 text-sm text-[#747474]">
						01
					</p>
				</div>

				<div class="lg:col-span-4 lg:col-start-3">
					<h2 class="m-0 text-[clamp(2.75rem,4.5vw,5rem)] font-medium leading-[0.95] tracking-[-0.05em]">
						Websites
					</h2>
				</div>

				<div class="lg:col-span-5 lg:col-start-8">
					<p class="m-0 text-lg leading-relaxed text-[#5B5B5B]">
						Thoughtful websites for businesses, organisations and growing brands —
						clear, fast and designed to do a real job.
					</p>

					<a
						href="<?php echo esc_url( home_url( '/services/websites/' ) ); ?>"
						class="group mt-8 inline-flex items-center gap-3 font-medium text-[#151515] no-underline"
					>
						Explore websites
						<span
							class="inline-block transition-transform duration-200 group-hover:translate-x-2"
							aria-hidden="true"
						>
							→
						</span>
					</a>
				</div>
			</article>

			<article class="grid grid-cols-1 gap-8 border-b border-[#D5D1C8] py-12 lg:grid-cols-12 lg:gap-8 lg:py-16">
				<div class="lg:col-span-1">
					<p class="m-0 text-sm text-[#747474]">
						02
					</p>
				</div>

				<div class="lg:col-span-4 lg:col-start-3">
					<h2 class="m-0 text-[clamp(2.75rem,4.5vw,5rem)] font-medium leading-[0.95] tracking-[-0.05em]">
						Web applications
					</h2>
				</div>

				<div class="lg:col-span-5 lg:col-start-8">
					<p class="m-0 text-lg leading-relaxed text-[#5B5B5B]">
						Platforms, marketplaces, portals and bespoke systems built around real
						workflows and the people who use them.
					</p>

					<a
						href="<?php echo esc_url( home_url( '/services/web-applications/' ) ); ?>"
						class="group mt-8 inline-flex items-center gap-3 font-medium text-[#151515] no-underline"
					>
						Explore web applications
						<span
							class="inline-block transition-transform duration-200 group-hover:translate-x-2"
							aria-hidden="true"
						>
							→
						</span>
					</a>
				</div>
			</article>

			<article class="grid grid-cols-1 gap-8 border-b border-[#D5D1C8] py-12 lg:grid-cols-12 lg:gap-8 lg:py-16">
				<div class="lg:col-span-1">
					<p class="m-0 text-sm text-[#747474]">
						03
					</p>
				</div>

				<div class="lg:col-span-4 lg:col-start-3">
					<h2 class="m-0 text-[clamp(2.75rem,4.5vw,5rem)] font-medium leading-[0.95] tracking-[-0.05em]">
						Digital products
					</h2>
				</div>

				<div class="lg:col-span-5 lg:col-start-8">
					<p class="m-0 text-lg leading-relaxed text-[#5B5B5B]">
						From the first idea through product design, development, testing and
						launch — with the thinking and implementation kept connected.
					</p>

					<a
						href="<?php echo esc_url( home_url( '/services/digital-products/' ) ); ?>"
						class="group mt-8 inline-flex items-center gap-3 font-medium text-[#151515] no-underline"
					>
						Explore digital products
						<span
							class="inline-block transition-transform duration-200 group-hover:translate-x-2"
							aria-hidden="true"
						>
							→
						</span>
					</a>
				</div>
			</article>

		</div>
	</section>

	<section class="bg-[#1C1C1C] px-6 py-24 text-[#F5F3EE] sm:px-8 lg:px-12 lg:py-32">
		<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-3">
				<p class="m-0 text-sm font-medium tracking-[0.08em] text-[#A6A6A6]">
					/ approach
				</p>
			</div>

			<div class="lg:col-span-7 lg:col-start-5">
				<h2 class="m-0 max-w-[12ch] text-[clamp(3rem,5.5vw,6rem)] font-medium leading-[0.95] tracking-[-0.055em]">
					The technology comes after the problem.
				</h2>

				<p class="mt-8 max-w-2xl text-lg leading-relaxed text-[#C7C7C7] sm:text-xl">
					We start with what needs to work, who needs to use it and what success
					actually looks like. The tools follow from there.
				</p>
			</div>

		</div>
	</section>

	<section class="px-6 py-24 sm:px-8 lg:px-12 lg:py-32">
		<div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">

			<div class="lg:col-span-8">
				<h2 class="m-0 max-w-[11ch] text-[clamp(3.5rem,7vw,7.5rem)] font-medium leading-[0.92] tracking-[-0.06em]">
					Have something worth building?
				</h2>
			</div>

			<div class="flex items-end lg:col-span-3 lg:col-start-10">
				<a
					href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
					class="group inline-flex items-center gap-3 text-lg font-medium text-[#151515] no-underline"
				>
					Start a project
					<span
						class="inline-block transition-transform duration-200 group-hover:translate-x-2"
						aria-hidden="true"
					>
						→
					</span>
				</a>
			</div>

		</div>
	</section>

</main>

<?php
get_footer();
<x-layout title="Dyka - UI/UX Designer"><main class="mx-auto max-w-[1440px] px-6 md:px-16 lg:px-24">
<section class="hero-landing relative overflow-hidden px-6 pb-16 pt-14 md:px-16 md:pb-24 md:pt-20 lg:px-24">@if (file_exists(public_path('images/wave-lines.png')))<img class="hero-wave-image object-cover object-center" src="{{ asset('images/wave-lines.png') }}" alt="">@else<div class="wave-lines"></div>@endif<div class="hero-orbit hero-orbit--one"></div><div class="hero-orbit hero-orbit--two"></div><div class="relative z-10 mx-auto max-w-[1120px]"><div class="hero-topline hero-reveal"><p class="eyebrow">Independent UI/UX designer</p><p class="hero-topline-note"><span class="hero-status-dot"></span> Available for select projects</p></div><div class="hero-grid"><div class="hero-copy"><h1 class="hero-title hero-reveal">Ideas in. <span>Clarity out.</span></h1><p class="hero-intro hero-reveal">I design digital products with a sharp point of view, turning messy problems into experiences people want to come back to.</p><div class="hero-actions hero-reveal"><a class="button-blue hero-primary-action" href="#portfolio">See selected work <span aria-hidden="true">&#8594;</span></a><a class="hero-text-action" href="{{ url('/about') }}">Get to know me <span aria-hidden="true">&#8599;</span></a></div></div><div class="hero-radar hero-reveal"><div class="hero-radar__label">Currently exploring <span>01—03</span></div><a class="hero-radar__card hero-radar__card--main {{ $projects['genpro-apps']['color'] }}" href="{{ url('/portfolio/genpro-apps') }}"><span class="hero-radar__index">01 / FEATURED</span><img src="{{ $projects['genpro-apps']['image'] }}" alt="{{ $projects['genpro-apps']['title'] }} preview"><strong>Design that makes care feel simple.</strong><span class="hero-radar__arrow">&#8599;</span></a><a class="hero-radar__card hero-radar__card--small {{ $projects['tuku-tiket-dolan']['color'] }}" href="{{ url('/portfolio/tuku-tiket-dolan') }}"><span class="hero-radar__index">02 / TRAVEL</span><img src="{{ $projects['tuku-tiket-dolan']['image'] }}" alt="{{ $projects['tuku-tiket-dolan']['title'] }} preview"></a><span class="hero-radar__stamp">Make it<br><b>memorable</b></span></div></div><div class="hero-bottomline hero-reveal"><div class="hero-proof"><div><strong>03</strong><span>Selected projects</span></div><div><strong>UI + UX</strong><span>Research to interface</span></div><div><strong>Always</strong><span>Curious by default</span></div></div><a class="hero-scroll-hint" href="#portfolio" aria-label="Scroll to selected work"><span class="hero-scroll-line"></span>Scroll to explore</a></div></div></section>
<section id="portfolio" class="portfolio-showcase pb-24">
	<div class="portfolio-showcase__header">
		<div>
			<p class="eyebrow">Selected work</p>
			<h2 class="section-title mt-3 max-w-xl">Ideas shaped into useful experiences.</h2>
		</div>
		<div class="portfolio-carousel__controls" aria-label="Portfolio carousel controls">
			<button type="button" class="portfolio-carousel__button" data-portfolio-prev aria-label="Previous project">&#8592;</button>
			<button type="button" class="portfolio-carousel__button" data-portfolio-next aria-label="Next project">&#8594;</button>
		</div>
	</div>
	<div class="portfolio-carousel" data-portfolio-carousel>
		<div class="portfolio-carousel__viewport">
			<div class="portfolio-carousel__track" data-portfolio-track>
				@foreach ($projects as $slug => $project)
					<div class="portfolio-carousel__slide" data-portfolio-slide>
						<x-portfolio-card :project="$project" :slug="$slug" carousel :index="$loop->index" :total="$loop->count" />
					</div>
				@endforeach
			</div>
		</div>
		<div class="portfolio-carousel__footer">
			<div class="portfolio-carousel__dots" role="tablist" aria-label="Choose a portfolio project">
				@foreach ($projects as $slug => $project)
					<button type="button" class="portfolio-carousel__dot{{ $loop->first ? ' is-active' : '' }}" data-portfolio-dot="{{ $loop->index }}" role="tab" aria-label="Show {{ $project['title'] }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"></button>
				@endforeach
			</div>
			<p class="portfolio-carousel__counter" data-portfolio-counter aria-live="polite">01 / {{ str_pad((string) count($projects), 2, '0', STR_PAD_LEFT) }}</p>
		</div>
	</div>
</section>
<x-cta /></main></x-layout>

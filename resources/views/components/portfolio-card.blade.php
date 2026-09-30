@if ($carousel ?? false)
    <a href="{{ url('/portfolio/'.$slug) }}" class="portfolio-carousel-card group {{ $project['color'] }}">
        <div class="portfolio-carousel-card__visual">
            <span class="portfolio-carousel-card__index">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }} / {{ str_pad((string) $total, 2, '0', STR_PAD_LEFT) }}</span>
            <div class="portfolio-carousel-card__image-wrap"><img class="portfolio-carousel-card__image" src="{{ $project['image'] }}" alt="{{ $project['title'] }} preview"></div>
        </div>
        <div class="portfolio-carousel-card__content">
            <p class="portfolio-carousel-card__kicker">{{ $project['type'] }}</p>
            <h3>{{ $project['title'] }}</h3>
            <p class="portfolio-carousel-card__tags">{{ implode(' | ', $project['tags']) }}</p>
            <p class="portfolio-carousel-card__description">{{ $project['description'] }}</p>
            <span class="portfolio-carousel-card__link">View case study <span aria-hidden="true">&#8594;</span></span>
        </div>
    </a>
@elseif ($compact ?? false)
    @if ($wide ?? false)
        <a href="{{ url('/portfolio/'.$slug) }}" class="related-project-card related-project-card--wide group grid min-h-[330px] overflow-hidden rounded-xl {{ $project['color'] }} p-6 transition duration-300 hover:-translate-y-1 hover:shadow-xl md:min-h-[398px] md:grid-cols-2 md:items-center md:gap-8 md:p-8">
            <div class="relative mx-auto h-[235px] w-full max-w-[320px] md:h-[300px]"><img class="relative h-full w-full object-contain transition duration-500 group-hover:scale-105" src="{{ $project['image'] }}" alt="{{ $project['title'] }} preview"></div>
            <div class="relative z-10 space-y-2 md:pr-4"><h3 class="text-2xl font-bold leading-tight md:text-3xl">{{ $project['title'] }}</h3><p class="text-[10px] font-semibold text-gray-700 md:text-xs">{{ implode(' | ', $project['tags']) }}</p><p class="max-w-[360px] text-[11px] leading-tight text-gray-700 md:text-xs">{{ $project['description'] }}</p></div>
        </a>
    @else
        <a href="{{ url('/portfolio/'.$slug) }}" class="related-project-card group flex h-full min-h-[330px] flex-col overflow-hidden rounded-xl {{ $project['color'] }} p-5 transition duration-300 hover:-translate-y-1 hover:shadow-xl md:min-h-[384px] md:p-6">
            <div class="relative mx-auto h-[180px] w-full shrink-0 md:h-[195px]"><img class="relative h-full w-full object-contain transition duration-500 group-hover:scale-105" src="{{ $project['image'] }}" alt="{{ $project['title'] }} preview"></div>
            <div class="mt-4 space-y-2"><h3 class="text-xl font-bold leading-tight">{{ $project['title'] }}</h3><p class="text-[10px] font-semibold text-gray-700">{{ implode(' | ', $project['tags']) }}</p><p class="text-[11px] leading-tight text-gray-700">{{ $project['description'] }}</p></div>
        </a>
    @endif
@elseif ($slug === 'genpro-apps')
    <a href="{{ url('/portfolio/'.$slug) }}" class="group grid min-h-[420px] overflow-hidden rounded-3xl {{ $project['color'] }} p-8 transition duration-300 hover:-translate-y-1 hover:shadow-xl lg:min-h-[480px] lg:p-12 md:grid-cols-2 md:items-center md:gap-10">
        <div class="relative z-10 space-y-4"><h3 class="text-2xl font-bold leading-tight tracking-tight md:text-3xl lg:text-4xl">{{ $project['title'] }}</h3><p class="text-sm font-semibold text-gray-500 md:text-base">{{ implode(' | ', $project['tags']) }}</p><p class="max-w-[420px] text-base leading-relaxed text-gray-600 md:text-lg">{{ $project['description'] }}</p></div>
        <div class="relative mx-auto h-[300px] w-full max-w-[420px] md:h-[400px]"><img class="relative h-full w-full object-contain transition duration-500 group-hover:scale-105" src="{{ $project['image'] }}" alt="{{ $project['title'] }} preview"></div>
    </a>
@elseif ($slug === 'angkringan-kita')
    <a href="{{ url('/portfolio/'.$slug) }}" class="group grid min-h-[420px] overflow-hidden rounded-3xl {{ $project['color'] }} p-8 transition duration-300 hover:-translate-y-1 hover:shadow-xl lg:min-h-[480px] lg:p-12 md:grid-cols-2 md:items-center md:gap-10">
        <div class="relative mx-auto h-[300px] w-full max-w-[420px] md:order-first md:h-[400px]"><img class="relative h-full w-full object-contain transition duration-500 group-hover:scale-105" src="{{ $project['image'] }}" alt="{{ $project['title'] }} preview"></div>
        <div class="relative z-10 space-y-4"><h3 class="text-2xl font-bold leading-tight tracking-tight md:text-3xl lg:text-4xl">{{ $project['title'] }}</h3><p class="text-sm font-semibold text-gray-500 md:text-base">{{ implode(' | ', $project['tags']) }}</p><p class="max-w-[420px] text-base leading-relaxed text-gray-600 md:text-lg">{{ $project['description'] }}</p></div>
    </a>
@else
    <a href="{{ url('/portfolio/'.$slug) }}" class="group block overflow-hidden rounded-3xl {{ $project['color'] }} p-8 transition duration-300 hover:-translate-y-1 hover:shadow-xl lg:p-12">
        <div class="relative mx-auto h-[300px] w-full max-w-[520px] md:h-[400px]"><img class="relative h-full w-full object-contain transition duration-500 group-hover:scale-105" src="{{ $project['image'] }}" alt="{{ $project['title'] }} preview"></div>
        <div class="mt-4 space-y-4"><h3 class="max-w-[560px] text-2xl font-bold leading-tight tracking-tight md:text-3xl lg:text-4xl">{{ $project['title'] }}</h3><p class="text-sm font-semibold text-gray-500 md:text-base">{{ implode(' | ', $project['tags']) }}</p><p class="max-w-2xl text-base leading-relaxed text-gray-600 md:text-lg">{{ $project['description'] }}</p></div>
    </a>
@endif

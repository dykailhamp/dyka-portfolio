<x-layout :title="$project['title'].' - Dyka'">
    <main>
        <section class="bg-[#91b5ff] px-6 py-8 md:px-16 md:py-12 lg:px-24">
            <div class="relative left-1/2 w-screen -translate-x-1/2">
                <img class="mx-auto block h-auto max-h-[680px] w-full object-contain" src="{{ asset('images/portfolio/tukutiket/cover.jpg') }}" alt="{{ $project['title'] }} case study cover">
            </div>
        </section>

        <section class="mx-auto max-w-[1120px] px-6 py-14 md:px-24 md:py-20">
            <div class="grid gap-10 md:grid-cols-2">
                <div class="md:col-span-2">
                    <p class="eyebrow">Travel platform / UI/UX design</p>
                    <h1 class="mt-3 text-3xl font-semibold leading-tight md:text-5xl">{{ $project['title'] }}</h1>
                    <p class="mt-3 text-lg text-[#69708d]">{{ $project['role'] }}</p>
                </div>
                <div><h2 class="text-lg font-semibold">Project Goals</h2><p class="mt-3 text-sm leading-7 text-[#626975]">To create a friendly and trustworthy way for people to discover local destinations and purchase tickets with confidence.</p></div>
                <div><h2 class="text-lg font-semibold">Methodology</h2><p class="mt-3 text-sm text-[#626975]">Design Thinking</p></div>
                <div><h2 class="text-lg font-semibold">Duration Project</h2><p class="mt-3 text-sm text-[#626975]">{{ $project['timeline'] }}</p></div>
                <div><h2 class="text-lg font-semibold">Platform</h2><p class="mt-3 text-sm text-[#626975]">{{ $project['type'] }}</p></div>
                <div><h2 class="text-lg font-semibold">Tools Used</h2><div class="mt-4 flex gap-3"><img class="h-12 w-12 object-contain" src="{{ asset('images/portfolio/tukutiket/Logo Figma.svg') }}" alt="Figma"><img class="h-12 w-12 object-contain" src="{{ asset('images/portfolio/tukutiket/Logo Canva.svg') }}" alt="Canva"></div></div>
                <div class="md:col-span-2"><h2 class="text-lg font-semibold">Problem</h2><p class="mt-3 max-w-4xl text-sm leading-7 text-[#626975]">{{ $project['problem'] }}</p><h2 class="mt-8 text-lg font-semibold">Case Study</h2><p class="mt-3 max-w-4xl text-sm leading-7 text-[#626975]">{{ $project['overview'] }}</p></div>
            </div>
        </section>

        <section class="bg-[#f5f5f5] px-6 py-14 md:px-24 md:py-20">
            <div class="mx-auto max-w-[980px]"><h2 class="text-center text-2xl font-semibold md:text-3xl">Design Process</h2><div class="mx-auto mt-10 grid max-w-[900px] gap-8 text-center sm:grid-cols-2 md:grid-cols-4"><div><h3 class="font-semibold text-[#3157ff]">Understand</h3><p class="mt-2 text-sm">Research & problem mapping</p></div><div><h3 class="font-semibold text-[#3157ff]">Define</h3><p class="mt-2 text-sm">User needs and trip goals</p></div><div><h3 class="font-semibold text-[#3157ff]">Design</h3><p class="mt-2 text-sm">Information architecture<br>High fidelity design</p></div><div><h3 class="font-semibold text-[#3157ff]">Evaluate</h3><p class="mt-2 text-sm">Usability testing and iteration</p></div></div></div>
        </section>

        <section class="mx-auto max-w-[1120px] space-y-20 px-6 py-16 md:px-24 md:py-24">
            <div><p class="text-sm font-semibold text-[#3157ff]">01 / Research</p><h2 class="mt-1 text-3xl font-semibold leading-tight md:text-4xl">Research and Problem Mapping</h2><p class="mt-4 max-w-4xl text-base leading-8 text-[#626975]">The first step was mapping what travelers need before booking: a clear destination story, useful details, and enough trust to make a local trip feel easy to plan.</p><img class="mt-8 w-full rounded-2xl object-contain" src="{{ asset('images/portfolio/tukutiket/Research and problem Mapping.jpg') }}" alt="Tuku Tiket Dolan research and problem mapping"></div>
            <div><p class="text-sm font-semibold text-[#3157ff]">02 / Interface</p><h2 class="mt-1 text-3xl font-semibold leading-tight md:text-4xl">Direct-to-Design High Fidelity</h2><p class="mt-4 max-w-4xl text-base leading-8 text-[#626975]">The interface moves visitors from inspiration to action with a direct visual hierarchy, clear destinations, and a booking path that stays easy to understand.</p><img class="mt-8 w-full rounded-2xl object-contain" src="{{ asset('images/portfolio/tukutiket/Direct-to-Design (High-Fidelity).jpg') }}" alt="Tuku Tiket Dolan high fidelity design"></div>
            <div><p class="text-sm font-semibold text-[#3157ff]">03 / Visual Design</p><h2 class="mt-1 text-3xl font-semibold leading-tight md:text-4xl">A Clearer Way to Explore Kebumen</h2><p class="mt-4 max-w-4xl text-base leading-8 text-[#626975]">A fresh blue direction gives the platform a sense of openness and movement, while the content structure keeps local experiences at the center.</p><img class="mt-8 w-full rounded-2xl object-contain" src="{{ asset('images/portfolio/tukutiket/visual design.jpg') }}" alt="Tuku Tiket Dolan visual design"></div>
        </section>

        <section class="bg-[#f5f5f5] px-6 py-14 md:px-24 md:py-20"><div class="mx-auto max-w-[1120px]"><h2 class="text-2xl font-semibold">Result</h2><p class="mt-4 max-w-4xl text-sm leading-7 text-[#626975]">{{ $project['result'] }}</p><h2 class="mt-10 text-2xl font-semibold">Conclusion</h2><p class="mt-4 max-w-4xl text-sm leading-7 text-[#626975]">The project turns local travel discovery into a clearer, more welcoming path from curiosity to booking.</p></div></section>

        <section id="portfolio-lainnya" class="related-projects mx-auto max-w-[1440px] px-6 py-10 md:px-16 md:py-16 lg:px-24"><div class="related-projects__heading"><p class="eyebrow">Keep exploring</p><h2 class="section-title mt-3">More work, different worlds.</h2><p>Every project starts with a different question. Browse the rest of the playground.</p></div><div class="related-projects__grid">@foreach (collect($projects)->except(request()->route('slug')) as $slug => $relatedProject)<div class="h-full"><x-portfolio-card :project="$relatedProject" :slug="$slug" compact /></div>@endforeach</div></section>
        <x-cta />
    </main>
</x-layout>

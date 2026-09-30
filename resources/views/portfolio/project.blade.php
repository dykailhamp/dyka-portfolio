<x-layout :title="$project['title'].' - Dyka'">
    <main>
        <section class="{{ $project['color'] }} px-6 py-10 md:px-16 md:py-16 lg:px-24">
            <div class="relative left-1/2 w-screen -translate-x-1/2">
                <img class="mx-auto block h-auto max-h-[720px] w-full object-contain" src="{{ $project['image'] }}" alt="{{ $project['title'] }} project preview">
            </div>
        </section>

        <section class="mx-auto max-w-[1120px] px-6 py-14 md:px-24 md:py-20">
            <div class="grid gap-10 md:grid-cols-2">
                <div class="md:col-span-2"><h1 class="text-3xl font-semibold md:text-5xl">{{ $project['title'] }}</h1><p class="mt-3 text-lg text-[#69708d]">{{ $project['role'] }}</p></div>
                <div><h2 class="text-lg font-semibold">Project Goals</h2><p class="mt-3 text-sm leading-7 text-[#626975]">To create a clear and approachable digital experience that helps people discover {{ strtolower($project['title']) }} with confidence.</p></div>
                <div><h2 class="text-lg font-semibold">Methodology</h2><p class="mt-3 text-sm text-[#626975]">Design Thinking</p></div>
                <div><h2 class="text-lg font-semibold">Duration Project</h2><p class="mt-3 text-sm text-[#626975]">{{ $project['timeline'] }}</p></div>
                <div><h2 class="text-lg font-semibold">Platform</h2><p class="mt-3 text-sm text-[#626975]">{{ $project['type'] }}</p></div>
                <div><h2 class="text-lg font-semibold">Tools Used</h2><p class="mt-4 text-sm text-[#626975]">Figma</p></div>
                <div class="md:col-span-2"><h2 class="text-lg font-semibold">Problem</h2><p class="mt-3 max-w-4xl text-sm leading-7 text-[#626975]">{{ $project['problem'] }}</p><h2 class="mt-8 text-lg font-semibold">Case Study</h2><p class="mt-3 max-w-4xl text-sm leading-7 text-[#626975]">{{ $project['overview'] }}</p></div>
            </div>
        </section>

        <section class="bg-[#f5f5f5] px-6 py-16 md:px-24 md:py-24"><div class="mx-auto max-w-[1120px]"><h2 class="text-center text-2xl font-semibold md:text-3xl">Design Process</h2><div class="mt-12 grid gap-8 sm:grid-cols-2 md:grid-cols-5"><div><h3 class="font-semibold text-[#3157ff]">Empathize</h3><p class="mt-2 text-sm">User Research</p></div><div><h3 class="font-semibold text-[#3157ff]">Define</h3><p class="mt-2 text-sm">User Persona<br>Pain Points</p></div><div><h3 class="font-semibold text-[#3157ff]">Ideate</h3><p class="mt-2 text-sm">User Flow<br>Information Architecture</p></div><div><h3 class="font-semibold text-[#3157ff]">Prototype</h3><p class="mt-2 text-sm">Wireframe<br>High Fidelity</p></div><div><h3 class="font-semibold text-[#3157ff]">Testing</h3><p class="mt-2 text-sm">Usability Testing</p></div></div></div></section>

        <section class="mx-auto max-w-[1120px] space-y-16 px-6 py-16 md:px-24 md:py-24">
            <div><p class="text-sm font-semibold text-[#3157ff]">UCD Process</p><h2 class="mt-1 text-3xl font-semibold md:text-4xl">Research and User Needs</h2><p class="mt-4 max-w-4xl text-base leading-8 text-[#626975]">The project began by understanding the audience, their expectations, and the moments where the existing experience could be clearer and easier to use.</p></div>
            <div><p class="text-sm font-semibold text-[#3157ff]">UCD Process</p><h2 class="mt-1 text-3xl font-semibold md:text-4xl">Wireframing and High Fidelity</h2><p class="mt-4 max-w-4xl text-base leading-8 text-[#626975]">The interface was shaped around a straightforward hierarchy, clear actions, and a visual language that reflects the character of the project.</p><img class="mt-6 w-full rounded-2xl object-contain" src="{{ $project['image'] }}" alt="{{ $project['title'] }} high fidelity design"></div>
            <div><p class="text-sm font-semibold text-[#3157ff]">UCD Process</p><h2 class="mt-1 text-3xl font-semibold md:text-4xl">Informal Usability Testing</h2><p class="mt-4 max-w-4xl text-base leading-8 text-[#626975]">Feedback was used to refine content hierarchy, navigation, and the next step users should take on the page.</p></div>
            <div><h2 class="text-3xl font-semibold md:text-4xl">Visual Design</h2><p class="mt-4 max-w-4xl text-base leading-8 text-[#626975]">The final direction balances useful information with an inviting visual identity and a focused user journey.</p></div>
        </section>

        <section class="bg-[#f5f5f5] px-6 py-16 md:px-24 md:py-24"><div class="mx-auto max-w-[1120px]"><h2 class="text-2xl font-semibold">Result</h2><p class="mt-4 max-w-4xl text-sm leading-7 text-[#626975]">{{ $project['result'] }}</p><h2 class="mt-10 text-2xl font-semibold">Conclusion</h2><p class="mt-4 max-w-4xl text-sm leading-7 text-[#626975]">The project turns a complex need into a more welcoming and understandable digital experience.</p></div></section>

        <section id="portfolio-lainnya" class="related-projects mx-auto max-w-[1440px] px-6 py-10 md:px-16 md:py-16 lg:px-24"><div class="related-projects__heading"><p class="eyebrow">Keep exploring</p><h2 class="section-title mt-3">More work, different worlds.</h2><p>Every project starts with a different question. Browse the rest of the playground.</p></div><div class="related-projects__grid">@foreach (collect($projects)->except(request()->route('slug')) as $slug => $relatedProject)<div class="h-full"><x-portfolio-card :project="$relatedProject" :slug="$slug" compact /></div>@endforeach</div></section>
        <x-cta />
    </main>
</x-layout>

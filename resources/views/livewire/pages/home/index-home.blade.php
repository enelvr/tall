<div class="max-w-7xl mx-auto p-6 lg:p-8">

    <div class="section justify-center">
        <div class="column">
            <h2 class="title">Potafolio</h2>
        </div>
    </div>
    <div class="max-w-4xl mx-auto">
        <div class="portfolio" wire:transition>
            @forelse ($projects as $item)
                <div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{ $item->imagen_url }}" alt="{{ $item->title }}"
                                    style="width: 100%; height: 100%;">
                            </div>
                            <div class="flip-card-back"
                                style="background: url('{{ $item->imagen_url }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                                <div class="dark-overlay absolute inset-0 bg-black opacity-90"></div>
                                <div class="p-4 relative z-10">
                                    <h1 class="text-3xl font-bold mb-1 capitalize">{{ substr($item->title, 0, 15) }} ...</h1>

                                    <p class="mt-4 text-lg">{{ substr($item->description, 0, 100) }} ...</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div>

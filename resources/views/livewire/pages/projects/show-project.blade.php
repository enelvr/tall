<x-slot name="header">
    Proyecto / Detalles
</x-slot>
<x-slot name="action">
    <a href="{{route('projects.index')}}" class="btn btn-blue">
        Listado
    </a>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form wire:submit.prevent="storeProject"> 
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="card p-6">
                    <div class="mb-4">
                        <label for="title" class="label">Título:</label>
                        {{ $project->title }}
                    </div>

                    <div class="mb-4">
                        <label for="description" class="label">Descripción:</label>
                        {{ $project->description }}
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div class="card p-6">
                    <div class="mb-4">
                        <label for="is_public" class="label">Estado:</label>
                        <span class="badge {{ $project->is_public ? 'publicado' : 'borrador' }}">
                            {{ $project->is_public === 1 ? 'Publicado' : 'Borrador' }}
                        </span>
                        
                    </div>

                    <div class="mb-4">
                        <label for="image" class="lBEL">Vista Previa:</label>
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{ $project->imagen_url }}" alt="{{ $project->title }}"
                                        style="width: 100%; height: 100%;">
                                </div>
                                <div class="flip-card-back"
                                    style="background: url('{{ $project->imagen_url }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                                    <div class="dark-overlay absolute inset-0 bg-black opacity-90"></div>
                                    <div class="p-4 relative z-10">
                                        <h1 class="text-3xl font-bold mb-1 capitalize">{{ substr($project->title, 0, 15) }} ...</h1>
    
                                        <p class="mt-4 text-lg">{{ substr($project->description, 0, 100) }} ...</p>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div><!-- Max-w-7-->
</div>
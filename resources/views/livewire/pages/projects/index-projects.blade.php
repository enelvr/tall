<x-slot name="header">
    Proyectos / Listado
</x-slot>
<x-slot name="action">
    <a href="{{route('projects.create')}}" class="btn btn-blue">
        Nuevo
    </a>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="card p-6">
            <input wire:model.live="search" class="input" placeholder="Buscar por título">
        </div>
        <div class="card p-6 mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th class="th-3">Portada</th>
                        <th class="th">Título</th>
                        <th class="th-3">Estado</th>
                        <th class="th-4">---</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $item)
                        <tr class="tr">
                            <td class="td text-center">
                                <img class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                    src="{{ $item->imagen_url }}" alt="">
                            <td class="td">{{ $item->title }}</td>
                            <td class="td">
                                <span class="badge {{ $item->is_public ? 'publicado' : 'borrador' }}">
                                    {{ $item->is_public === 1 ? 'Publicado' : 'Borrador' }}
                                </span>
                            </td>
                            <td class="td-action">
                                <a href="{{route('projects.show', $item->id)}}" class="text-blue-500" title="Mostrar Proyecto">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{route('projects.edit', $item->id)}}" class="text-yellow-500 ml-2" title=">Editar Proyecto">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <button wire:click="deleteProject({{ $item->id }})" class="text-red-500 ml-2" title="Eliminar Proyecto">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>

            </table>
        </div>

        <div class="card px-6 mt-4">
            {{ $projects->links() }}
        </div>
    </div>
</div>

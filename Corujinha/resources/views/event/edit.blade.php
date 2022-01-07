<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('event.update', $event->slug) }}" method="post" enctype="multipart/form-data">
    
                    @csrf
                    @method('put')
                
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <input type="text" name="name" value="{{ $event->name }}">
                
                    <textarea name="description" id="" cols="30" rows="10">{{ $event->description }}</textarea>
                
                    <img src="/storage/{{ $event->event_photo_path }}" alt="">
                    <input type="file" name="imageFile">
                
                    <button type="submit">Atualizar</button>
                
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Crée un bien')

@section('content')
    <h1 class="mb-5">@yield('title')</h1>
    <form
        action="{{ route($property->exists ? 'admin.propertry.update' : 'admin.property.store', ['property => $property']) }}"
        method="POST">

        @csrf
        @method($property->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $property->title])

        <div>
            <button class="btn btn-primary mt-5">
                @if ($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>
@endsection

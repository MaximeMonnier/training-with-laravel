@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Crée un bien')

@section('content')
    <h1 class="mb-5">@yield('title')</h1>
    <form class="vstack gap-2"
        action="{{ route($property->exists ? 'admin.propertry.update' : 'admin.property.store', ['property => $property']) }}"
        method="POST">

        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Titre',
                'name' => 'title',
                'value' => $property->title,
            ])
            <div class="col row">
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Surface',
                    'name' => 'surface',
                    'value' => $property->surface,
                ])
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Prix',
                    'name' => 'price',
                    'value' => $property->price,
                ])
            </div>
        </div>
        @include('shared.input', [
            'type' => 'textarea',
            'name' => 'description',
            'value' => $property->description,
        ])
        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Pièce',
                'name' => 'rooms',
                'value' => $property->rooms,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Chambre',
                'name' => 'bedrooms',
                'value' => $property->bedrooms,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Etage',
                'name' => 'floor',
                'value' => $property->floor,
            ])
        </div>
        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Ville',
                'name' => 'city',
                'value' => $property->city,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Adresse',
                'name' => 'adress',
                'value' => $property->adress,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Code Postale',
                'name' => 'postal_code',
                'value' => $property->postal_code,
            ])
        </div>
        @include('shared.checkbox', [
            'label' => 'Vendu',
            'name' => 'sold',
            'value' => $property->sold,
        ])


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

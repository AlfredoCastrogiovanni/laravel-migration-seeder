@extends('layouts.app')

@section('title', 'Trains Homepage')

@section('main-content')
    <div class="container mt-5">
        <div class="row">
            @forelse($trains as $train)
            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->company }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $train->train_code }}</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="fw-bold">Departure Station:</span> {{ $train->departure_station }}</li>
                        <li class="list-group-item"><span class="fw-bold">Arrival Station:</span> {{ $train->arrival_station }}</li>
                        <li class="list-group-item"><span class="fw-bold">Number of wagon:</span> {{ $train->number_of_wagon }}</li>
                        <li class="list-group-item"><span class="fw-bold">On Schedule: </span> {{ $train->on_schedule ? 'Yes' : 'No' }} </li>
                        <li class="list-group-item"><span class="fw-bold">Cancelled: </span> {{ $train->cancelled ? 'Yes' : 'No' }} </li>
                    </ul>
                </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>
@endsection

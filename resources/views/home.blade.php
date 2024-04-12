@extends('layouts/app')

@section('content')
<h1>Trenitalia</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">Departure</th>
        <th scope="col">Arrival</th>
        <th scope="col">In Time</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)

        <tr>
        <td>{{$train->code}}</td>
        <td>{{$train->departure_station}}</td>
        <td>{{$train->arrival_station}}</td>
        @if ($train->is_on_time === 1)
            <td>In orario</td>
        @else
            <td>In ritardo</td>
        @endif
        </tr>

        @endforeach
      
    </tbody>
  </table>

@endsection
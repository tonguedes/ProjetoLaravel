@extends('layouts.main')
@section('title', $event->title)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
         </div>
        <div id="info-container" class="col-md-6">
        <h1>{{$event->title}}</h1>
        <p class="event-city">{{$event->city}}</p>
        <p class="event-participants">X</p>
        <p class="event-owner">{{ $eventOwner['name']}}<p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar presenca</a>
            <h3>O evento conta com</h3>
            <ul id="items-list">
            @foreach($event->items as $item)
                  <li>{{$item}}</li>
            @endforeach

            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Evento</h3>
            <p class="event-description">{{$event->description}}</p>

        </div>
    </div>
</div>

@endsection


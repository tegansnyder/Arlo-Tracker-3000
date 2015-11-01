@extends('layouts.master')

@section('content')
<div id="success-notification" class="alert alert-info">
    <p class="pull-left lead">
        <strong>Saved:</strong> <span class="event-type">EventName</span>
    </p>

    <p class="pull-right">
        <button type="button" class="btn btn-primary undo">
            <i class="icon-undo"></i> Undo
        </button>

        <button type="button" data-toggle="modal" data-target="#detailsModal" class="btn btn-primary details">
            <i class="icon-time"></i> Change time
        </button>
    </p>
</div>
<div id="error-notification" class="alert alert-danger">
    <p class="lead">
        "<span class="event-type">EventName</span>" could not be tracked!
    </p>
</div>

@include('dialogs.details')
@include('dialogs.feed')
@include('dialogs.pump')
@include('dialogs.diaper')
@include('dialogs.activity')
@include('dialogs.medicine')
@include('dialogs.supplies')
@include('dialogs.milestone')
@include('dialogs.note')
@include('dialogs.food')

<div class="page-header">
    <h1><i class="icon-baby-baby"></i> <span style="color: {{ Config::get('sophietracker.color') }};">{{ Config::get('sophietracker.name') }}</span> Tracker 3000</h1>

    <button type="button" class="btn btn-inverse btn-lg" id="list-button">
        <i class="icon-list"></i>
    </button>
</div>

<div class="flip"> 
    <div class="card"> 
        <div class="face front">
            <div class="sleep-items hide">    
                <div class="sleep">Z</div>
                <div class="sleep"><img src="/img/lamb.png" alt="Lamb" /></div>
                <div class="sleep">Z</div>
                <div class="sleep">z</div>
                <div class="sleep">Z</div>
                <div class="sleep"><img src="/img/lamb.png" alt="Lamb" /></div>
                <div class="sleep">Z</div>
                <div class="sleep">z</div>
                <div class="sleep">z</div>
            </div>

            @foreach ($eventTypeCategories as $eventTypeCategory => $eventTypes)
                <div class="{{ $eventTypeCategory }}-events">
                    @foreach ($eventTypes as $eventType)

                    @if ($eventType->name === "Stats")

                        <button type="button" onclick="window.location='/stats';" class="btn btn-lg btn-{{ $eventType->color_name }} eventbutton-{{ strtolower($eventType->name) }}">
                            <i class="{{ $eventType->icon }}"></i> {{ $eventType->name }}
                        </button>

                    @else

                        <button type="button" data-toggle="modal" data-target="#{{ strtolower($eventType->name) }}Modal" class="btn btn-lg btn-{{ $eventType->color_name }} eventbutton-{{ strtolower($eventType->name) }}">
                            @if ($eventType->is_primary)
                                <span class="badge"></span>
                            @endif

                            <i class="{{ $eventType->icon }}"></i> {{ $eventType->name }}
                        </button>

                    @endif

                    @endforeach
                </div>
            @endforeach
        </div> 
        <div class="face back"> 
            <table class="table table-striped"></table>
        </div> 
    </div> 
</div>
@stop
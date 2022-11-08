@extends('web.layouts.app')

@section('content')


@component('web.layouts._components.top', ['title' => 'Calendário', 'text' => 'Acompanhe aqui a data de todos os eventos.'])
@endcomponent
@php $subtitle = "Calendário"; @endphp
@section('title', 'Calendário')

<!-- Calendário -->
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            @foreach ($calendarioeventos as $key => $eventos)
                <button type="button" class="btn" style="cursor: default; background-color: {{$eventos->color}}; color: #ffffff;">{{$eventos->name}}</button>
            @endforeach
        </div>
    </div>
    <!--// end row -->
    <div class="row">
        <div id='calendar'></div>
    </div>
    <!--// end row -->
</div>
<!-- End Calendário -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    var today = new Date().toISOString().slice(0, 10);
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
    timeZone: 'America/Sao_Paulo',
    headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listMonth'
    },
    initialDate: today,
    locale: 'pt-br',
    navLinks: true, // can click day/week names to navigate views
    businessHours: true, // display business hours
    editable: false,
    selectable: false,
    events: [
        @foreach ($calendarios as $key => $calendario)
            @php
                $start = substr($calendario->starting_at, 0, 10);
                $start .= "T".substr($calendario->starting_at, 11, 15);
                $end = substr($calendario->ending_at, 0, 10);
                $end .= "T".substr($calendario->ending_at, 11, 15);
            @endphp
            {
            title: '{{$calendario->title}}',
            start: '{{$start}}',
            end: '{{$end}}',
            color: '{{$calendario->evento->color}}'
            },
        @endforeach
    ]
    });

    calendar.render();
});
</script>
<style>
#calendar {
    max-width: 1100px;
    margin: 0 auto;
}

</style>
@endsection
@extends('app.trainings')
@section('title', 'Training Calendar')
@section('main-title', 'Training and Seminars')
@section('breadcrumb', 'Training Calendar')
@section('page-content')

    <h1 class="page-heading mb-4">Training Calendar</h1>
    <div id="calendar"></div>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                themeSystem: 'bootstrap5',
                headerToolbar: {
                    left: "prev,next today",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek"
                },
                height: 680,
                aspectRatio: 3,
                events: 
                    <?php 
                        echo json_encode($trainings);
                    ?>
            });
            calendar.render();
        });

    </script>


@endsection

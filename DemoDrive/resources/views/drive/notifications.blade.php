
@extends('layouts.app')

@section('content')

    <main id="main-notifications">

        <!-- Left Sidebar -->

        @include('drive.shared.sidebar')

        <!-- Notifications about files shared by other users -->

        <section id="notifications">

            <!-- Title -->

            <div class="section-title">
                <span>Notifications</span>
            </div>

            <!-- Notifications List -->

            <div id="notifications-list">

                @foreach (  $notifications as $notification)
                    @if ($notification->secret_key == Auth::user()->secret_key)
                        <div class="notifications-list-item">

                                <div class="notifications-list-item__details">
                                    <span>Someone send you a new file! Click: <a href="{{ $notification->url ?? '' }}" target="_blank"> link </a></span>
                                </div>

                                <div></div>  <!-- styling purposes -->
                                <div></div>  <!-- styling purposes -->
                                <div></div>  <!-- styling purposes -->

                        </div>
                    @endif
                @endforeach

            </div>

        </section>

        <!-- Private Share -->

        @include('drive.shared.share')

    </main>

@endsection

<script>


    function myToggle(){
        document.getElementById("main-notifications").classList.toggle("toggle");
        document.getElementById("notifications").classList.toggle("toggle");
        document.getElementById("notifications-list").classList.toggle("toggle");
    }



</script>

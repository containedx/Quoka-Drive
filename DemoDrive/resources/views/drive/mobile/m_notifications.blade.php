
@extends('layouts.app')

@section('content')

    <main id="m_main-notifications">

        <!-- Left Sidebar -->

        @include('drive.mobile.shared.m_sidebar')

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
                                    <span>Someone send you a new file! Click: <a href="{{ $notification->url }}" target="_blank"> link </a></span>
                                </div>

                                <div></div>  <!-- styling purposes -->
                                <div></div>  <!-- styling purposes -->
                                <div></div>  <!-- styling purposes -->

                            </div>
                        @endif
                    @endforeach

                </div>

            </section>

    </main>

@endsection

<script type="text/javascript">

    window.addEventListener('resize', myWindowSize);

    function myWindowSize() {
        if (window.innerWidth >= 1200) {
            window.location.replace("/notifications");
        }
    }

    function myToggle(){
        document.getElementById("m_main-notifications").classList.toggle("toggle");
        document.getElementById("notifications").classList.toggle("toggle");
        document.getElementById("notifications-list").classList.toggle("toggle");
    }

</script>

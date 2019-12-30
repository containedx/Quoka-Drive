
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

                    <div class="notifications-list-item">

                        <div class="notifications-list-item__details">
                            <span><strong>Username</strong> wants to share file [ <strong>file_name</strong> ]. Do you accept?</span>
                        </div>

                        <div></div>  <!-- styling purposes -->

                        <div class="notifications-list-item__accept">
                            <a role="button">
                                <i class="fas fa-check"></i>
                            </a>
                        </div>

                        <div class="notifications-list-item__del">
                            <a role="button">
                                <i class="fas fa-ban"></i>
                            </a>
                        </div>

                    </div>

                    <div class="notifications-list-item">
                        <div class="notifications-list-item__details">
                            <span><strong>Username</strong> wants to share file [ <strong>file_name</strong> ]. Do you accept?</span>
                        </div>

                        <div></div>  <!-- styling purposes -->

                        <div class="notifications-list-item__accept">
                            <a role="button">
                                <i class="fas fa-check"></i>
                            </a>
                        </div>

                        <div class="notifications-list-item__del">
                            <a role="button">
                                <i class="fas fa-ban"></i>
                            </a>
                        </div>

                    </div>

                    <div class="notifications-list-item">
                        <div class="notifications-list-item__details">
                            <span><strong>Username</strong> wants to share file [ <strong>file_name</strong> ]. Do you accept?</span>
                        </div>

                        <div></div>  <!-- styling purposes -->

                        <div class="notifications-list-item__accept">
                            <a role="button">
                                <i class="fas fa-check"></i>
                            </a>
                        </div>

                        <div class="notifications-list-item__del">
                            <a role="button">
                                <i class="fas fa-ban"></i>
                            </a>
                        </div>

                    </div>

                    <div class="notifications-list-item">
                        <div class="notifications-list-item__details">
                            <span><strong>Username</strong> wants to share file [ <strong>file_name</strong> ]. Do you accept?</span>
                        </div>

                        <div></div>  <!-- styling purposes -->

                        <div class="notifications-list-item__accept">
                            <a role="button">
                                <i class="fas fa-check"></i>
                            </a>
                        </div>

                        <div class="notifications-list-item__del">
                            <a role="button">
                                <i class="fas fa-ban"></i>
                            </a>
                        </div>

                    </div>

                    <div class="notifications-list-item">
                        <div class="notifications-list-item__details">
                            <span><strong>Username</strong> wants to share file [ <strong>file_name</strong> ]. Do you accept?</span>
                        </div>

                        <div></div>  <!-- styling purposes -->

                        <div class="notifications-list-item__accept">
                            <a role="button">
                                <i class="fas fa-check"></i>
                            </a>
                        </div>

                        <div class="notifications-list-item__del">
                            <a role="button">
                                <i class="fas fa-ban"></i>
                            </a>
                        </div>

                    </div>

                    <div class="notifications-list-item">
                        <div class="notifications-list-item__details">
                            <span><strong>Username</strong> wants to share file [ <strong>file_name</strong> ]. Do you accept?</span>
                        </div>

                        <div></div>  <!-- styling purposes -->

                        <div class="notifications-list-item__accept">
                            <a role="button">
                                <i class="fas fa-check"></i>
                            </a>
                        </div>

                        <div class="notifications-list-item__del">
                            <a role="button">
                                <i class="fas fa-ban"></i>
                            </a>
                        </div>

                    </div>

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


@extends('layouts.app')

@section('content')

    <main id="m_main-drive">

        <!-- Left Sidebar -->

        @include('drive.mobile.shared.m_sidebar')

        <!-- Private Share -->

        <section id="m_share">
            <div class="section-title">
                <span>Share Files To Other Users</span>
            </div>

            <div id="share-list">
                <div class="accordion" id="accordionExample275">
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingOne2">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2"
                                        aria-expanded="true" aria-controls="collapseOne2">
                                    &#x27A3; Example File 1
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                             data-parent="#accordionExample275">
                            <div class="card-body">
                                <div class="search-container">
                                    <span>Type secret key of the user you want to share your file with:</span>
                                    </br> </br>
                                    <form action="/action_page.php">
                                        <input type="text" placeholder="Secret Key..." name="search">
                                        <button type="submit"><i class="fas fa-plus"></i></button>
                                    </form>
                                    </br>
                                    <span>File shared with:</span>
                                    No one
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingTwo2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    &#x27A3; Example File 2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2"
                             data-parent="#accordionExample275">
                            <div class="card-body">
                                <span>Type secret key of the user you want to share your file with:</span>
                                </br> </br>
                                <form action="">
                                    <input type="text" placeholder="Secret Key..." name="search">
                                    <button type="submit"><i class="fas fa-plus"></i></button>
                                </form>
                                </br>
                                <span>File shared with:</span>
                                <ul>
                                    <li> <span>{{Auth::user()->name}}</span> &emsp;&emsp; <a role="button">Delete</a> </li>
                                    <li> <span>{{Auth::user()->name}}</span> &emsp;&emsp; <a role="button">Delete</a> </li>
                                    <li> <span>{{Auth::user()->name}}</span> &emsp;&emsp; <a role="button">Delete</a> </li>
                                    <li> <span>{{Auth::user()->name}}</span> &emsp;&emsp; <a role="button">Delete</a> </li>
                                </ul>
                            </div>
                        </div>
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
            window.location.replace("/drive");
        }
    }

    function myToggle(){
        document.getElementById("m_main-drive").classList.toggle("toggle");
        document.getElementById("m_share").classList.toggle("toggle");
        document.getElementById("share-list").classList.toggle("toggle");

    }

</script>

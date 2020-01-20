
<section id="share">
    <div class="section-title">
        <span>Share Files To Other Users</span>
    </div>

    <div id="share-list">
        <div class="accordion" id="accordionExample275">

<!--
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
-->

            @foreach ( \App\File::all() as $file)
                <div class="card z-depth-0 bordered">
                    <div class="card-header" id="headingOne2">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{ $loop->index }}"
                                    aria-expanded="true" aria-controls="collapseOne{{ $loop->index }}">
                                &#x27A3; {{ $file->name }}
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne{{ $loop->index }}" class="collapse" aria-labelledby="headingOne2"
                         data-parent="#accordionExample275">
                        <div class="card-body">
                            <div class="search-container">
                                <span>Type secret key of the user you want to share your file with:</span>
                                </br> </br>
                                <form method="POST" action="/share">
                                    {{csrf_field()}}
                                    <input type="text" placeholder="Secret Key..." name="secretkey">
                                    <input type="text" value="{{$file->id}}" name="id" style="visibility: hidden; width: 3px;">
                                    <button type="submit" style=" height: 28px;"><i class="fas fa-plus"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="card z-depth-0 bordered">
                <div class="card-header" id="headingOne2">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                            Your Shared Files:
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne2"
                     data-parent="#accordionExample275">
                    <div class="card-body">
                        <div class="search-container">
                            <ul>
                                @foreach ( \App\File::all() as $file)

                                    @if ($file->shared == true)
                                        <li>{{$file->name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


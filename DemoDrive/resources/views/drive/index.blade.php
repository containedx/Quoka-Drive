
@extends('layouts.app')


@section('content')

    <main id="main-drive">

        <!-- Left Sidebar -->

        <nav id="sidebar">

            <div id="sidebar-content">

                <div id="user-details">
                    <div id="user-img">
                        <img src="img/user.png" />
                    </div>

                    <div id="user-name">
                        {{ Auth::user()->name }}
                    </div>
                </div>


                <div id="secret-key">
                    Secret Key:
                    <span>21sd3QaA</span>
                </div>

                <div id="file-drop">
                    <div class="file-drop-area">
                        <span class="file-msg">Upload New File</span>
                        <input class="file-input" type="file" multiple>
                    </div>
                </div>

                <a class="nav-link-d" href="/drive">
                    <i class="far fa-folder-open"></i>
                    {{ __('Storage') }}
                </a>

                <a class="nav-link-m" href="">Files Storage</a>

                <a class="nav-link-m" href="">Share Files</a>

                <a class="nav-link-d" href="/notifications">
                    <i class="far fa-bell"></i>
                    {{ __('Notifications') }}

                </a>

                <a class="nav-link-d" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">


                    <i class="fas fa-power-off"></i>
                    {{ __('Sign Out') }}


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>

            </div>

        </nav>

        <!-- Main File Storage -->

        <section id="storage">

            <div class="section-title">
                <span>File Name</span>
                <span>Size [Mb]</span>
                <span>Type</span>
                <span>Link</span>
                <span>Del</span>
                <span></span>
            </div>

            <div id="files-list">
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 1</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 2</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 1</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 2</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 1</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 2</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 1</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 2</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 1</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 2</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 1</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
                <div class="files-list-item">
                    <div class="files-list-item__name">Example File 2</div>
                    <div class="files-list-item__size">3</div>
                    <div class="files-list-item__type">.pdf</div>

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>
                </div>
            </div>

        </section>

        <!-- Private Share -->

        <section id="share">
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

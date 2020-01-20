
@extends('layouts.app')

@section('content')

    <main id="m_main-drive">

        <!-- Left Sidebar -->

        @include('drive.mobile.shared.m_sidebar')

        <!-- Main File Storage -->

        <section id="storage">

            <!-- Titles -->

            <div class="section-title">
                <span>File Name</span>
                <span>Size [Mb]</span>
                <span>Type</span>
                <span>Link</span>
                <span>Del</span>
                <span></span>
            </div>

            <!-- Files List -->

            <div id="files-list">

                @foreach (  \App\File::all() as $file)

                    @if ($file->secret_key == Auth::user()->secret_key)

                        <div class="files-list-item">

                            <div class="files-list-item__name">{{ $file->name }}</div>  <!-- File Name -->
                            <div class="files-list-item__size">{{ $file->size }}</div>               <!-- File Size -->
                            <div class="files-list-item__type">{{ $file->type }}</div>            <!-- File Type -->

                            <div class="files-list-item__share">
                                <a role="button" href="{{ $file->url }}" target="_blank">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>                  <!-- Share Button -->

                            <div class="files-list-item__del" >
                                <a role="button" href="/files/{{$file->id}}/destroy" onclick="copyToClipboard('copy_{{ $file->url }}')" >
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </div>                    <!-- Delete Button -->

                            <div class="files-list-item__download">
                                <a role="button" href="/files/{{$file->id}}/download" target="_blank">Download</a>
                            </div>               <!-- Download Button -->

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

            window.location.replace("/drive");
        }
    }


    function myToggle(){
        document.getElementById("m_main-drive").classList.toggle("toggle");
        document.getElementById("storage").classList.toggle("toggle");
        document.getElementById("files-list").classList.toggle("toggle");

    }

</script>

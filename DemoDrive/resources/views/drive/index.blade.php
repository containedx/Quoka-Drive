
@extends('layouts.app')

@section('content')

    <main id="main-drive" class="toggle">

        <!-- Left Sidebar -->

        @include('drive.shared.sidebar')

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

                <div class="files-list-item">

                    <div class="files-list-item__name">Example File 1</div>  <!-- File Name -->
                    <div class="files-list-item__size">3</div>               <!-- File Size -->
                    <div class="files-list-item__type">.pdf</div>            <!-- File Type -->

                    <div class="files-list-item__share">
                        <a role="button">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>                  <!-- Share Button -->

                    <div class="files-list-item__del">
                        <a role="button">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>                    <!-- Delete Button -->

                    <div class="files-list-item__download">
                        <a role="button">Download</a>
                    </div>               <!-- Download Button -->
                </div>

            @foreach ($files as $file)
                <div class="files-list-item">

                     <div class="files-list-item__name">{{ $file->name }}</div>  <!-- File Name -->
                     <div class="files-list-item__size">{{ $file->size }}</div>               <!-- File Size -->
                     <div class="files-list-item__type">{{ $file->type }}</div>            <!-- File Type -->

                     <div class="files-list-item__share">
                         <a role="button">
                              <i class="fas fa-external-link-alt"></i>
                         </a>
                     </div>                  <!-- Share Button -->

                     <div class="files-list-item__del">
                         <a role="button" href="/files/{{$file->id}}/destroy">
                             <i class="far fa-trash-alt"></i>
                         </a>
                     </div>                    <!-- Delete Button -->

                     <div class="files-list-item__download">
                        <a role="button">Download</a>
                     </div>               <!-- Download Button -->

                </div>
            @endforeach
            </div>

        </section>

        <!-- Private Share -->

        @include('drive.shared.share')

    </main>

@endsection


<script>


    function myToggle(){
        document.getElementById("main-drive").classList.toggle("toggle");
        document.getElementById("storage").classList.toggle("toggle");
        document.getElementById("files-list").classList.toggle("toggle");

    }

</script>


<nav id="sidebar">

    <div id="sidebar-content">

        <div id="user-details">
            <div id="user-img">
                <img src="img/user.jpg" />
            </div>

            <div id="user-name">
                {{ Auth::user()->name }}
            </div>
        </div>


        <div id="secret-key">
            Secret Key:
            <span>{{ Auth::user()->secret_key }}</span>
        </div>

        <div id="file-drop" style="padding: 0 0 2rem; 0">
            <form  method="POST" action="/storeFile" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="file-drop-area">
                    <span class="file-msg">Select New File</span>
                    <input class="file-input" id="file-input_n" type="file" name="file" multiple>
                </div>
                <input  id="submit-btn" type="submit" value="Upload File" disabled>
            </form>
        </div>

        <a class="nav-link-d" href="/drive">
            <i class="far fa-folder-open"></i>
            {{ __('Storage') }}
        </a>

        <a class="nav-link-d" href="/notifications">
            <i class="far fa-bell"></i>
            {{ __('Notifications') }}
        </a>

        <a class="nav-link-m" href="/drive/mobile/m_storage" >
            <i class="far fa-folder-open"></i>
            {{ __('Storage') }}
        </a>

        <a class="nav-link-m" href="/drive/mobile/m_share" >
            <i class="fas fa-share-square"></i>
            {{ __('Share Files') }}
        </a>

        <a class="nav-link-m" href="/drive/mobile/m_notifications" >
            <i class="far fa-bell"></i>
            {{ __('Notifications') }}
        </a>

        <a  href="{{ route('logout') }}"
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("file-input_n").onchange = function() {
            if(this.value) {
                document.getElementById("submit-btn").disabled = false;
            }
        }
    });
</script>

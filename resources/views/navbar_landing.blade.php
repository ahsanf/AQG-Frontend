<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-full">
    <a class="navbar-brand" href="#">
        <img style="max-width: 30%;" src="{{ asset('img/logo.svg') }}" data-rjs="2" alt="" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item {{ request()->segment(1) === null ? 'active' : '' }}">
                <a class="nav-link page-scroll" href="{{ url('/') }}">Live</a>
            </li> --}}
            <li class="nav-item {{ request()->segment(1) === null ? 'active' : '' }}">
                <a class="nav-link page-scroll" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item {{ request()->segment(1) === '#tentang' ? 'active' : '' }}">
                <a class="nav-link page-scroll" href="#tentang">Tentang</a>
            </li>
            <li
                class="nav-item {{ request()->segment(1) === '#quiz' ? 'active' : (request()->segment(1) === 'update-info' ? 'active' : '') }}">
                <a class="nav-link page-scroll" href="#quiz">Soal</a>
            </li>
            <li
            class="nav-item {{ request()->segment(1) === '#study' ? 'active' : (request()->segment(1) === 'update-info' ? 'active' : '') }}">
            <a class="nav-link page-scroll" href="#study">Materi</a>
        </li>
            <li class="nav-item {{ request()->segment(1) === '#faq' ? 'active' : '' }}">
                <a class="nav-link page-scroll" href="#faq">FAQ</a>
            </li>


        </ul>
        <div class="form-inline my-2 my-lg-0">
            <a class="btn btn-branch-secondary" href="{{ route('register') }}">Buat Akun</a>
            <a class="btn btn-branch" href="{{ route('login') }}">Masuk</a>
        </div>
    </div>
</nav>

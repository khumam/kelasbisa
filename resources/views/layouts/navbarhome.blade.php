<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
    <div class="container">
        <a class="navbar-brand mr-lg-5" href="{{ url('') }}">
            Kelas Bisa
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ url('') }}">
                            Kelas Bisa
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
                            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" role="button">
                        <i class="ni ni-single-copy-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Kelas</span>
                    </a>
                </li>
                <li class="nav-item dropdown d-lg-none">
                    <a href="#" class="nav-link">
                        <i class="ni ni-send d-lg-none"></i>
                        <span class="nav-link-inner--text">Daftar</span>
                    </a>
                </li>
                <li class="nav-item dropdown d-lg-none">
                    <a href="#" class="nav-link">
                        <i class="ni ni-bold-right d-lg-none"></i>
                        <span class="nav-link-inner--text">Masuk</span>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block ml-lg-4">
                    <a href="{{ url('register') }}" target="_blank" class="btn btn-outline-neutral btn-icon">
                        <span class="btn-inner--icon">
                            <i class="ni ni-bold-right mr-2"></i>
                        </span>
                        <span class="nav-link-inner--text">Daftar</span>
                    </a>
                    <a href="{{ url('login') }}" target="_blank" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                            <i class="ni ni-bold-right mr-2"></i>
                        </span>
                        <span class="nav-link-inner--text">Masuk</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
{{--     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th text-primary"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            {{-- <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        {{ __('Users') }}
                    </p>
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('cursoHome') }}" class="nav-link">
                    <i class="nav-icon far fa-address-card text-success"></i>
                    <p>
                        Meus Cursos
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('another.show') }}" class="nav-link">
                    <i class="nav-icon far fa-address-card text-success"></i>
                    <p>
                        Lista de Desejo
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('another.show') }}" class="nav-link">
                    <i class="nav-icon far fa-address-card text-success"></i>
                    <p>
                        Carinho
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon text-info"></i>
                    <p>
                        Outros
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('another.show') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pagamentos</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('another.show') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pagamentos</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('another.show') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pagamentos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon text-warning"></i>
                    <p>
                        Professores
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('Prof.home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gerenciador</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('another.show') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pagamentos</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('another.show') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pagamentos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon text-danger"></i>
                    <p>
                        Administradores
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('Admin.home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gerenciador</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('another.show') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pagamentos</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('another.show') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pagamentos</p>
                        </a>
                    </li>
                </ul>
            </li>
{{--             <li class="nav-item">
                <a href="{{ route('another.show') }}" class="nav-link">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        {{ __('another') }}
                    </p>
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        {{ __('About us') }}
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
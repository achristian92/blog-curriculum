<ul class="nav">
    <li class="nav-item {{set_active('dashboard*')}}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item {{set_active('user*')}}">
        <a class="nav-link" href="{{route('user.index')}}">
            <i class="material-icons">supervised_user_circle</i>
            <p> Users </p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('setting.index')}}">
            <i class="material-icons">settings</i>
            <p> Settings </p>
        </a>
    </li>
</ul>

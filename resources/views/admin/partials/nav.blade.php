<aside class="side-nav"> 
    <div class="logo">
        <img src="{{asset('img/logo.png')}}" alt="sdfjksdfl">
        Admin Pannel

    </div>

    <ul>
        <li>
            <a href="{{route('adminpanel')}}">Dashboard</a>
        </li>
        <li>
            <a href="{{route('adminpanel.products')}}">Products</a>
        </li>
        <li>
            <a href="{{route('adminpanel.categories')}}">Categories</a>
        </li>
        <li>
            <a href="{{route('adminpanel.colors')}}">Colors</a>
        </li>
        <li>
            <a href="{{route('adminpanel.categories')}}">Orders</a>
        </li>
    </ul>

    <div class="logout">
        <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">
            <svg width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path fill="currentColor" d="M472 48H40a24.028 24.028 0 0 0-24 24v368a24.028 24.028 0 0 0 24 24h88v-58.822a20.01 20.01 0 0 1 10.284-17.478l91.979-51.123L200 260.919V200a56 56 0 0 1 112 0v60.919l-30.263 75.655l91.979 51.126A20.011 20.011 0 0 1 384 405.178V464h88a24.028 24.028 0 0 0 24-24V72a24.028 24.028 0 0 0-24-24Zm-8 384h-48v-26.822a52.027 52.027 0 0 0-26.738-45.451L321.915 322.3L344 267.081V200a88 88 0 0 0-176 0v67.081l22.085 55.219l-67.347 37.432A52.027 52.027 0 0 0 96 405.178V432H48V80h416Z"/></svg>

            &nbsp; Logout

        </button>
    </form>
    </div>

</aside>
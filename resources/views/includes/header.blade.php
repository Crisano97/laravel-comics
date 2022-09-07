<header class="py-3 bg-white">
    <div class="wrapper d-flex justify-content-around align-items-center">
        <img class="logo" src="../assets/images/dc-logo.png" alt="Dc logo">
        <nav>
            <ul class="d-flex justify-content-between">
                @foreach ($headerLinks as $link)
                    <li
                    <a href="{{$link->url}}" class="text-uppercase">
                        {{$link->name}}
                    </a></li>
                @endforeach    
            </ul>
        </nav>
    </div>
</header>
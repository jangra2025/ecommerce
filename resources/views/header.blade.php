<?php
use App\Http\Controller\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">E-comm</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a class="nav-link " href="#">Home</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Orders</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
            </ul>
            <form action="/search" class="form-inline my-2 my-lg-0 " style="margin-right: 80px">
                <input class="search-box form-control mr-sm-2 " type="search" placeholder="Search" name="query"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Add to cart({{ $total }})</a></li>
                @if (session::has('user'))
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/logout">{{Session::get('user')}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Logout</li>
                        </ul>
                    </li>
                    <a href="#">login</a>
                @endif
            </ul>
        </div>
    </nav>
</div>

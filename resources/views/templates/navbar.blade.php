<div class="row">
    <section class="bg-warning d-flex justify-content-center align-items-center text-white" style="height: 100px">
        <h1>Giant Book Supplier</h1>
    </section>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active text-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($cats as $cat)    
                        <li><a class="dropdown-item" href="{{route('cat', $cat->id)}}">{{$cat->categoryname}}</a></li>
                        @endforeach
                    </ul>
                </li>          
                <li class="nav-item">
                    <a class="nav-link active text-primary" href="{{route('pub')}}">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-primary" href="{{route('contact')}}">Contact</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
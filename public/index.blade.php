@include('index.header')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                
                <span class="navbar-toggler-icon"></span>
            
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <a class="navbar-brand" href="#">BlazingShipCMS</a>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="#">Home</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#">Link</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        
                    </li>

                </ul>

                <form class="d-flex">

                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn btn-outline-success" type="submit">Search</button>

                </form>

            </div>

        </div>

    </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

@include('index.footer')
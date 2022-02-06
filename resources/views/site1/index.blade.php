<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Site1</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('indexSite1') }}">Vision Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('indexSite1') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutSite1') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicesSite1') }}">Services</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('contactSite1') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://placehold.it/1600x666" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://placehold.it/1600x666" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://placehold.it/1600x666" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="table my-5">
            <div class="container">
                <table class="table table-bordered table-striped table-hover">
                    <tr class="table-dark">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Jop</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Khaled</td>
                        <td>Khaled@gmail.com</td>
                        <td>0592332015</td>
                        <td>male</td>
                        <td>developer</td>
                        <td>
                            <a href="#" class='btn btn-primary'><i class="fas fa-edit"></i></a>
                            <a href="#" class='btn btn-danger'><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Khaled</td>
                        <td>Khaled@gmail.com</td>
                        <td>0592332015</td>
                        <td>male</td>
                        <td>developer</td>
                        <td>
                            <a href="#" class='btn btn-primary'><i class="fas fa-edit"></i></a>
                            <a href="#" class='btn btn-danger'><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Khaled</td>
                        <td>Khaled@gmail.com</td>
                        <td>0592332015</td>
                        <td>male</td>
                        <td>developer</td>
                        <td>
                            <a href="#" class='btn btn-primary'><i class="fas fa-edit"></i></a>
                            <a href="#" class='btn btn-danger'><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Khaled</td>
                        <td>Khaled@gmail.com</td>
                        <td>0592332015</td>
                        <td>male</td>
                        <td>developer</td>
                        <td>
                            <a href="#" class='btn btn-primary'><i class="fas fa-edit"></i></a>
                            <a href="#" class='btn btn-danger'><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Khaled</td>
                        <td>Khaled@gmail.com</td>
                        <td>0592332015</td>
                        <td>male</td>
                        <td>developer</td>
                        <td>
                            <a href="#" class='btn btn-primary'><i class="fas fa-edit"></i></a>
                            <a href="#" class='btn btn-danger'><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Khaled</td>
                        <td>Khaled@gmail.com</td>
                        <td>0592332015</td>
                        <td>male</td>
                        <td>developer</td>
                        <td>
                            <a href="#" class='btn btn-primary'><i class="fas fa-edit"></i></a>
                            <a href="#" class='btn btn-danger'><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Khaled</td>
                        <td>Khaled@gmail.com</td>
                        <td>0592332015</td>
                        <td>male</td>
                        <td>developer</td>
                        <td>
                            <a href="#" class='btn btn-primary'><i class="fas fa-edit"></i></a>
                            <a href="#" class='btn btn-danger'><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <section class='about'>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-6">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis molestias maxime nostrum
                            porro voluptatem delectus, ea itaque nobis a veritatis nesciunt est sapiente tempore ad
                            possimus consequatur consectetur voluptas autem aliquid enim repellendus quisquam, iusto
                            accusamus. Blanditiis dolor nesciunt deleniti laborum ea doloribus deserunt, earum sequi,
                            reprehenderit quibusdam veniam quisquam facilis suscipit vel magnam, eligendi sint quae
                            vitae soluta tempora iusto! Suscipit cupiditate ipsa explicabo molestias iusto non
                            laudantium quam ex dolorum similique unde provident ratione doloremque expedita sunt
                            corrupti commodi omnis fugit pariatur voluptatibus, laboriosam, facere aut modi quis. Earum,
                            placeat necessitatibus beatae eius eligendi enim. Tempore, quidem eligendi!</p>
                    </div>
                    <div class="col-md-6"><img src="http://placekitten.com/500/500" alt=""></div>
                </div>


            </div>
        </section>
        <section class="video my-5 text-center">
            <div class="container">
                <iframe width="1000" height="500" src="https://www.youtube.com/embed/sgnBmLqmzDY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </section>
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <form action="">
                            <input type="text" name="text" id="" placeholder="Name" class="form-control mb-3">
                            <input type="text" name="text" id="" placeholder="Subject" class="form-control mb-3">
                            <textarea name="" id="" cols="30" rows="10" class="form-control mb-3"
                                placeholder="Massage"></textarea>
                            <div class="text-end ">
                                <button class="btn btn-primary w-25 bg-dark">Send</button>
                            </div>

                        </form>
                    </div>
                    <div class="col-7">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4810.29835571012!2d34.44036762792501!3d31.5133207967293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f405b256d2b%3A0xb9c1e848050d3493!2z2KfZhNis2KfZhdi52Kkg2KfZhNil2LPZhNin2YXZitipINmB2Yog2LrYstip!5e0!3m2!1sar!2s!4v1644174545591!5m2!1sar!2s"
                            width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="copyright bg-dark py-4 text-center text-white">
            <p class="m-0">All Copyright reserved to <a href="#">Khaled madani</a> <i
                    class="far fa-copyright"></i> {{ date('Y') }} </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .my-bg-color {
            background-color: rgb(218, 234, 239, 0.4);
        }

        .img-big {
            width: 1920px;
            height: 800px;
        }

        .img-card {
            width: 400px;
            height: 300px;
        }

        .img-box3 {
            width: 100%;
            height: 100%;
        }

        iframe {
            width: 100%;
            height: 450px;
        }

        .my-footer-bg-color {
            background-color: #e3f2fd;
        }

        .my-size-big {
            font-size: 18px;
        }
    </style>
</head>

<body class="my-bg-color">
    <!-- fixed-top sticky-top -->

    <nav class="navbar navbar-expand-lg sticky-top " style="background-color: #e3f2fd;">

        <div class="container-fluid">
            <!-- <a class="navbar-brand ms-2" href="#">Japan</a> -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#box1"><span class="my-size-big">&nbsp;<i class="fa-solid fa-house"></i>&nbsp;&nbsp;
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#box2"><i class="fa-solid fa-film"></i>&nbsp;Card</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#box3"><i class="fa-solid fa-comment"></i>&nbsp;Collapse</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">日本</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <!-- navbar用文字的 -->
                    <span class="navbar-text me-3">

                    </span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Welcome</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="box1"></div>
    <div class="mx-auto mb-5 col-sm-12 col-md-10">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img class="img-big" src="https://images.unsplash.com/photo-1480796927426-f609979314bd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="img-big" src="./images/5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="img-big" src="./images/6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="box2"></div>

    <div class="mx-auto mb-5 col-10">

        <div class="row">
            <!-- d-flex讓card一樣高 -->
            <div class="col-sm-12 col-md-4 d-flex">

                <div class="card">
                    <img src="https://www.ghibli.jp/gallery/chihiro025.jpg" class="card-img-top" alt="...">
                    <div class="card-body h-100">
                        <h5 class="card-title">千と千尋の神隠し（2001）</h5>
                        <p class="card-text">
                            《神隱少女》的世界觀，是以人類社會作為主軸所佈局的世界，一切都在虛幻與真實之間，找到了絕佳的平衡位置，慾望、貪婪在不同角色身上所呈現的，透過動畫的魔幻感，產生了一種與現實世界截然不同的情調，被賦予了許多跨時代的意義。
                        </p>
                        <!-- <div class="col d-md-flex justify-content-md-end"> -->
                        <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg-1">
                            more
                        </button>
                        <!-- </div> -->
                        <!-- lg start -->
                        <div class="modal fade" id="exampleModalLg-1" tabindex="-1" aria-labelledby="exampleModalLabel-a" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel-a">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        modal-lg 800px
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- lg end -->
                        <p class="card-text text-end"><small class="text-body-secondary">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12  col-md-4 d-flex">

                <div class="card">
                    <img src="https://www.ghibli.jp/gallery/majo018.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">魔女の宅急便（1989）</h5>
                        <p class="card-text">
                            黑貓吉吉，不單純只是琪琪的寵物，而是象徵了「另一個自己」，琪琪與吉吉對話，其實就是在跟自己對話，《魔女宅急便》故事最後琪琪再也無法和吉吉對話，吉吉像一般貓咪一樣，只會發出「喵」的聲音，暗示琪琪已經不需要分身了，一個人也能在異鄉好好生活下去。
                        </p>
                        <!-- <div class="col d-md-flex justify-content-md-end"> -->
                        <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg-2">
                            more
                        </button>
                        <!-- </div> -->
                        <!-- lg start -->
                        <div class="modal fade" id="exampleModalLg-2" tabindex="-1" aria-labelledby="exampleModalLabel-b" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel-b">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        modal-lg 800px
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- lg end -->
                        <p class="card-text text-end"><small class="text-body-secondary">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12  col-md-4 d-flex">

                <div class="card">
                    <img src="https://www.ghibli.jp/gallery/totoro024.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">となりのトトロ（1988）</h5>
                        <p class="card-text ">
                            宮崎駿的電影之所以讓人充滿希望，是因為故事主角總有著無限的動力、為自己的目標努力前進，即使遇到困難也無所畏懼；而「有些煩惱，丟掉了，才有雲淡風輕的機會。」正是《龍貓》教給我們的，也願所有人都能懂得放下煩惱、像孩子一樣無憂～
                        </p>
                        <!-- <div class="col d-md-flex justify-content-md-end"> -->
                        <button type="button" class="btn btn-outline-secondary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg-3">
                            more
                        </button>
                        <!-- </div> -->
                        <!-- lg start -->
                        <div class="modal fade" id="exampleModalLg-3" tabindex="-1" aria-labelledby="exampleModalLabel-c" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel-c">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        modal-lg 800px
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- lg end -->
                        <p class="card-text text-end"><small class="text-body-secondary">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>


</body>

</html>
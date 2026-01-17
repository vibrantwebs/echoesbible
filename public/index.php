<?php

?>

<html>
    <head>
        <title>Echoes Bible</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <link href="css/index.css" rel="stylesheet">
        <script src="js/index.js"></script>
    </head>
    <body>

        <div class="d-flex">

            <!-- Sidebar -->
            <nav id="sidebarNav" class="bg-dark text-white p-3 vh-100" style="width: 250px;">
                <img src="image/echoes-logo.avif" class="width100 mb-3">
                <ul class="nav nav-pills flex-column gap-1">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="#">
                            <i class="bi bi-compass me-2"></i>
                            Explore Echoes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-journal-text me-2"></i>
                            Notes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-globe me-2"></i>
                            Resources
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-bookmarks me-2"></i>
                            Bookmarks
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-three-dots me-2"></i>
                            Other
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main content -->
            <main class="flex-fill p-4">
                <div class="row">
                    <div class="col-xs-10 col-sm-10">
                        <b>Search</b> <input id="searchInput">
                    </div>
                    <div class="col-xs-2 col-sm-2 bolder">
                        <a href="#" class="echoesDarkBlue">Login</a> | <a href="#" class="echoesDarkBlue">Sign Up</a>
                        <i class="bi bi-person-circle"></i>
                    </div>
                </div>
                <hr>


                <div class="card text-center">
                    <div class="card-header text-start">
                        <button class="btn btn-primary btn-sm">Do Thing</button>
                        <button class="btn btn-secondary btn-sm">Do Thing</button>
                        <button class="btn btn-secondary btn-sm">Do Thing</button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            1 - “Spoke to Moses” (Numbers 1:1) and “Paul, called” (1 Corinthians 1:1)
                        </h5>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <p>
                                        <b>Hebrew</b> וַיְדַבֵּר יְהוָה אֶל־מֹשֶׁה
                                        Vayedabber YHWH el-Mosheh
                                    </p>
                                    <i class="echoesGray">“YHWH spoke to Moses”</i>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <p>
                                        <b>LXX</b> καὶ ἐλάλησεν Κύριος πρὸς Μωυσῆν
                                    </p>
                                    <br>
                                    <i class="echoesGray">Kai elalēsen Kyrios pros Mōysēn</i>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <p>
                                        <b>Greek</b> Παῦλος, κλητὸς ἀπόστολος Χριστοῦ Ἰησοῦ
                                        Paulos, klētos apostolos Christou Iēsou</p>
                                    <i class="echoesGray">“Paul, called [to be] an apostle of Christ Jesus”</i>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="card-footer text-muted text-start">
                        <button id="expandCommentBtn" class="btn btn-primary">
                            <i class="bi bi-chat-left-text me-2"> Comments</i>
                        </button>
                        <br>
                        <br>
                        <div id="expandableComment" class="displayNone">

                            <i><b>*** Make this animate / slide open</b></i>
                            <p>
                                Numbers opens with a direct act of divine speech. Authority, initiative, and content
                                originate wholly with G-d. Moses is not self-appointed; he stands as the recipient and
                                mediator of divine revelation. The census that follows derives its legitimacy not from
                                human administration, but from this prior act of divine address.
                            </p>
                            <p>
                                In a similar manner, Paul does not operate on the basis of self-generated authority. He
                                acts in obedience to a calling that precedes him and transcends his former identity.
                                Just as Moses was drawn out of a violent past and redirected into the way of G-d, Paul
                                was summoned out of his own wilderness to shepherd a people assembled by divine will.
                            </p>
                            <p>
                                In both narratives, these men are not merely appointed to new tasks; they are summoned
                                out of established trajectories into vocations they neither sought nor imagined.
                            </p>
                        </div>
                    </div>
                </div>

            </main>
        </div>

    </body>
</html>

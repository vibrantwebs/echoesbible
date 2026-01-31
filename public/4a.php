<?php

?>
<html>
    <head>
        <title>Echoes Bible</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <link href="/css/index3.css" rel="stylesheet">
        <script src="/js/4a.js"></script>
    </head>
    <body>
        <div class="d-flex">

            <!-- Sidebar -->
            <nav id="sidebarNav" class="bg-dark text-white p-3 vh-100" style="width: 250px;">
                <img src="/image/echoes-logo.avif" class="width100 mb-3">
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
                        </h5>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div id="echoGroup" class="textLeft col-xs-12 col-sm-6">
                                    <h3>Numbers</h3>
                                    <br>
                                    <b>1:1</b> Yahweh <a class="echoOne">spoke to Moses</a> in the wilderness of Sinai, in the
                                    Tent of Meeting, on the first day of the second month, in the
                                    second year after they had come out of the land of Egypt,
                                    saying,
                                    <br>
                                    <b>2</b> “Take a census of all the congregation of the children
                                    of Israel, by their families, by their fathers’ houses, according to
                                    the number of the names, every male, one by one,
                                    <br>
                                    <b>3</b> from twenty
                                    years old and upward, all who are able to go out to war in Israel.
                                    You <a class="echoTwo">and Aaron</a> shall <a class="echoThree">count them by their
                                    divisions. </a>
                                    <br>
                                    <b>4</b> With you there shall be a man of every tribe, each one head of his
                                    fathers’ house.
                                    <br>
                                    <b>5</b> These are the names of the men who shall
                                    stand with you: Of Reuben: Elizur the son of Shedeur.
                                    <br>
                                    <b>6</b> Of Simeon: Shelumiel the son of Zurishaddai.
                                    <br>
                                    <b>7</b> Of Judah: Nahshon
                                    the son of Amminadab.
                                    <br>
                                    <b>8</b> Of Issachar: Nethanel the son of Zuar.
                                    <br>
                                    <b>9</b> Of Zebulun: Eliab the son of Helon.
                                    <br>
                                    <b>10</b> Of the children of Joseph: Of Ephraim: Elishama the son of
                                    Ammihud. Of Manasseh: Gamaliel the son of Pedahzur.
                                    <br>
                                    <b>11</b> Of Benjamin: Abidan the son of Gideoni.
                                    <br>
                                    <b>12</b> Of Dan: Ahiezer the son of Ammishaddai.
                                    <br>
                                    <b>13</b> Of Asher: Pagiel the son of Ochran.
                                    <br>
                                    <b>14</b> Of Gad: Eliasaph the son of Deuel.
                                    <br>
                                    <b>15</b> Of Naphtali: Ahira the son of Enan.
                                    <br>
                                    <b>16</b> <a class="echoFour">These are those who were called of the
                                    congregation</a>, the princes of the tribes of their fathers; they
                                    were the heads of the thousands of Israel.
                                </div>
                                <div id="sidePane" class="textLeft col-xs-12 col-sm-6">
                                    <h3>1 Corinthians</h3>
                                    <br>
                                    <a class="echoOne"><b>1:1</b> Paul, called </a> to be an apostle of Jesus Christ
                                    through the will of God, <a class="echoTwo">and our brother Sosthenes</a>,
                                    <br>
                                    <a class="echoThree"><b>2</b> to the assembly of God which is at Corinth—</a>
                                    those who are sanctified in Christ Jesus, <a class="echoFour">called
                                    saints, with all who call on the name</a> of our Lord
                                    Jesus Christ in every place, both theirs and ours:
                                    <br>
                                    <b>3</b> Grace to you and peace from God our Father and the Lord Jesus Christ.

                                    <div class="subExpander displayNone">
                                        <hr>
                                        <b>Translations</b>
                                        <br>
                                        <b>Hebrew:</b> תִּפְקְדוּ אֹתָם לְצִבְאֹתָם
                                        Tifqedu otam le-tsiv’otam
                                        “You shall count them by their divisions/hosts”
                                        <br>
                                        <br>
                                        <b>LXX:</b> ἐπισκέψασθε αὐτοὺς κατὰ τὰς δυνάμεις αὐτῶν
                                        Episkesasthe autous kata tas dynameis autōn
                                        <br>
                                        <br>
                                        <b>Greek:</b> τῇ ἐκκλησίᾳ τοῦ Θεοῦ τῇ οὔσῃ ἐν Κορίνθῳ
                                        Tē ekklēsia tou Theou tē ousē en Korinthō
                                        “To the assembly of God which is in Corinth”
                                        <hr>
                                        <b>Commentary</b>
                                        <p style="color: gray">
                                            <i>
                                                In Numbers, the census functions as more than a matter of administration; it is an act of theological ordering. The vocabulary employed for “counting” in this Parshat (Bamidbar) derives from two distinct Hebrew roots, each carrying significant conceptual weight. The verb used in this passage, pāqad (פקד), is closely associated with the idea of entrusting or appointing to responsibility. Consequently, the act of counting described here is not merely numerical but vocational: to be counted is to be entrusted. The census, therefore, delineates those who are placed under covenantal responsibility and divine oversight.
                                                <br>
                                                <br>
                                                In a parallel manner, the Corinthian church is presented not as a voluntary association, but as a divinely constituted assembly, standing in continuity with Israel’s ordered community. The Greek term employed in the corresponding echo passage is ekklēsia (ἐκκλησία), which the Septuagint frequently uses to render the Hebrew qāhāl (קָהָל), the covenant assembly. Notably, qāhāl is also associated with related semantic fields that include counting and lifting up. Within Parshat Bamidbar, the phrase “lift up the heads” of the people recurs, pairing the act of enumeration with elevation and affirmation. The resulting word picture is both positive and pastoral, aligning naturally with the noun sense of qāhāl as an assembled people summoned into covenantal purpose.
                                                <br>
                                                <br>
                                                Across both the Torah and its echo, the emphasis falls on the formation of a people who are simultaneously counted and entrusted. Assembly here is neither passive nor accidental; it is purposeful, directive, and yet encouraging. Those who are gathered are lifted up precisely because they are known, ordered, and commissioned within the covenantal design.
                                            </i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>

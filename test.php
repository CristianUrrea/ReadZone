<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="/js/lib/dummy.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/result-light.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <style type="text/css">
        @media only screen and (max-width: 600px) {
            .searchbarfix {
                height: 56px !important;
            }
        }

        @media only screen and (min-width: 601px) {
            .searchbarfix {
                height: 64px !important;
            }
        }

        .navfix {
            position: relative;
            margin-right: 0;
        }

        .navfix2 {
            position: absolute;
        }
    </style>
    <!-- TODO: Missing CoffeeScript 2 -->

    <script type="text/javascript">
        window.onload = function() {

            $(document).ready(function() {
                var trig = 1;
                //fix for chrome
                $("#search").addClass('searchbarfix');

                //animate searchbar width increase to  +150%
                $('#search').click(function(e) {
                    //handle other nav elements visibility here to avoid push down
                    //$('.search-hide').addClass('hide');
                    if (trig == 1) {
                        $('#navfix2').animate({
                            width: '+=150',
                            marginRight: 0
                        }, 400);

                        trig++;
                    }

                });

                // if user leaves the form the width will go back to original state

                $("#search").focusout(function() {

                    $('#navfix2').animate({
                        width: '-=150'
                    }, 400);
                    trig = trig - 1;
                    //handle other nav elements visibility first to avoid push down
                    //$('.search-hide').removeClass('hide');

                });

            });

        }
    </script>

</head>

<body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <nav>
        <div class="nav-wrapper">
            <a hef="#!" class="brand-logo left "><i class="material-icons">tag_faces</i>Logo</a>
            <ul class="right ">
                <li>
                    <form id="navbarsearch">
                        <div class="navfix">
                            <div id="navfix2" style="width: 262px; margin-right: 0px;">
                                <div class="input-field">
                                    <input id="search" type="search" required="" class="searchbarfix">
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
                <li>
                    <a href="#">Link</a>
                </li>
            </ul>
            <ul class="left">
                <li>
                    <a class="search-hide" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </li>

                <li>
                    <a class="search-hide" href="#">Link</a>
                </li>
                <li>
                    <a class="search-hide" href="#">Link</a>
                </li>
                <li>
                    <a class="search-hide" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        // tell the embed parent frame the height of the content
        if (window.parent && window.parent.parent) {
            window.parent.parent.postMessage(["resultsFrame", {
                height: document.body.getBoundingClientRect().height,
                slug: "Lkwk7dfL"
            }], "*")
        }
    </script>

    <div class="hiddendiv common"></div>
</body>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/CWStylesheet.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/Validation.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="HomePage.html">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">MLA</button>
                        <div class="dropdown-content">
                            <a href="#">Book</a>
                            <a href="#">Website</a>
                            <a href="#">Film</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">APA</button>
                        <div class="dropdown-content">
                            <a href="#">Book</a>
                            <a href="#">Website</a>
                            <a href="#">Film</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Chicago</button>
                        <div class="dropdown-content">
                            <a href="#">Book</a>
                            <a href="#">Website</a>
                            <a href="#">Film</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">IEEE</button>
                        <div class="dropdown-content">
                            <a href="#">Book</a>
                            <a href="#">Website</a>
                            <a href="#">Film</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <h1>MLA Book Citation</h1>
            <p>Fill out the form below and submit to receive the citation.</p>
            <hr>
            <br/>
            <form name="form1" method="POST">
                <label> Author's First Name
                    <br/>
                    <input type="text" name="First Name" id="First Name" size="30"/>
                </label>
                <label> Author's Last Name
                    <br/>
                    <input type="text" name="Last Name" id="Last Name" size="30"/>
                </label>
                <label> Title of Book
                    <br/>
                    <input type="text" name="Title" id="Title" size="30"/>
                </label>
                <label> City of Publication
                    <br/>
                    <input type="text" name="City" id="City" size="30"/>
                </label>
                <label> Publisher
                    <br/>
                    <input type="text" name="Publisher" id="Publisher" size="30"/>
                </label>
                <label> Publication Date (Year)
                    <br/>
                    <input type="text" name="Year" id="Year" size="30"/>
                </label>
                <br/>
                <input type="submit" value="Submit Order" id="submit"/>
                <input type="reset" value="Clear Order Form"/>
            </form>
        </div>
        <div class="col-sm-2 sidenav">
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>

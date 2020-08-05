
<head>
    <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/stylesheet/stylesheet.css" rel="stylesheet">
    <title>AurEl</title>
</head>
<header class="page-header">
    <h1>AurEl</h1>
</header>
<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">

    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/index.php">Projet</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/controler/liste.php">article</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="page3.html">Forum</a>
        </li>
    </ul>

    <nav class="navbar navbar-expand-sm bg-light navbar-light ml-auto">

        <form class="form-inline"  method="GET" action="../controler/recherche.php">
            <input class="form-control mr-sm-2" type="text" name="recherche">
            <input class="btn btn-success" type="SUBMIT" value="Search!">
        </form>
    </nav>

 </nav>

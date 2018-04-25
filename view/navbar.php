<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Bragging Rites</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../controller/controller.php?action=Home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controller/controller.php?action=calendar">Games Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controller/controller.php?action=Brackets">Brackets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controller/controller.php?action=Register">Register</a>
            </li>
            <li class="nav-item">
                <ul>
                    <li> <a class="nav-link" href="../controller/controller.php?action=TopGames">Top Games</a></li>
                    <li><a class="nav-link" href="../controller/controller.php?action=SearchGames">Search Games</a></li>
                </ul></li>
            <li class="nav-item">
                <a class="nav-link" href="../controller/controller.php?action=FAQ">FAQ</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../controller/controller.php?action=About">About us</a>
                    <a class="dropdown-item" href="#">Contact info</a>
                    <a class="dropdown-item" href="../controller/controller.php?action=EmailSend">Email</a>
                    <a class="dropdown-item" href="../controller/controller.php?action=RegisterMember">Sign up stuff!</a>
                    <a class="dropdown-item" href="../controller/controller.php?action=FileUpload">upload file!</a>
                    <a class="dropdown-item" href="../controller/controller.php?action=quoteUpload">Add a quote file!</a>
                    <a class="dropdown-item" href="../controller/controller.php?action=imageUpload">want to add an image?</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-bottom">
    <a class="navbar-brand" href="../view/navbar.php">Bragging Rites</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Footer">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../controller/controller.php?action=Home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Email.php">Email Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="ModDate">
                    <script>document.lastModified</script>
                </a>
            </li>
        </ul>

    </div>
</nav>
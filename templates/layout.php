<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="https://use.typekit.net/rrn0mma.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <img src="" alt="">
        </div>
        <div class="header__time">
            <img src="" alt="">
            <span></span>
        </div>
        <div class="header__icon">
            <img src="" alt="">
        </div>
        <div class="header__settings">
            <img src="" alt="">
            <nav class="header__nav">
                
            </nav>
        </div>
    </header>
    <main>
        <aside class="aside">
            <ul>
                <li><a href="/"><p>Notes list</p> <img src="img/group 4.png" alt=""></a></li>
                <li><a href="/?action=create"><p>new note</p> <img src="img/group 3.png" alt=""></a></li>
            </ul>
            <div class="aside__bar"></div>
            
        </aside>
        <section class="main">
            <div class="notes__search">

            </div>
            <div class="notes__notes">
                <?PHP        
                    require_once("templates/pages/$page.php");
                ?>
            </div>
        </section>
    </main>
    
    
    <footer>

    </footer>
</body>
</html>
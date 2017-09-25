<div class="header">
    <div class="icon-container">
        <div class="web-icon"><a href="home.php"><img id="web_icon" src="images/goofy_grandad_icon.png"></a></div>
        <div class="web-title"><a href="home.php"><img id="web_title" src="images/web_title_new.png"></a></div>
    </div>

    <div class="nav-container">
        <div class="nav-item">
            <a href="home.php" <?php if ($currentPage == "home") {echo "id=\"current_nav_item\"";}?>>
                Home</a></div>
        <div class="nav-item" >
            <a href="about.php" <?php if ($currentPage == "about") {echo "id=\"current_nav_item\"";}?>>
                About</a></div>
        <div class="nav-item"><a href="https://www.youtube.com/channel/UCuxOkEi00LqXOWA1GqS7SDg"
                                 target="_blank">Videos</a></div>
        <div class="nav-item"><a href="shop.html">Shop</a></div>
        <div class="nav-item"><a href="events.html">Events</a></div>
        <div class="nav-item"><a href="review.html">Review</a></div>
        <div class="nav-item"><a href="contact.html">Contact</a></div>
        <div class="nav-item"><a href="faq.html">FAQ</a></div>
    </div>
</div>
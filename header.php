<div class="header">
    <div class="web-icon"><a href="index.php"><img id="web_icon" src="images/goofy_grandad_icon.png"></a></div>
    <div class="web-title"><a href="index.php"><img id="web_title" src="images/web_title_new.png"></a></div>

    <div class="nav-container">
        <div class="nav-item">
            <a href="index.php" <?php if ($currentPage == "home") {echo "id=\"current_nav_item\"";}?>>
                Home</a></div>
        <div class="nav-item" >
            <a href="about.php" <?php if ($currentPage == "about") {echo "id=\"current_nav_item\"";}?>>
                About</a></div>
        <div class="nav-item"><a href="https://www.youtube.com/channel/UCqppi0-9FmF-o3b4gDNUWng/featured"
                                 target="_blank">Videos</a></div>
         <div class="nav-item" >
            <a href="shop.php" <?php if ($currentPage == "shop") {echo "id=\"current_nav_item\"";}?>>
                Shop</a></div>
         <div class="nav-item" >
            <a href="events.php" <?php if ($currentPage == "events") {echo "id=\"current_nav_item\"";}?>>
                Events</a></div>
         <div class="nav-item" >
            <a href="review.php" <?php if ($currentPage == "review") {echo "id=\"current_nav_item\"";}?>>
                Review</a></div>
        <div class="nav-item" >
            <a href="contact.php" <?php if ($currentPage == "contact") {echo "id=\"current_nav_item\"";}?>>
                Contact</a></div>
         <div class="nav-item" >
            <a href="faq.php" <?php if ($currentPage == "faq") {echo "id=\"current_nav_item\"";}?>>
                FAQ</a></div>
    </div>
</div>
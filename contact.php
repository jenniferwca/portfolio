<?php
    include "header.php";
    include "svg/bg_grey1.php";
    include "svg/bg_grey2.php";
    include "svg/bg_grey3.php";
    include "svg/bg_grey4.php";

    require_once "library/contactform.php";
    
?>
<section class="contact_page">
    <div class="contacttitle">
        <h2>SEND ME A MESSAGE</h2>
        <p>info@jenniferw.ca</p>
    </div>
    <div class="morelinks">
        <a class="iconlink" href="https://www.linkedin.com/in/jenniferwca" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a class="iconlink" href="https://github.com/jenniferwca" target="_blank"><i class="fab fa-github"></i></a>
    </div>
    <div class="emailform">
    <form action="" method="post">
    <span class="sentmsg"><?= $sentmsg; ?></span>
        <label>Full Name</label>
            <input type="text" id="fname" name="name" placeholder="John Doe" value="<?= $name; ?>">
        <label>Email</label>
            <input type="text" id="email" name="email" placeholder="john.doe@email.com" value="<?= $email; ?>">
        <label>Message</label>
            <textarea type="text" id="c_msg" name="msg" placeholder="Leave your message here" value="<?= $msg; ?>"></textarea>
        <input type="submit" name="submit" value="Send">
    </form>
    <div class="bg_animation"><div>
</div>
</section>
<?php
    include "footer.php";
?>
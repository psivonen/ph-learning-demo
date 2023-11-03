<!DOCTYPE html>
<html lang="en">

<?php
$title = "Contact";
include('header2.php');
?>

<div class="contact-column">
    <div class="item-left">
        <div class="item-left-content">
            <h2>Get in touch</h2>
            <p> If you have any questions or problems fill a form or send an email.
                <br>
                <br>
                <i class="fa-solid fa-envelope"></i> info@companyname.com<br>
                <i class="fa-solid fa-phone"></i> +358 401234567<br>
            </p>
        </div>
    </div>
    <div class="item-right">
        <form class="row g-3">
        <div class="col-12">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Your name">
            </div>
            <div class="col-12">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="you@company.com">
            </div>
            <div class="col-12">
                <label for="inputSubject" class="form-label">Select subject</label>
                <select id="inputSubject" class="form-select">
                    <option selected disabled>Choose...</option>
                    <option>Courses and/or workshops</option>
                    <option>Photography services</option>
                    <option>Pricing</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="col-12">
                <label for="inputSubject" class="form-label">Message</label>
                <textarea class="form-control" rows="6" placeholder="Your message..."></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send message</button>
            </div>
        </form>
    </div>
</div>

<?php
include('footer.php');
?>

</html>
<!DOCTYPE html>
<html lang="en">

<?php
include('header2.php');
?>

<div class="contact-column">
    <div class="item-right">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputfName" class="form-label">First name</label>
                <input type="text" class="form-control" id="inputfName" placeholder="First name">
            </div>
            <div class="col-md-6">
                <label for="inputlName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="inputlName" placeholder="Last name">
            </div>
            <div class="col-12">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="you@company.com">
            </div>
            <div class="col-12">
                <label for="inputMobile" class="form-label">Mobilenumber</label>
                <input type="number" class="form-control" id="inputMobile" placeholder="+358XX1234567">
            </div>
            <div class="col-12">
                <label for="inputSubject" class="form-label">Select course</label>
                <select id="inputSubject" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>

<?php
include('footer.php');
?>

</html>
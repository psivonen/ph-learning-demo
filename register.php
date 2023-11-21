<!DOCTYPE html>
<html lang="en">

<?php
include('form_validation.php');
include('header.php');
?>

<div class="container-lg">
    <div class="container-register">
        <h2>Register</h2>
        <form class="row g-3 needs-validation" method="post" novalidate>
            <div class="col-12">
                <label for="course_id" class="form-label">Select course/workshop</label>
                <select autofocus required id="courses" name="course_id" class="form-select <?php is_invalid('course_id'); ?>">
                    <option value="">...</option>
                </select>
                <div class="invalid-feedback">Select a course/workshop.</div>
            </div>
            <div class="col-md-6">
                <label for="participant_fname" class="form-label">First name</label>
                <input id="participant_fname" name="participant_fname" pattern="<?= trim($patterns['participant_fname'], "/"); ?>" type="text" class="form-control <?php is_invalid('participant_fname'); ?>" placeholder="First name" value="<?= showField('participant_fname'); ?>" required>
                <div class="invalid-feedback">First name is required.</div>
            </div>
            <div class="col-md-6">
                <label for="participant_lname" class="form-label">Last name</label>
                <input id="participant_lname" name="participant_lname" pattern="<?= trim($patterns['participant_lname'], "/"); ?>" type="text" class="form-control <?php is_invalid('participant_lname'); ?>" placeholder="Last name" value="<?= showField('participant_lname'); ?>" required>
                <div class="invalid-feedback">Last name is required.</div>
            </div>
            <div class="col-12">
                <label for="participant_email" class="form-label">Email address</label>
                <input id="participant_email" name="participant_email" pattern="<?= trim($patterns['participant_email'], "/"); ?>" type="email" class="form-control <?php is_invalid('participant_email'); ?>" placeholder="you@company.com" value="<?= showField('participant_email'); ?>" required>
                <div class="invalid-feedback"><?php echo error('participant_email'); ?></div>
            </div>
            <div class="col-12">
                <label for="participant_phone" class="form-label">Mobilenumber</label>
                <input id="participant_phone" name="participant_phone" pattern="<?= trim($patterns['participant_phone'], "/"); ?>" type="text" class="form-control <?php is_invalid('participant_phone'); ?>" placeholder="+358XX1234567" value="<?= showField('participant_phone'); ?>" required>
                <div class="invalid-feedback">Mobilenumber is required.</div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </div>
            <div class="col-12">
                <?php
                if (isset($_POST['register'])) {
                    if ($errors) {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">";
                        echo "<i class=\"bi bi-exclamation-triangle-fill\"></i> Errors:<br>";
                        foreach ($errors as $field => $value) echo "$field<br>";
                        echo "</div>";
                    } else {
                        echo "<div class=\"alert alert-success\" role=\"alert\">";
                        if ($mailSent)
                            echo "Registration was succesful. Confirmation message has been sent to your email.";
                        else
                            echo "<i class=\"bi bi-check-circle-fill\"></i> Added: $added new participant<br></div>";
                    }
                    echo "</div></div>";
                }
                ?>
            </div>
        </form>
    </div>
</div>

<?php
include('footer.php');
?>

</html>
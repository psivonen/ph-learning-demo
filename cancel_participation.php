<!DOCTYPE html>
<html lang="en">

<?php
include('form_validation.php');
include('header2.php');

?>

<div class="container-lg">
    <div class="container-register">
        <h2>Cancel participation</h2>
        <form class="row g-3 needs-validation" method="post" novalidate>
            <div class="col-12">
                <label for="course_id" class="form-label">Course/workshop</label>
                <select autofocus required id="course_id" name="course_id" class="form-select <?php is_invalid('course_id'); ?>"><?php courses(); ?></select>
                <div class="invalid-feedback">Select a course/workshop.</div>
            </div>
            <div class="col-12">
                <label for="participant_email" class="form-label">Email address</label>
                <input id="participant_email" name="participant_email" pattern="<?= trim($patterns['participant_email'], "/"); ?>" type="email" class="form-control <?php is_invalid('participant_email'); ?>" placeholder="you@company.com" value="<?= showField('participant_email'); ?>" required>
                <div class="invalid-feedback"><?php echo error('participant_email'); ?></div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>

<?php
include('footer.php');
?>

</html>
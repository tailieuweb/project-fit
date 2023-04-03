<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <?php echo HTML::style('packages/foostart/css/mail-base.css'); ?>

    <?php echo HTML::style('packages/foostart/css/font-awesome-4.7.0.min.css'); ?>

</head>
<body>
<h2>Password recovery for <?php echo Config::get('acl_base.app_name'); ?></h2>
<div>
    We received a request to change your password, if you authorize it <?php echo $body; ?><br/>
    Otherwise ignore this email.
</div>
</body>
</html>
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/mail/reminder.blade.php ENDPATH**/ ?>
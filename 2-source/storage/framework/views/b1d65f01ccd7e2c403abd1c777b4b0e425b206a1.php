<img src="<?php echo $captcha->getImageSrcTag(); ?>">

<?php $__env->startSection('footer_scripts'); ?>
    ##parent-placeholder-c55a01b0a8ef1d7b211584e96d51bdf8930d1005##

    <script type='text/javascript'>
        $(document).ready(function () {
            //------------------------------------
            // captcha regeneration
            $("#captcha-gen-button").click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "/captcha-ajax",
                    method: "POST",
                    headers: {'X-CSRF-Token': '<?php echo csrf_token(); ?>'}
                }).done(function (image) {
                    $("#captcha-img-container").html(image);
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/client/auth/captcha-image.blade.php ENDPATH**/ ?>
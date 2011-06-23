<?php $view->extend('::base.html.php') ?>
<div>
    List of applications already registred.
</div>
<form method="post">
    <div>
        <div>
            Register a new application and start configuring it.
        </div>
        <label for="app_name">Application name</label>
        <input type="text" id="app_name" name="app_name">
        <input type="submit" value="Register application">
    </div>
</form>

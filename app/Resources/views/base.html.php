<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $view['slots']->output('title', 'Functionalities Server ') ?></title>
        <link rel="shortcut icon" href=<?php echo $view['assets']->getUrl('favicon.ico') ?>"" />
    </head>
    <body>
        <h1>Functionalities Server</h1>
        <?php echo $view['slots']->output('_content') ?>
        <?php echo $view['slots']->output('javascripts') ?>
    </body>
</html>

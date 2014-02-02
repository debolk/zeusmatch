<!DOCTYPE html>
<html>
    <head>
        <title>ZeusMatch</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/stylesheets/zeusmatch.css" />
        <link rel="stylesheet" href="/stylesheets/jquery.mobile.icons-1.4.0.min.css" />
        <link rel="stylesheet" href="/stylesheets/jquery.mobile.structure-1.4.0.min.css" />
        <link rel="stylesheet" href="/stylesheets/application.css" />
    </head>
    <body>

        <div data-role="page">
            <div data-role="header">
                <h1>ZeusMatch</h1>
                <a href="/settings" class="ui-btn-right" data-icon="gear">Opties</a>
            </div>
            <div role="main" class="ui-content">
                <?php echo $content; ?>
            </div>
        </div>

        <script type="text/javascript" src="/javascripts/jquery-2.1.0.min.js"></script>        
        <script type="text/javascript" src="/javascripts/jquery.mobile-1.4.0.min.js"></script>        
    </body>
</html>
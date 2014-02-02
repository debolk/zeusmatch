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
            <div data-role="header" data-position="fixed">
                <a href="#" data-icon="carat-l" class="ui-btn-left">Terug</a>
                <h1>ZeusMatch</h1>
            </div>
            <div role="main" class="ui-content">
                <?php echo $content; ?>
            </div>
            <div data-role="footer" data-position="fixed">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#" data-icon="gear" <?php echo Request::is('settings') ? 'class="ui-btn-active"': null; ?>>Instellingen</a></li>
                        <li><a href="#" data-icon="power" <?php echo Request::is('privacy') ? 'class="ui-btn-active"': null; ?>>Privacy</a></li>
                        <li><a href="#" data-icon="mail" <?php echo Request::is('contact') ? 'class="ui-btn-active"': null; ?>>Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="/javascripts/jquery-2.1.0.min.js"></script>        
        <script type="text/javascript" src="/javascripts/jquery.mobile-1.4.0.min.js"></script>        
    </body>
</html>
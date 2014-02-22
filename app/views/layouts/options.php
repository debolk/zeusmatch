<?php echo View::make('layouts/_header', ['page_id' => $page_id]); ?>
    <a href="/match" data-icon="carat-l">Terug</a>
</div>
<div role="main" class="ui-content">
    <?php echo $content; ?>
</div>
<div data-role="footer" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <?php if (Auth::check()): ?>
                <li><a href="/settings" data-icon="gear" <?php echo Request::is('settings') ? 'class="ui-btn-active"': null; ?>>Instellingen</a></li>
            <?php endif; ?>
            <li><a href="/privacy" data-icon="power" <?php echo Request::is('privacy') ? 'class="ui-btn-active"': null; ?>>Privacy</a></li>
            <li><a href="/contact" data-icon="mail" <?php echo Request::is('contact') ? 'class="ui-btn-active"': null; ?>>Contact</a></li>
        </ul>
    </div>
</div>
<?php echo View::make('layouts/_footer'); ?>

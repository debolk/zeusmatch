<?php echo View::make('layouts/_header', ['page_id' => $page_id]); ?>
            </div>
            <div role="main" class="ui-content">
                <?php echo $content; ?>
            </div>
<div data-role="footer" data-position="fixed">
    <div data-role="navbar">
        <ul>
            <li><a href="/privacy" data-icon="power">Privacy</a></li>
            <li><a href="/contact" data-icon="mail">Contact</a></li>
        </ul>
    </div>
</div>
<?php echo View::make('layouts/_footer'); ?>

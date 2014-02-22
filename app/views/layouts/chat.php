<?php echo View::make('layouts/_header', ['page_id' => $page_id]); ?>
    <a href="#" data-rel="back" data-icon="carat-l">Terug</a>
    </div>
    <div role="main" class="ui-content">
        <?php echo $content; ?>
    </div>
<?php echo View::make('layouts/_footer'); ?>

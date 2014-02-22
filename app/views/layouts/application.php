<?php echo View::make('layouts/_header', ['page_id' => $page_id]); ?>

                <a href="/settings" class="ui-btn-right" data-icon="gear" data-iconpos="notext"></a>
                <a href="/chat" class="ui-btn-left" data-icon="bullets" data-iconpos="notext"></a>
            </div>
            <div role="main" class="ui-content">
                <?php echo $content; ?>
            </div>
<?php echo View::make('layouts/_footer'); ?>

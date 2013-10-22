<?php echo get_avatar($comment, $size = '64'); ?>
<div class="comment__body  media__body">
  <h4 class="comment__heading  media__heading  epsilon"><?php echo get_comment_author_link(); ?></h4>
  <time datetime="<?php echo comment_date('c'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>" class="smallprint"><?php printf(__('%1$s', 'zombie'), get_comment_date(),  get_comment_time()); ?></a></time>
  <?php edit_comment_link(__('(Edit)', 'zombie'), '', ''); ?>

  <?php if ($comment->comment_approved == '0') : ?>
    <div class="alert">
      <?php _e('Your comment is awaiting moderation.', 'zombie'); ?>
    </div>
  <?php endif; ?>

  <div class="comment__body__content  media__body__content"><?php comment_text(); ?></div>
  <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
</div>
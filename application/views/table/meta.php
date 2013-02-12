<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?php if ($meta->key == 'avatar') { ?>
    <td><?php echo HTML::image($meta->value, array('alt' => 'Avatar')); ?></td>

<?php } else if ($meta->key == 'tags') { ?>
    <td><?php echo $meta->value; ?></td>
<?php } ?>
<?php defined('SYSPATH') or die('No direct script access.'); ?>
 
<?php foreach ($users as $user) : ?>
<tr>
    <td><?php echo $user->firstname." ".$user->surname; ?></td>

    <?php foreach ($user->metas->find_all() as $meta) : ?>
        <?php echo View::factory('table/meta', array('meta'=>$meta)); ?>
    <?php endforeach; ?>
</tr>
<?php endforeach; ?>


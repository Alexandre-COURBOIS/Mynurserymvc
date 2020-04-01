<?php // view/app/article/add.php ?>


<form action="" method="post">

        <?php echo $form->label('title'); ?>
        <?php echo $form->input('title'); ?>
        <?php echo $form->error('title'); ?>


        <?php echo $form->label('content'); ?>
        <?php echo $form->textarea('content'); ?>
        <?php echo $form->error('content'); ?>

        <?php echo $form->submit(); ?>

</form>





<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
    <?php print $title; ?>
<?php endif; ?>


<div class="project-list-content">
    <?php foreach ($rows as $id => $row): ?>
        <div<?php if ($classes_array[$id]): ?> class="<?php print $classes_array[$id]; ?>"<?php endif; ?>>
            <?php print $row; ?>
        </div>
    <?php endforeach; ?>
</div>

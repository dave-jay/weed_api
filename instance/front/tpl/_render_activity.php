<?php if (empty($activity)): ?>
    <div class="red-text">No activity logged as of now!</div>
<?php else: ?>
    <ul class="collection">
        <?php foreach ($activity as $each_activity): ?>
            <li class="collection-item">
                <div><?php print $each_activity['activity']; ?></div>
                <?php if ($each_activity['activity_type'] == 'REVIEW_MESSAGE'): ?>
                    <small class="grey-text">- Added by <?php print $each_activity['employee_name'] ?> on <?php print date("m/d H:i a", strtotime($each_activity['created_at'])) ?></small>
                <?php endif ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

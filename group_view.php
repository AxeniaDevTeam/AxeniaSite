<?php
if (!isset($site)) {
    require_once("SiteService.php");
    $site = new SiteService();
}
?>
<div class="col-md-12 center">
    <?php
    echo $site->createCharBarView($_GET['group_id'], "group");
    ?>
</div>

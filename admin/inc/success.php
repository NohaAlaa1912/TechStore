<?php if($session->has('success')) : ?>
    <div class="div alert alert-success text-center">
        <?= $session->get('success') ;?>
    </div>
<?php endif ; $session->remove('success');
?>
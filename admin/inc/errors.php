<?php if($session->has("errors")): ?>
	<div class="alert alert-danger">
	<?php foreach($session->get("errors") as $err): ?>
		<p class="mb-0"><?= $err ;?></p>	
	<?php endforeach ; $session->remove("errors"); ?>		
	</div>
<?php endif ;?>		
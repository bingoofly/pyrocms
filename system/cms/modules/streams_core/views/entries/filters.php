<section class="filters p m-t margin-bottom">

	<?php echo form_open(null, array('method' => 'get', 'class' => 'form-inline'), array('filter-'.$stream->stream_namespace.'-'.$stream->stream_slug => 'y')); ?>

		<?php foreach ($filters as $filter): ?>

			<div class="form-group">
				<?php echo $stream_fields->findBySlug($filter)->getType()->getFilterOutput(); ?>
			</div>

		<?php endforeach; ?>
		
		<div class="form-group">

			<div>
				<button class="btn btn-success"><?php echo lang('buttons:filter'); ?></button>
				<a class="btn btn-default clear-filters" href="<?php echo site_url(uri_string()); ?>"><?php echo lang('buttons:clear'); ?></a>
			</div>
			
		</div>

	<?php echo form_close(); ?>

</section>
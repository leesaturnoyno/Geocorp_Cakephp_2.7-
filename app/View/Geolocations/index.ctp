<?php echo $this->Html->css('datatables/dataTables.bootstrap'); ?>
<div class="row">
    <div class="col-xs-12">

    <div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title"><?php echo __('Geolocations'); ?></h3>
			<div class="box-tools pull-right">
                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> New Geolocation'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
            </div>
		</div>	
			<div class="box-body table-responsive">
                <table id="Geolocations" class="table table-bordered table-striped">
					<thead>
						<tr>
													<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('status'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('latitud'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('longitud'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('modified'); ?></th>
													<th class="text-center"><?php echo $this->Paginator->sort('patient_id'); ?></th>
												<th class="text-center"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($geolocations as $geolocation): ?>
	<tr>
		<td class="text-center"><?php echo h($geolocation['Geolocation']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($geolocation['Geolocation']['status']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($geolocation['Geolocation']['latitud']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($geolocation['Geolocation']['longitud']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($geolocation['Geolocation']['created']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($geolocation['Geolocation']['modified']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($geolocation['Patient']['person_id'], array('controller' => 'patients', 'action' => 'view', $geolocation['Patient']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $geolocation['Geolocation']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $geolocation['Geolocation']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $geolocation['Geolocation']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $geolocation['Geolocation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

<?php
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('plugins/datatables/jquery.dataTables');
	echo $this->Html->script('plugins/datatables/dataTables.bootstrap');
?>
<script type="text/javascript">
    $(function() {
        $("#Geolocations").dataTable();
    });
</script>
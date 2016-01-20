<div class="userstatuses index">
	<div class="row">
		<div class="col-md-12">
				<h1 class="page-header"><?php echo __('Userstatuses'); ?></h1>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
	            <div class="panel-heading">
    	            <div class="btn-group">
	                    <?php echo $this->Html->link(__('<span class="fa fa-plus"></span>&nbsp;&nbsp;New Userstatus'), array('action' => 'add'), array('escape' => false,'class'=>'btn btn-primary')); ?> 
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
									<li><?php echo $this->Html->link(__('<span class="fa fa-list"></span>&nbsp;&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="fa fa-plus"></span>&nbsp;&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
                        </ul>
                    </div>
                	            </div>
	        </div>    <!-- /.panel-heading -->
            	<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
								<th><?php echo $this->Paginator->sort('id'); ?></th>
								<th><?php echo $this->Paginator->sort('name'); ?></th>
								<th><?php echo $this->Paginator->sort('created'); ?></th>
								<th><?php echo $this->Paginator->sort('modified'); ?></th>
								<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($userstatuses as $userstatus): ?>
					<tr>
						<td><?php echo h($userstatus['Userstatus']['id']); ?>&nbsp;</td>
						<td><?php echo h($userstatus['Userstatus']['name']); ?>&nbsp;</td>
						<td><?php echo h($userstatus['Userstatus']['created']); ?>&nbsp;</td>
						<td><?php echo h($userstatus['Userstatus']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="fa fa-search"></span>', array('action' => 'view', $userstatus['Userstatus']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="fa fa-edit"></span>', array('action' => 'edit', $userstatus['Userstatus']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="fa fa-times"></span>', array('action' => 'delete', $userstatus['Userstatus']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $userstatus['Userstatus']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
					</tbody>
				</table>
                <div class="panel-footer">
					<p>
						<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
					</p>
		
					<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
					<ul class="pagination pagination-sm">
						<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
					</ul>
					<?php } ?>

	            </div>
            </div>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->
</div><!-- end containing of content -->

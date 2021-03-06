<?php
use backend\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
AppAsset::register($this);
$this->title = 'Category';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Category
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Category</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Category</h3>

						<div class="box-tools">
							<div class="input-group input-group-sm" style="width: 150px;">
								<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

								<div class="input-group-btn">
									<button type="submit" class="btn btn-default">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>
						</div>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tbody>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Type</th>
									<th>Status</th>
									<th>
										<a href="<?=Url::to('create')?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"></i> Add</a>
									</th>
								</tr>
								<tr>
									<td>183</td>
									<td>John Doe</td>
									<td>1</td>
									<td>1</td>
									<td>
										<a href="" class="badge bg-red">
											<i class="fa fa-trash-o"></i> Del</a>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
						<div class="box-footer clearfix">
							<ul class="pagination pagination-sm no-margin pull-right">
								<li>
									<a href="#">«</a>
								</li>
								<li>
									<a href="#">1</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">3</a>
								</li>
								<li>
									<a href="#">»</a>
								</li>
							</ul>
						</div><!-- /.box-body -->
					</div><!-- /.box -->
				</div>
			</div><!-- /.row -->
		</section><!-- /.content -->
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<?php $form = ActiveForm::begin(['id' => 'category-create-form', 'action' => 'create']);?>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Category Add</h4>
					</div>
					<div class="modal-body">
						<div class="box-body">
							<?=$form->field($model, 'name')->textInput(['autofocus' => true]);?>
							<?=$form->field($model, 'parentId')->dropDownList($categories);?>
							<?=$form->field($model, 'type')->dropDownList($categories);?>
						</div><!-- /.box-body -->
					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
					<?php ActiveForm::end();?>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div><!-- /.content-wrapper -->
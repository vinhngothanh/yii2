<?php

use yii\grid\GridView;
use yii\grid\Column;
use yii\grid\DataColumn;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Product
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Product</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Product</h3>

						<div class="box-tools">
							<div class="input-group input-group-sm" style="width: 150px;">
								<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

								<div class="input-group-btn">
									<button type="submit" class="btn btn-default" ><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tbody><tr>
								<th>ID</th>
								<th>Name</th>
								<th>category</th>
								<th>Infomation</th>
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
									<a href="" class="badge bg-gray"><i class="fa fa-pencil"></i> Edit</a>
									<a href="" class="badge bg-red"><i class="fa fa-trash"></i> Del</a>
								</td>
							</tr>

						</tbody></table>
					</div>
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">«</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>

				<!-- /.box -->
			</div>
		</div>
		<!-- /.row -->




		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Product Add</h4>
						</div>
						<div class="modal-body">
							<form role="form">
								<div class="box-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Name:</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										<span class="help-block">Help block with error</span>
									</div>
									<div class="form-group">
										<label>Category</label>
										<select class="form-control">
											<option>option 1</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										</select>
									</div>

									<div class="form-group">
										<label for="exampleInputEmail1">Price:</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										<span class="help-block">Help block with error</span>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Sales:</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										<span class="help-block">Help block with error</span>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Origin:</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										<span class="help-block">Help block with error</span>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Mass:</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										<span class="help-block">Help block with error</span>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Color:</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										<span class="help-block">Help block with error</span>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Description:</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										<span class="help-block">Help block with error</span>
									</div>


								</div>
								<!-- /.box-body -->
							</form>


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->

		</section>
		<!-- /.content -->
	</div>
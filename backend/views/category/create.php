<?php 
use yii\bootstrap\ActiveForm;
?>
<!-- Content Wrapper. Contains page content -->
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
			<div class="col-md-7">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Quick Example</h3>
					</div><!-- /.box-header -->
					<?php $form = ActiveForm::begin(['id' => 'category-create-form', 'action' => 'add']); ?>
					<div class="box-body">
						<?=$form->field($model, 'name')->textInput(['autofocus' => true]); ?>
						<?=$form->field($model, 'parentId')->dropDownList($categories); ?>
						<?=$form->field($model, 'type')->dropDownList($categoryType); ?>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					<?php ActiveForm::end(); ?>
				</div><!-- /.box -->
			</div><!-- /.col -->
		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->
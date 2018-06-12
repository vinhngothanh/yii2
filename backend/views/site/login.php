<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\bootstrap\ActiveForm;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<title>Login</title>
	<?php $this->head() ?>
</head>
<body class="hold-transition login-page">
	<?php $this->beginBody() ?>
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Admin</b>LTE</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>
			<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
			<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
			<?= $form->field($model, 'password')->passwordInput() ?>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<?= $form->field($model, 'rememberMe')->checkbox() ?>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
				 <div class="form-group">
					<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
				</div>
			</div>
			<!-- /.col -->
		</div>
		<?php ActiveForm::end(); ?>
		<div class="social-auth-links text-center">
			<p>- OR -</p>
			<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
				Facebook</a>
				<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
					Google+</a>
				</div>
				<!-- /.social-auth-links -->
				<a href="#">I forgot my password</a><br>
				<a href="register.html" class="text-center">Register a new membership</a>
			</div>
			<!-- /.login-box-body -->
		</div>
		<?php  $this->endBody() ?>
	</body>
	</html>
	<?php  $this->endPage() ?>

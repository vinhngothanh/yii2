<?php
namespace backend\controllers;
use yii;
use common\components\models\db\Category;
use common\components\models\enu\CategoryType;
use yii\web\Response;

class CategoryController extends \yii\web\Controller{
	public function getCategories($type){
		$categories = ['0' => 'Parent Category'];
		foreach (Category::find()->andWhere(['type' => $type])->all() as $cat) {
			$categories[$cat->id] = $cat->name;
		}
		return $categories;
	}

	public function actionIndex(){
		$data['model'] = new Category();
		$data['categories'] = $this->getCategories('news');
		return $this->render('index', $data);
	}

	public function actionCreate($type){
		$data['model'] = new Category();
		$data['categories'] = $this->getCategories($type);
		$data['categoryType'] = CategoryType::$labels;
		return $this->render('create', $data);
	}

	public function actionAdd(){
		Yii::$app->response->format = Response::FORMAT_JSON;
		$model = new Category();
		var_dump(Yii::$app->request->post());
		if ($model->load(Yii::$app->request->post())) {
			if ($model->validate()) {
				if ($model->parentId != 0) {
					$parent = Category::findOne(intval($model->parentId));
					if ($parent == null) {
						return ['success' => false, 'data' => ['parentId' => ['the parent category not exist']]];
					}
				}
				if ($model->save()) {
					$model->save();
					return ['success' => true];
				}
			} else {
				return ['success' => false, 'data' => $model->errors];
			}
		}
		return ['success' => false, 'message' => 'error data'];
	}

}

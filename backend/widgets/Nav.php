<?php
namespace backend\widgets;
class Nav extends \yii\base\Widget {
    public function run() {
        return $this->render('nav');
    }
}
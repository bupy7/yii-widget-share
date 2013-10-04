How to use
======

```php
$this->widget('ext.ShareWidget.ShareWidget', array(
		'url' => Yii::app()->createAbsoluteUrl(Yii::app()->request->url),
		'title' => Yii::app()->controller->pageTitle,
		'text' => $joke->text,
		'image' => Yii::app()->request->hostInfo.Yii::app()->theme->baseUrl.'/icon/icon.256.png',
	))
```

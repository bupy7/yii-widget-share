**ShareWidget** renders social sites buttons to share url.

### Available social services
1. VKontake (http://vk.com)
2. Facebook (http://facebook.com)
3. Mail.ru (http://mail.ru)
4. Odnoklassniki (http://odnoklassniki.ru)
5. Twitter (http://twitter.com)

### Options
* **services** - list of buttons to render. Default: 
```php
public $services = array(
		'vkontakte',
		'facebook',
		'mailru',
		'odnoklassniki',
		'twitter',
	);
```

* **url** - url of sharing page. By default, it is `Yii::app()->createAbsoluteUrl(Yii::app()->request->url)`
* **title** - title of sharing post. By default, it is `Yii::app()->controller->pageTitle`
* **text** - text of sharing post.
* **image** - image of sharing post. 
It works with vk.com, facebook, twitter.

### Example
```php
$this->widget('ext.ShareWidget.ShareWidget', array(
		'url' => Yii::app()->createAbsoluteUrl(Yii::app()->request->url),
		'title' => Yii::app()->controller->pageTitle,
		'text' => $joke->text,
		'image' => Yii::app()->request->hostInfo.Yii::app()->theme->baseUrl.'/icon/icon.256.png',
	))
```

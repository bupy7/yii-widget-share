**ShareWidget** renders social sites buttons to share url.

### Available social services
1. VKontake (http://vk.com) - ![vk.com](https://raw.github.com/wapmorgan/ShareWidget/master/assets/vkontakte.png) 
2. Facebook (http://facebook.com) - ![facebook.com](https://raw.github.com/wapmorgan/ShareWidget/master/assets/facebook.png) 
3. Mail.ru (http://mail.ru) - ![mail.ru](https://raw.github.com/wapmorgan/ShareWidget/master/assets/mailru.png) 
4. Odnoklassniki (http://odnoklassniki.ru) - ![odnoklassniki.ru](https://raw.github.com/wapmorgan/ShareWidget/master/assets/odnoklassniki.png) 
5. Twitter (http://twitter.com) - ![twitter.com](https://raw.github.com/wapmorgan/ShareWidget/master/assets/twitter.png) 

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

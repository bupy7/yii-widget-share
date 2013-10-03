<?php
/**
 * Widget renders buttons for sharing content via social services
 * @author wapmorgan (wapmorgan@gmail.com)
 */
class ShareWidget extends CWidget {
	/**
	 * Services to show
	 */
	public $services = array(
		'vkontakte',
		'facebook',
		'mailru',
		'odnoklassniki',
		'twitter',
	);

	/**
	 * URL
	 */
	public $url;

	/**
	 * Title
	 */
	public $title;

	/**
	 * Image path
	 */
	public $image;

	/**
	 * Description
	 */
	public $text;

	/**
	 * Renders buttons
	 */
	public function run() {
		if ($this->url === null)
			$this->url = Yii::app()->createAbsoluteUrl(Yii::app()->request->url);
		if ($this->title === null)
			$this->title = Yii::app()->controller->pageTitle;

		$links = array();
		foreach ($this->services as $service) {
			$methodName = 'render'.$service.'button';
			if (!method_exists($this, $methodName))
				throw new RuntimeException('Unknown service "'.$service.'" to render!');
			$links[$service] = $this->$methodName();
		}
		$this->render('buttons', array(
			'links' => $links,
			'assetsPath' => Yii::app()->assetManager->publish(dirname(__FILE__).'/assets/'),
		));
	}

	/**
	 * Renders a button to share content via vk.com
	 */
	public function renderVkontakteButton() {
		return 'http://vkontakte.ru/share.php'
			.'?url='.urlencode($this->url)
			.'&title='.urlencode($this->title)
			.'&description='.urlencode($this->text)
			.'&image='.urlencode($this->image)
			.'&noparse=true';
	}

	/**
	 * Renders a button to share content via facebook.com
	 */
	public function renderFacebookButton() {
		return 'http://www.facebook.com/sharer.php?s=100'
			.'&p[url]='.urlencode($this->url)
			.'&p[title]='.urlencode($this->title)
			.'&p[summary]='.urlencode($this->text)
			.'&p[images][0]='.urlencode($this->image);
	}

	/**
	 * Renders a button to share content via mail.ru
	 */
	public function renderMailruButton() {
		return 'http://connect.mail.ru/share'
			.'?url='.urlencode($this->url)
			.'&title='.urlencode($this->title)
			.'&description='.urlencode($this->text)
			.'&imageurl='.urlencode($this->image);
	}

	/**
	 * Renders a button to share content via twitter.com
	 */
	public function renderTwitterButton() {
		return 'http://twitter.com/share'
			.'?url='.urlencode($this->url)
			.'&text='.urlencode($this->title)
			.'&counturl='.urlencode($this->url);
	}

	/**
	 * Renders a button to share content via odnoklassniki.ru
	 */
	public function renderOdnoklassnikiButton() {
		return 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1'
			.'&st._surl='.urlencode($this->url)
			.'&st.comments='.urlencode($this->text);
	}
}

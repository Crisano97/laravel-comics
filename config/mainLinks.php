<?php

class MainLink{

	public $text;
	public $src;
	
	public function __construct($_text, $_src) {
		$this->text = $_text;
		$this->src = $_src;
	}
}

return [
	new MainLink("digital comics","../../assets/images/buy-comics-digital-comics.png"),
	new MainLink("dc merchandise","../../assets/images/buy-comics-merchandise.png"),
	new MainLink("subscription","../../assets/images/buy-comics-subscriptions.png"),
	new MainLink("comic shop locator","../../assets/images/buy-comics-shop-locator.png"),
	new MainLink("dc power visa","../../assets/images/buy-dc-power-visa.svg"),
];
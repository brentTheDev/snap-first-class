<?php
class Car {
	protected $isCarNew;
	protected $isCarElectric;

	public function getIsCarNew(): 	bool {
		return($this->isCarNew);
	}

	public function setIsCarNew(bool $isCarNew) {
		$this->isCarNew = $isCarNew;
	}

	public function getIsCarElectric(): bool {
		return($this->isCarElectric);
	}

	public function setIsCarElectric(bool $isCarElectric) {
		$this->isCarElectric = $isCarElectric;
	}
}
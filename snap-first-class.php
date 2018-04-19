<?php
class Car {
	protected $isCarNew = true;
	protected $isCarElectric = true;

	public function getIsCarNew(): bool {
		return($this->isCarNew);
	}

	public function getIsCarElectric() : bool {
		return($this->isCarElectric);
	}
}
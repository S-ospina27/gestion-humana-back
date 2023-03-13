<?php

namespace Database\Class;

class Headquarters implements \JsonSerializable {

	private ?int $idheadquarters = null;
	private ?int $idcities = null;
	private ?int $idcompanies = null;
	private ?string $headquarters_name = null;
	private ?string $headquarters_address = null;
	private ?int $headquarters_phone = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Headquarters {
		$headquarters = new Headquarters();

		$headquarters->setIdheadquarters(
			isset(request->idheadquarters) ? request->idheadquarters : null
		);

		$headquarters->setIdcities(
			isset(request->idcities) ? request->idcities : null
		);

		$headquarters->setIdcompanies(
			isset(request->idcompanies) ? request->idcompanies : null
		);

		$headquarters->setHeadquartersName(
			isset(request->headquarters_name) ? request->headquarters_name : null
		);

		$headquarters->setHeadquartersAddress(
			isset(request->headquarters_address) ? request->headquarters_address : null
		);

		$headquarters->setHeadquartersPhone(
			isset(request->headquarters_phone) ? request->headquarters_phone : null
		);

		return $headquarters;
	}

	public function getIdheadquarters(): ?int {
		return $this->idheadquarters;
	}

	public function setIdheadquarters(?int $idheadquarters): Headquarters {
		$this->idheadquarters = $idheadquarters;
		return $this;
	}

	public function getIdcities(): ?int {
		return $this->idcities;
	}

	public function setIdcities(?int $idcities): Headquarters {
		$this->idcities = $idcities;
		return $this;
	}

	public function getIdcompanies(): ?int {
		return $this->idcompanies;
	}

	public function setIdcompanies(?int $idcompanies): Headquarters {
		$this->idcompanies = $idcompanies;
		return $this;
	}

	public function getHeadquartersName(): ?string {
		return $this->headquarters_name;
	}

	public function setHeadquartersName(?string $headquarters_name): Headquarters {
		$this->headquarters_name = $headquarters_name;
		return $this;
	}

	public function getHeadquartersAddress(): ?string {
		return $this->headquarters_address;
	}

	public function setHeadquartersAddress(?string $headquarters_address): Headquarters {
		$this->headquarters_address = $headquarters_address;
		return $this;
	}

	public function getHeadquartersPhone(): ?int {
		return $this->headquarters_phone;
	}

	public function setHeadquartersPhone(?int $headquarters_phone): Headquarters {
		$this->headquarters_phone = $headquarters_phone;
		return $this;
	}

}
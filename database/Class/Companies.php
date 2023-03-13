<?php

namespace Database\Class;

class Companies implements \JsonSerializable {

	private ?int $idcompanies = null;
	private ?int $iddocument_types = null;
	private ?string $companies_name = null;
	private ?string $companies_identification_number = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Companies {
		$companies = new Companies();

		$companies->setIdcompanies(
			isset(request->idcompanies) ? request->idcompanies : null
		);

		$companies->setIddocumentTypes(
			isset(request->iddocument_types) ? request->iddocument_types : null
		);

		$companies->setCompaniesName(
			isset(request->companies_name) ? request->companies_name : null
		);

		$companies->setCompaniesIdentificationNumber(
			isset(request->companies_identification_number) ? request->companies_identification_number : null
		);

		return $companies;
	}

	public function getIdcompanies(): ?int {
		return $this->idcompanies;
	}

	public function setIdcompanies(?int $idcompanies): Companies {
		$this->idcompanies = $idcompanies;
		return $this;
	}

	public function getIddocumentTypes(): ?int {
		return $this->iddocument_types;
	}

	public function setIddocumentTypes(?int $iddocument_types): Companies {
		$this->iddocument_types = $iddocument_types;
		return $this;
	}

	public function getCompaniesName(): ?string {
		return $this->companies_name;
	}

	public function setCompaniesName(?string $companies_name): Companies {
		$this->companies_name = $companies_name;
		return $this;
	}

	public function getCompaniesIdentificationNumber(): ?string {
		return $this->companies_identification_number;
	}

	public function setCompaniesIdentificationNumber(?string $companies_identification_number): Companies {
		$this->companies_identification_number = $companies_identification_number;
		return $this;
	}

}
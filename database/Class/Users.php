<?php

namespace Database\Class;

class Users implements \JsonSerializable {

	private ?int $idusers = null;
	private ?int $idroles = null;
	private ?int $idstates = null;
	private ?int $iddocument_types = null;
	private ?string $users_name = null;
	private ?string $users_lastname = null;
	private ?string $users_identification_number = null;
	private ?string $users_email = null;
	private ?string $users_password = null;
	private ?string $users_departure_date = null;
	private ?string $users_admission_date = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Users {
		$users = new Users();

		$users->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$users->setIdroles(
			isset(request->idroles) ? request->idroles : null
		);

		$users->setIdstates(
			isset(request->idstates) ? request->idstates : null
		);

		$users->setIddocumentTypes(
			isset(request->iddocument_types) ? request->iddocument_types : null
		);

		$users->setUsersName(
			isset(request->users_name) ? request->users_name : null
		);

		$users->setUsersLastname(
			isset(request->users_lastname) ? request->users_lastname : null
		);

		$users->setUsersIdentificationNumber(
			isset(request->users_identification_number) ? request->users_identification_number : null
		);

		$users->setUsersEmail(
			isset(request->users_email) ? request->users_email : null
		);

		$users->setUsersPassword(
			isset(request->users_password) ? request->users_password : null
		);

		$users->setUsersDepartureDate(
			isset(request->users_departure_date) ? request->users_departure_date : null
		);

		$users->setUsersAdmissionDate(
			isset(request->users_admission_date) ? request->users_admission_date : null
		);

		return $users;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Users {
		$this->idusers = $idusers;
		return $this;
	}

	public function getIdroles(): ?int {
		return $this->idroles;
	}

	public function setIdroles(?int $idroles): Users {
		$this->idroles = $idroles;
		return $this;
	}

	public function getIdstates(): ?int {
		return $this->idstates;
	}

	public function setIdstates(?int $idstates): Users {
		$this->idstates = $idstates;
		return $this;
	}

	public function getIddocumentTypes(): ?int {
		return $this->iddocument_types;
	}

	public function setIddocumentTypes(?int $iddocument_types): Users {
		$this->iddocument_types = $iddocument_types;
		return $this;
	}

	public function getUsersName(): ?string {
		return $this->users_name;
	}

	public function setUsersName(?string $users_name): Users {
		$this->users_name = $users_name;
		return $this;
	}

	public function getUsersLastname(): ?string {
		return $this->users_lastname;
	}

	public function setUsersLastname(?string $users_lastname): Users {
		$this->users_lastname = $users_lastname;
		return $this;
	}

	public function getUsersIdentificationNumber(): ?string {
		return $this->users_identification_number;
	}

	public function setUsersIdentificationNumber(?string $users_identification_number): Users {
		$this->users_identification_number = $users_identification_number;
		return $this;
	}

	public function getUsersEmail(): ?string {
		return $this->users_email;
	}

	public function setUsersEmail(?string $users_email): Users {
		$this->users_email = $users_email;
		return $this;
	}

	public function getUsersPassword(): ?string {
		return $this->users_password;
	}

	public function setUsersPassword(?string $users_password): Users {
		$this->users_password = $users_password;
		return $this;
	}

	public function getUsersDepartureDate(): ?string {
		return $this->users_departure_date;
	}

	public function setUsersDepartureDate(?string $users_departure_date): Users {
		$this->users_departure_date = $users_departure_date;
		return $this;
	}

	public function getUsersAdmissionDate(): ?string {
		return $this->users_admission_date;
	}

	public function setUsersAdmissionDate(?string $users_admission_date): Users {
		$this->users_admission_date = $users_admission_date;
		return $this;
	}

}
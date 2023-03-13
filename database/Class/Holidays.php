<?php

namespace Database\Class;

class Holidays implements \JsonSerializable {

	private ?int $idholidays = null;
	private ?int $idusers = null;
	private ?string $holidays_departure_date = null;
	private ?string $holidays_admission_date = null;
	private ?int $holidays_number_days = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Holidays {
		$holidays = new Holidays();

		$holidays->setIdholidays(
			isset(request->idholidays) ? request->idholidays : null
		);

		$holidays->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$holidays->setHolidaysDepartureDate(
			isset(request->holidays_departure_date) ? request->holidays_departure_date : null
		);

		$holidays->setHolidaysAdmissionDate(
			isset(request->holidays_admission_date) ? request->holidays_admission_date : null
		);

		$holidays->setHolidaysNumberDays(
			isset(request->holidays_number_days) ? request->holidays_number_days : null
		);

		return $holidays;
	}

	public function getIdholidays(): ?int {
		return $this->idholidays;
	}

	public function setIdholidays(?int $idholidays): Holidays {
		$this->idholidays = $idholidays;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Holidays {
		$this->idusers = $idusers;
		return $this;
	}

	public function getHolidaysDepartureDate(): ?string {
		return $this->holidays_departure_date;
	}

	public function setHolidaysDepartureDate(?string $holidays_departure_date): Holidays {
		$this->holidays_departure_date = $holidays_departure_date;
		return $this;
	}

	public function getHolidaysAdmissionDate(): ?string {
		return $this->holidays_admission_date;
	}

	public function setHolidaysAdmissionDate(?string $holidays_admission_date): Holidays {
		$this->holidays_admission_date = $holidays_admission_date;
		return $this;
	}

	public function getHolidaysNumberDays(): ?int {
		return $this->holidays_number_days;
	}

	public function setHolidaysNumberDays(?int $holidays_number_days): Holidays {
		$this->holidays_number_days = $holidays_number_days;
		return $this;
	}

}
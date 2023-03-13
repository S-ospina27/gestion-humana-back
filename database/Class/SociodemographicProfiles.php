<?php

namespace Database\Class;

class SociodemographicProfiles implements \JsonSerializable {

	private ?int $idsociodemographic_profiles = null;
	private ?int $idusers = null;
	private ?string $sociodemographic_profiles_has_internet = null;
	private ?int $idcities_birth_city = null;
	private ?string $sociodemographic_profiles_birth_date = null;
	private ?string $sociodemographic_profiles_gender = null;
	private ?string $sociodemographic_profiles_civil_status = null;
	private ?string $sociodemographic_profiles_company_affiliation_type = null;
	private ?string $sociodemographic_profiles_contributing_type = null;
	private ?string $sociodemographic_profiles_eps = null;
	private ?string $sociodemographic_profiles_pension_fund = null;
	private ?string $sociodemographic_profiles_position = null;
	private ?string $sociodemographic_profiles_monthly_salary = null;
	private ?string $sociodemographic_profiles_transport_assistance = null;
	private ?string $sociodemographic_profiles_connectivity_assistance = null;
	private ?string $sociodemographic_profiles_accrues_commission = null;
	private ?string $sociodemographic_profiles_work_shift = null;
	private ?string $sociodemographic_profiles_contracts_with_company = null;
	private ?string $sociodemographic_profiles_work_modality = null;
	private ?string $sociodemographic_profiles_level_schooling = null;
	private ?int $idcities_city_​_residence = null;
	private ?string $sociodemographic_profiles_city_neighborhood = null;
	private ?string $sociodemographic_profiles_neighborhood_address = null;
	private ?string $sociodemographic_profiles_home_tenure = null;
	private ?string $sociodemographic_profiles_transport_type = null;
	private ?string $sociodemographic_profiles_head_family = null;
	private ?int $sociodemographic_profiles_number_children = null;
	private ?string $sociodemographic_profiles_people_with_disabilities = null;
	private ?string $sociodemographic_profiles_family_income = null;
	private ?string $sociodemographic_profiles_income_covers_household_expenses = null;
	private ?string $sociodemographic_profiles_utility_stratum = null;
	private ?string $sociodemographic_profiles_electric_power = null;
	private ?string $sociodemographic_profiles_sewerage = null;
	private ?string $sociodemographic_profiles_aqueduct = null;
	private ?string $sociodemographic_profiles_natural_gas = null;
	private ?string $sociodemographic_profiles_garbage_collection = null;
	private ?string $sociodemographic_profiles_has_computer_equipment = null;
	private ?string $sociodemographic_profiles_alcoholic_beverages = null;
	private ?string $sociodemographic_profiles_smoke = null;
	private ?string $sociodemographic_profiles_sport = null;
	private ?string $sociodemographic_profiles_sport_frequency = null;
	private ?string $sociodemographic_profiles_pregnancy = null;
	private ?string $sociodemographic_profiles_diagnosed_chronic_disease = null;
	private ?string $sociodemographic_profiles_description_diagnosed_diseases = null;
	private ?string $sociodemographic_profiles_take_any_medication = null;
	private ?string $sociodemographic_profiles_drug_description = null;
	private ?string $sociodemographic_profiles_allergic = null;
	private ?string $sociodemographic_profiles_description_allergies = null;
	private ?string $sociodemographic_profiles_blood_type = null;
	private ?string $sociodemographic_profiles_family_name = null;
	private ?string $sociodemographic_profiles_relationship = null;
	private ?string $sociodemographic_profiles_telephone_contact = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): SociodemographicProfiles {
		$sociodemographicprofiles = new SociodemographicProfiles();

		$sociodemographicprofiles->setIdsociodemographicProfiles(
			isset(request->idsociodemographic_profiles) ? request->idsociodemographic_profiles : null
		);

		$sociodemographicprofiles->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesHasInternet(
			isset(request->sociodemographic_profiles_has_internet) ? request->sociodemographic_profiles_has_internet : null
		);

		$sociodemographicprofiles->setIdcitiesBirthCity(
			isset(request->idcities_birth_city) ? request->idcities_birth_city : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesBirthDate(
			isset(request->sociodemographic_profiles_birth_date) ? request->sociodemographic_profiles_birth_date : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesGender(
			isset(request->sociodemographic_profiles_gender) ? request->sociodemographic_profiles_gender : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesCivilStatus(
			isset(request->sociodemographic_profiles_civil_status) ? request->sociodemographic_profiles_civil_status : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesCompanyAffiliationType(
			isset(request->sociodemographic_profiles_company_affiliation_type) ? request->sociodemographic_profiles_company_affiliation_type : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesContributingType(
			isset(request->sociodemographic_profiles_contributing_type) ? request->sociodemographic_profiles_contributing_type : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesEps(
			isset(request->sociodemographic_profiles_eps) ? request->sociodemographic_profiles_eps : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesPensionFund(
			isset(request->sociodemographic_profiles_pension_fund) ? request->sociodemographic_profiles_pension_fund : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesPosition(
			isset(request->sociodemographic_profiles_position) ? request->sociodemographic_profiles_position : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesMonthlySalary(
			isset(request->sociodemographic_profiles_monthly_salary) ? request->sociodemographic_profiles_monthly_salary : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesTransportAssistance(
			isset(request->sociodemographic_profiles_transport_assistance) ? request->sociodemographic_profiles_transport_assistance : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesConnectivityAssistance(
			isset(request->sociodemographic_profiles_connectivity_assistance) ? request->sociodemographic_profiles_connectivity_assistance : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesAccruesCommission(
			isset(request->sociodemographic_profiles_accrues_commission) ? request->sociodemographic_profiles_accrues_commission : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesWorkShift(
			isset(request->sociodemographic_profiles_work_shift) ? request->sociodemographic_profiles_work_shift : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesContractsWithCompany(
			isset(request->sociodemographic_profiles_contracts_with_company) ? request->sociodemographic_profiles_contracts_with_company : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesWorkModality(
			isset(request->sociodemographic_profiles_work_modality) ? request->sociodemographic_profiles_work_modality : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesLevelSchooling(
			isset(request->sociodemographic_profiles_level_schooling) ? request->sociodemographic_profiles_level_schooling : null
		);

		$sociodemographicprofiles->setIdcitiesCity​Residence(
			isset(request->idcities_city_​_residence) ? request->idcities_city_​_residence : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesCityNeighborhood(
			isset(request->sociodemographic_profiles_city_neighborhood) ? request->sociodemographic_profiles_city_neighborhood : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesNeighborhoodAddress(
			isset(request->sociodemographic_profiles_neighborhood_address) ? request->sociodemographic_profiles_neighborhood_address : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesHomeTenure(
			isset(request->sociodemographic_profiles_home_tenure) ? request->sociodemographic_profiles_home_tenure : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesTransportType(
			isset(request->sociodemographic_profiles_transport_type) ? request->sociodemographic_profiles_transport_type : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesHeadFamily(
			isset(request->sociodemographic_profiles_head_family) ? request->sociodemographic_profiles_head_family : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesNumberChildren(
			isset(request->sociodemographic_profiles_number_children) ? request->sociodemographic_profiles_number_children : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesPeopleWithDisabilities(
			isset(request->sociodemographic_profiles_people_with_disabilities) ? request->sociodemographic_profiles_people_with_disabilities : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesFamilyIncome(
			isset(request->sociodemographic_profiles_family_income) ? request->sociodemographic_profiles_family_income : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesIncomeCoversHouseholdExpenses(
			isset(request->sociodemographic_profiles_income_covers_household_expenses) ? request->sociodemographic_profiles_income_covers_household_expenses : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesUtilityStratum(
			isset(request->sociodemographic_profiles_utility_stratum) ? request->sociodemographic_profiles_utility_stratum : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesElectricPower(
			isset(request->sociodemographic_profiles_electric_power) ? request->sociodemographic_profiles_electric_power : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesSewerage(
			isset(request->sociodemographic_profiles_sewerage) ? request->sociodemographic_profiles_sewerage : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesAqueduct(
			isset(request->sociodemographic_profiles_aqueduct) ? request->sociodemographic_profiles_aqueduct : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesNaturalGas(
			isset(request->sociodemographic_profiles_natural_gas) ? request->sociodemographic_profiles_natural_gas : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesGarbageCollection(
			isset(request->sociodemographic_profiles_garbage_collection) ? request->sociodemographic_profiles_garbage_collection : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesHasComputerEquipment(
			isset(request->sociodemographic_profiles_has_computer_equipment) ? request->sociodemographic_profiles_has_computer_equipment : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesAlcoholicBeverages(
			isset(request->sociodemographic_profiles_alcoholic_beverages) ? request->sociodemographic_profiles_alcoholic_beverages : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesSmoke(
			isset(request->sociodemographic_profiles_smoke) ? request->sociodemographic_profiles_smoke : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesSport(
			isset(request->sociodemographic_profiles_sport) ? request->sociodemographic_profiles_sport : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesSportFrequency(
			isset(request->sociodemographic_profiles_sport_frequency) ? request->sociodemographic_profiles_sport_frequency : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesPregnancy(
			isset(request->sociodemographic_profiles_pregnancy) ? request->sociodemographic_profiles_pregnancy : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesDiagnosedChronicDisease(
			isset(request->sociodemographic_profiles_diagnosed_chronic_disease) ? request->sociodemographic_profiles_diagnosed_chronic_disease : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesDescriptionDiagnosedDiseases(
			isset(request->sociodemographic_profiles_description_diagnosed_diseases) ? request->sociodemographic_profiles_description_diagnosed_diseases : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesTakeAnyMedication(
			isset(request->sociodemographic_profiles_take_any_medication) ? request->sociodemographic_profiles_take_any_medication : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesDrugDescription(
			isset(request->sociodemographic_profiles_drug_description) ? request->sociodemographic_profiles_drug_description : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesAllergic(
			isset(request->sociodemographic_profiles_allergic) ? request->sociodemographic_profiles_allergic : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesDescriptionAllergies(
			isset(request->sociodemographic_profiles_description_allergies) ? request->sociodemographic_profiles_description_allergies : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesBloodType(
			isset(request->sociodemographic_profiles_blood_type) ? request->sociodemographic_profiles_blood_type : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesFamilyName(
			isset(request->sociodemographic_profiles_family_name) ? request->sociodemographic_profiles_family_name : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesRelationship(
			isset(request->sociodemographic_profiles_relationship) ? request->sociodemographic_profiles_relationship : null
		);

		$sociodemographicprofiles->setSociodemographicProfilesTelephoneContact(
			isset(request->sociodemographic_profiles_telephone_contact) ? request->sociodemographic_profiles_telephone_contact : null
		);

		return $sociodemographicprofiles;
	}

	public function getIdsociodemographicProfiles(): ?int {
		return $this->idsociodemographic_profiles;
	}

	public function setIdsociodemographicProfiles(?int $idsociodemographic_profiles): SociodemographicProfiles {
		$this->idsociodemographic_profiles = $idsociodemographic_profiles;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): SociodemographicProfiles {
		$this->idusers = $idusers;
		return $this;
	}

	public function getSociodemographicProfilesHasInternet(): ?string {
		return $this->sociodemographic_profiles_has_internet;
	}

	public function setSociodemographicProfilesHasInternet(?string $sociodemographic_profiles_has_internet): SociodemographicProfiles {
		$this->sociodemographic_profiles_has_internet = $sociodemographic_profiles_has_internet;
		return $this;
	}

	public function getIdcitiesBirthCity(): ?int {
		return $this->idcities_birth_city;
	}

	public function setIdcitiesBirthCity(?int $idcities_birth_city): SociodemographicProfiles {
		$this->idcities_birth_city = $idcities_birth_city;
		return $this;
	}

	public function getSociodemographicProfilesBirthDate(): ?string {
		return $this->sociodemographic_profiles_birth_date;
	}

	public function setSociodemographicProfilesBirthDate(?string $sociodemographic_profiles_birth_date): SociodemographicProfiles {
		$this->sociodemographic_profiles_birth_date = $sociodemographic_profiles_birth_date;
		return $this;
	}

	public function getSociodemographicProfilesGender(): ?string {
		return $this->sociodemographic_profiles_gender;
	}

	public function setSociodemographicProfilesGender(?string $sociodemographic_profiles_gender): SociodemographicProfiles {
		$this->sociodemographic_profiles_gender = $sociodemographic_profiles_gender;
		return $this;
	}

	public function getSociodemographicProfilesCivilStatus(): ?string {
		return $this->sociodemographic_profiles_civil_status;
	}

	public function setSociodemographicProfilesCivilStatus(?string $sociodemographic_profiles_civil_status): SociodemographicProfiles {
		$this->sociodemographic_profiles_civil_status = $sociodemographic_profiles_civil_status;
		return $this;
	}

	public function getSociodemographicProfilesCompanyAffiliationType(): ?string {
		return $this->sociodemographic_profiles_company_affiliation_type;
	}

	public function setSociodemographicProfilesCompanyAffiliationType(?string $sociodemographic_profiles_company_affiliation_type): SociodemographicProfiles {
		$this->sociodemographic_profiles_company_affiliation_type = $sociodemographic_profiles_company_affiliation_type;
		return $this;
	}

	public function getSociodemographicProfilesContributingType(): ?string {
		return $this->sociodemographic_profiles_contributing_type;
	}

	public function setSociodemographicProfilesContributingType(?string $sociodemographic_profiles_contributing_type): SociodemographicProfiles {
		$this->sociodemographic_profiles_contributing_type = $sociodemographic_profiles_contributing_type;
		return $this;
	}

	public function getSociodemographicProfilesEps(): ?string {
		return $this->sociodemographic_profiles_eps;
	}

	public function setSociodemographicProfilesEps(?string $sociodemographic_profiles_eps): SociodemographicProfiles {
		$this->sociodemographic_profiles_eps = $sociodemographic_profiles_eps;
		return $this;
	}

	public function getSociodemographicProfilesPensionFund(): ?string {
		return $this->sociodemographic_profiles_pension_fund;
	}

	public function setSociodemographicProfilesPensionFund(?string $sociodemographic_profiles_pension_fund): SociodemographicProfiles {
		$this->sociodemographic_profiles_pension_fund = $sociodemographic_profiles_pension_fund;
		return $this;
	}

	public function getSociodemographicProfilesPosition(): ?string {
		return $this->sociodemographic_profiles_position;
	}

	public function setSociodemographicProfilesPosition(?string $sociodemographic_profiles_position): SociodemographicProfiles {
		$this->sociodemographic_profiles_position = $sociodemographic_profiles_position;
		return $this;
	}

	public function getSociodemographicProfilesMonthlySalary(): ?string {
		return $this->sociodemographic_profiles_monthly_salary;
	}

	public function setSociodemographicProfilesMonthlySalary(?string $sociodemographic_profiles_monthly_salary): SociodemographicProfiles {
		$this->sociodemographic_profiles_monthly_salary = $sociodemographic_profiles_monthly_salary;
		return $this;
	}

	public function getSociodemographicProfilesTransportAssistance(): ?string {
		return $this->sociodemographic_profiles_transport_assistance;
	}

	public function setSociodemographicProfilesTransportAssistance(?string $sociodemographic_profiles_transport_assistance): SociodemographicProfiles {
		$this->sociodemographic_profiles_transport_assistance = $sociodemographic_profiles_transport_assistance;
		return $this;
	}

	public function getSociodemographicProfilesConnectivityAssistance(): ?string {
		return $this->sociodemographic_profiles_connectivity_assistance;
	}

	public function setSociodemographicProfilesConnectivityAssistance(?string $sociodemographic_profiles_connectivity_assistance): SociodemographicProfiles {
		$this->sociodemographic_profiles_connectivity_assistance = $sociodemographic_profiles_connectivity_assistance;
		return $this;
	}

	public function getSociodemographicProfilesAccruesCommission(): ?string {
		return $this->sociodemographic_profiles_accrues_commission;
	}

	public function setSociodemographicProfilesAccruesCommission(?string $sociodemographic_profiles_accrues_commission): SociodemographicProfiles {
		$this->sociodemographic_profiles_accrues_commission = $sociodemographic_profiles_accrues_commission;
		return $this;
	}

	public function getSociodemographicProfilesWorkShift(): ?string {
		return $this->sociodemographic_profiles_work_shift;
	}

	public function setSociodemographicProfilesWorkShift(?string $sociodemographic_profiles_work_shift): SociodemographicProfiles {
		$this->sociodemographic_profiles_work_shift = $sociodemographic_profiles_work_shift;
		return $this;
	}

	public function getSociodemographicProfilesContractsWithCompany(): ?string {
		return $this->sociodemographic_profiles_contracts_with_company;
	}

	public function setSociodemographicProfilesContractsWithCompany(?string $sociodemographic_profiles_contracts_with_company): SociodemographicProfiles {
		$this->sociodemographic_profiles_contracts_with_company = $sociodemographic_profiles_contracts_with_company;
		return $this;
	}

	public function getSociodemographicProfilesWorkModality(): ?string {
		return $this->sociodemographic_profiles_work_modality;
	}

	public function setSociodemographicProfilesWorkModality(?string $sociodemographic_profiles_work_modality): SociodemographicProfiles {
		$this->sociodemographic_profiles_work_modality = $sociodemographic_profiles_work_modality;
		return $this;
	}

	public function getSociodemographicProfilesLevelSchooling(): ?string {
		return $this->sociodemographic_profiles_level_schooling;
	}

	public function setSociodemographicProfilesLevelSchooling(?string $sociodemographic_profiles_level_schooling): SociodemographicProfiles {
		$this->sociodemographic_profiles_level_schooling = $sociodemographic_profiles_level_schooling;
		return $this;
	}

	public function getIdcitiesCity​Residence(): ?int {
		return $this->idcities_city_​_residence;
	}

	public function setIdcitiesCity​Residence(?int $idcities_city_​_residence): SociodemographicProfiles {
		$this->idcities_city_​_residence = $idcities_city_​_residence;
		return $this;
	}

	public function getSociodemographicProfilesCityNeighborhood(): ?string {
		return $this->sociodemographic_profiles_city_neighborhood;
	}

	public function setSociodemographicProfilesCityNeighborhood(?string $sociodemographic_profiles_city_neighborhood): SociodemographicProfiles {
		$this->sociodemographic_profiles_city_neighborhood = $sociodemographic_profiles_city_neighborhood;
		return $this;
	}

	public function getSociodemographicProfilesNeighborhoodAddress(): ?string {
		return $this->sociodemographic_profiles_neighborhood_address;
	}

	public function setSociodemographicProfilesNeighborhoodAddress(?string $sociodemographic_profiles_neighborhood_address): SociodemographicProfiles {
		$this->sociodemographic_profiles_neighborhood_address = $sociodemographic_profiles_neighborhood_address;
		return $this;
	}

	public function getSociodemographicProfilesHomeTenure(): ?string {
		return $this->sociodemographic_profiles_home_tenure;
	}

	public function setSociodemographicProfilesHomeTenure(?string $sociodemographic_profiles_home_tenure): SociodemographicProfiles {
		$this->sociodemographic_profiles_home_tenure = $sociodemographic_profiles_home_tenure;
		return $this;
	}

	public function getSociodemographicProfilesTransportType(): ?string {
		return $this->sociodemographic_profiles_transport_type;
	}

	public function setSociodemographicProfilesTransportType(?string $sociodemographic_profiles_transport_type): SociodemographicProfiles {
		$this->sociodemographic_profiles_transport_type = $sociodemographic_profiles_transport_type;
		return $this;
	}

	public function getSociodemographicProfilesHeadFamily(): ?string {
		return $this->sociodemographic_profiles_head_family;
	}

	public function setSociodemographicProfilesHeadFamily(?string $sociodemographic_profiles_head_family): SociodemographicProfiles {
		$this->sociodemographic_profiles_head_family = $sociodemographic_profiles_head_family;
		return $this;
	}

	public function getSociodemographicProfilesNumberChildren(): ?int {
		return $this->sociodemographic_profiles_number_children;
	}

	public function setSociodemographicProfilesNumberChildren(?int $sociodemographic_profiles_number_children): SociodemographicProfiles {
		$this->sociodemographic_profiles_number_children = $sociodemographic_profiles_number_children;
		return $this;
	}

	public function getSociodemographicProfilesPeopleWithDisabilities(): ?string {
		return $this->sociodemographic_profiles_people_with_disabilities;
	}

	public function setSociodemographicProfilesPeopleWithDisabilities(?string $sociodemographic_profiles_people_with_disabilities): SociodemographicProfiles {
		$this->sociodemographic_profiles_people_with_disabilities = $sociodemographic_profiles_people_with_disabilities;
		return $this;
	}

	public function getSociodemographicProfilesFamilyIncome(): ?string {
		return $this->sociodemographic_profiles_family_income;
	}

	public function setSociodemographicProfilesFamilyIncome(?string $sociodemographic_profiles_family_income): SociodemographicProfiles {
		$this->sociodemographic_profiles_family_income = $sociodemographic_profiles_family_income;
		return $this;
	}

	public function getSociodemographicProfilesIncomeCoversHouseholdExpenses(): ?string {
		return $this->sociodemographic_profiles_income_covers_household_expenses;
	}

	public function setSociodemographicProfilesIncomeCoversHouseholdExpenses(?string $sociodemographic_profiles_income_covers_household_expenses): SociodemographicProfiles {
		$this->sociodemographic_profiles_income_covers_household_expenses = $sociodemographic_profiles_income_covers_household_expenses;
		return $this;
	}

	public function getSociodemographicProfilesUtilityStratum(): ?string {
		return $this->sociodemographic_profiles_utility_stratum;
	}

	public function setSociodemographicProfilesUtilityStratum(?string $sociodemographic_profiles_utility_stratum): SociodemographicProfiles {
		$this->sociodemographic_profiles_utility_stratum = $sociodemographic_profiles_utility_stratum;
		return $this;
	}

	public function getSociodemographicProfilesElectricPower(): ?string {
		return $this->sociodemographic_profiles_electric_power;
	}

	public function setSociodemographicProfilesElectricPower(?string $sociodemographic_profiles_electric_power): SociodemographicProfiles {
		$this->sociodemographic_profiles_electric_power = $sociodemographic_profiles_electric_power;
		return $this;
	}

	public function getSociodemographicProfilesSewerage(): ?string {
		return $this->sociodemographic_profiles_sewerage;
	}

	public function setSociodemographicProfilesSewerage(?string $sociodemographic_profiles_sewerage): SociodemographicProfiles {
		$this->sociodemographic_profiles_sewerage = $sociodemographic_profiles_sewerage;
		return $this;
	}

	public function getSociodemographicProfilesAqueduct(): ?string {
		return $this->sociodemographic_profiles_aqueduct;
	}

	public function setSociodemographicProfilesAqueduct(?string $sociodemographic_profiles_aqueduct): SociodemographicProfiles {
		$this->sociodemographic_profiles_aqueduct = $sociodemographic_profiles_aqueduct;
		return $this;
	}

	public function getSociodemographicProfilesNaturalGas(): ?string {
		return $this->sociodemographic_profiles_natural_gas;
	}

	public function setSociodemographicProfilesNaturalGas(?string $sociodemographic_profiles_natural_gas): SociodemographicProfiles {
		$this->sociodemographic_profiles_natural_gas = $sociodemographic_profiles_natural_gas;
		return $this;
	}

	public function getSociodemographicProfilesGarbageCollection(): ?string {
		return $this->sociodemographic_profiles_garbage_collection;
	}

	public function setSociodemographicProfilesGarbageCollection(?string $sociodemographic_profiles_garbage_collection): SociodemographicProfiles {
		$this->sociodemographic_profiles_garbage_collection = $sociodemographic_profiles_garbage_collection;
		return $this;
	}

	public function getSociodemographicProfilesHasComputerEquipment(): ?string {
		return $this->sociodemographic_profiles_has_computer_equipment;
	}

	public function setSociodemographicProfilesHasComputerEquipment(?string $sociodemographic_profiles_has_computer_equipment): SociodemographicProfiles {
		$this->sociodemographic_profiles_has_computer_equipment = $sociodemographic_profiles_has_computer_equipment;
		return $this;
	}

	public function getSociodemographicProfilesAlcoholicBeverages(): ?string {
		return $this->sociodemographic_profiles_alcoholic_beverages;
	}

	public function setSociodemographicProfilesAlcoholicBeverages(?string $sociodemographic_profiles_alcoholic_beverages): SociodemographicProfiles {
		$this->sociodemographic_profiles_alcoholic_beverages = $sociodemographic_profiles_alcoholic_beverages;
		return $this;
	}

	public function getSociodemographicProfilesSmoke(): ?string {
		return $this->sociodemographic_profiles_smoke;
	}

	public function setSociodemographicProfilesSmoke(?string $sociodemographic_profiles_smoke): SociodemographicProfiles {
		$this->sociodemographic_profiles_smoke = $sociodemographic_profiles_smoke;
		return $this;
	}

	public function getSociodemographicProfilesSport(): ?string {
		return $this->sociodemographic_profiles_sport;
	}

	public function setSociodemographicProfilesSport(?string $sociodemographic_profiles_sport): SociodemographicProfiles {
		$this->sociodemographic_profiles_sport = $sociodemographic_profiles_sport;
		return $this;
	}

	public function getSociodemographicProfilesSportFrequency(): ?string {
		return $this->sociodemographic_profiles_sport_frequency;
	}

	public function setSociodemographicProfilesSportFrequency(?string $sociodemographic_profiles_sport_frequency): SociodemographicProfiles {
		$this->sociodemographic_profiles_sport_frequency = $sociodemographic_profiles_sport_frequency;
		return $this;
	}

	public function getSociodemographicProfilesPregnancy(): ?string {
		return $this->sociodemographic_profiles_pregnancy;
	}

	public function setSociodemographicProfilesPregnancy(?string $sociodemographic_profiles_pregnancy): SociodemographicProfiles {
		$this->sociodemographic_profiles_pregnancy = $sociodemographic_profiles_pregnancy;
		return $this;
	}

	public function getSociodemographicProfilesDiagnosedChronicDisease(): ?string {
		return $this->sociodemographic_profiles_diagnosed_chronic_disease;
	}

	public function setSociodemographicProfilesDiagnosedChronicDisease(?string $sociodemographic_profiles_diagnosed_chronic_disease): SociodemographicProfiles {
		$this->sociodemographic_profiles_diagnosed_chronic_disease = $sociodemographic_profiles_diagnosed_chronic_disease;
		return $this;
	}

	public function getSociodemographicProfilesDescriptionDiagnosedDiseases(): ?string {
		return $this->sociodemographic_profiles_description_diagnosed_diseases;
	}

	public function setSociodemographicProfilesDescriptionDiagnosedDiseases(?string $sociodemographic_profiles_description_diagnosed_diseases): SociodemographicProfiles {
		$this->sociodemographic_profiles_description_diagnosed_diseases = $sociodemographic_profiles_description_diagnosed_diseases;
		return $this;
	}

	public function getSociodemographicProfilesTakeAnyMedication(): ?string {
		return $this->sociodemographic_profiles_take_any_medication;
	}

	public function setSociodemographicProfilesTakeAnyMedication(?string $sociodemographic_profiles_take_any_medication): SociodemographicProfiles {
		$this->sociodemographic_profiles_take_any_medication = $sociodemographic_profiles_take_any_medication;
		return $this;
	}

	public function getSociodemographicProfilesDrugDescription(): ?string {
		return $this->sociodemographic_profiles_drug_description;
	}

	public function setSociodemographicProfilesDrugDescription(?string $sociodemographic_profiles_drug_description): SociodemographicProfiles {
		$this->sociodemographic_profiles_drug_description = $sociodemographic_profiles_drug_description;
		return $this;
	}

	public function getSociodemographicProfilesAllergic(): ?string {
		return $this->sociodemographic_profiles_allergic;
	}

	public function setSociodemographicProfilesAllergic(?string $sociodemographic_profiles_allergic): SociodemographicProfiles {
		$this->sociodemographic_profiles_allergic = $sociodemographic_profiles_allergic;
		return $this;
	}

	public function getSociodemographicProfilesDescriptionAllergies(): ?string {
		return $this->sociodemographic_profiles_description_allergies;
	}

	public function setSociodemographicProfilesDescriptionAllergies(?string $sociodemographic_profiles_description_allergies): SociodemographicProfiles {
		$this->sociodemographic_profiles_description_allergies = $sociodemographic_profiles_description_allergies;
		return $this;
	}

	public function getSociodemographicProfilesBloodType(): ?string {
		return $this->sociodemographic_profiles_blood_type;
	}

	public function setSociodemographicProfilesBloodType(?string $sociodemographic_profiles_blood_type): SociodemographicProfiles {
		$this->sociodemographic_profiles_blood_type = $sociodemographic_profiles_blood_type;
		return $this;
	}

	public function getSociodemographicProfilesFamilyName(): ?string {
		return $this->sociodemographic_profiles_family_name;
	}

	public function setSociodemographicProfilesFamilyName(?string $sociodemographic_profiles_family_name): SociodemographicProfiles {
		$this->sociodemographic_profiles_family_name = $sociodemographic_profiles_family_name;
		return $this;
	}

	public function getSociodemographicProfilesRelationship(): ?string {
		return $this->sociodemographic_profiles_relationship;
	}

	public function setSociodemographicProfilesRelationship(?string $sociodemographic_profiles_relationship): SociodemographicProfiles {
		$this->sociodemographic_profiles_relationship = $sociodemographic_profiles_relationship;
		return $this;
	}

	public function getSociodemographicProfilesTelephoneContact(): ?string {
		return $this->sociodemographic_profiles_telephone_contact;
	}

	public function setSociodemographicProfilesTelephoneContact(?string $sociodemographic_profiles_telephone_contact): SociodemographicProfiles {
		$this->sociodemographic_profiles_telephone_contact = $sociodemographic_profiles_telephone_contact;
		return $this;
	}

}
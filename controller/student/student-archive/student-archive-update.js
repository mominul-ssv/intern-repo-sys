// ============================ Repopulate Update Fields ============================ //
let updateCell = document.getElementsByClassName("archive-box__update");
let valueCompanyName = document.getElementsByClassName("value-company-name");
let valueCompanyAddress = document.getElementsByClassName("value-company-address");
let valueCompanyCity = document.getElementsByClassName("value-company-city");
let valueCompanyCountry = document.getElementsByClassName("value-company-country");
let valueCompanyDepartment = document.getElementsByClassName("value-company-department");
let valueCompanyPosition = document.getElementsByClassName("value-company-position");
let valueRequiredSkills = document.getElementsByClassName("value-required-skills");
let valueStartDate = document.getElementsByClassName("value-start-date");
let valueEndDate = document.getElementsByClassName("value-end-date");
let valueWorkDescription = document.getElementsByClassName("value-work-description");

for (let i = 0; i < updateCell.length; i++) {
  updateCell[i].addEventListener('click', function () {

    archive_id = updateCell[i].getAttribute('data-archive-id');
    company_name = valueCompanyName[i].getAttribute('data-company-name');
    company_address = valueCompanyAddress[i].getAttribute('data-company-address');
    company_city = valueCompanyCity[i].getAttribute('data-company-city');
    company_country = valueCompanyCountry[i].getAttribute('data-company-country');
    company_department = valueCompanyDepartment[i].getAttribute('data-company-department');
    company_position = valueCompanyPosition[i].getAttribute('data-company-position');
    required_skills = valueRequiredSkills[i].getAttribute('data-required-skills');
    start_date = valueStartDate[i].getAttribute('data-start-date');
    end_date = valueEndDate[i].getAttribute('data-end-date');
    work_description = valueWorkDescription[i].getAttribute('data-work-description');

    document.getElementById("archive-company-name").value = company_name;
    document.getElementById("archive-company-address").value = company_address;
    document.getElementById("archive-company-city").value = company_city;
    document.getElementById("archive-company-country").value = company_country;
    document.getElementById("archive-company-department").value = company_department;
    document.getElementById("archive-company-position").value = company_position;
    document.getElementById("archive-required-skills").value = required_skills;
    document.getElementById("archive-start-date").value = start_date;
    document.getElementById("archive-end-date").value = end_date;
    document.getElementById("archive-work-description").value = work_description;

    // ============================ Update Archive ============================ //
    document.getElementById("archive-update-submit-btn").addEventListener("click", studentArchiveUpdate);

    function studentArchiveUpdate(e) {

      e.preventDefault();

      const company_name_value = document.getElementById("archive-company-name").value;
      const company_address_value = document.getElementById("archive-company-address").value;
      const company_city_value = document.getElementById("archive-company-city").value;
      const company_country_value = document.getElementById("archive-company-country").value;
      const company_department_value = document.getElementById("archive-company-department").value;
      const company_position_value = document.getElementById("archive-company-position").value;
      const required_skills_value = document.getElementById("archive-required-skills").value;
      const start_date_value = document.getElementById("archive-start-date").value;
      const end_date_value = document.getElementById("archive-end-date").value;
      const work_description_value = document.getElementById("archive-work-description").value;

      if (company_name_value.length !== 0
        && company_address_value.length !== 0
        && company_city_value.length !== 0
        && company_country_value.length !== 0
        && company_department_value.length !== 0
        && company_position_value.length !== 0
        && required_skills_value.length !== 0
        && start_date_value.length !== 0
        && end_date_value.length !== 0
        && work_description_value.length !== 0) {

        // ===================================== UPDATE ===================================== //

        // Creating xhr object
        const xhr = new XMLHttpRequest();

        // Initialize ("true" means asynchronous request)
        xhr.open("POST", "../../model/student/student-archive/student-archive-update.php", true);

        // Set request header
        xhr.setRequestHeader("Content-Type", "application/json");

        // Handle response
        xhr.onload = function () {
          if (xhr.status === 200) {
            window.location.replace("../student/student-archive.php");
          } else {
            console.log("Error occurred!" + "\nxhr.status: " + xhr.status);
          }
        };

        // JavaScript object
        const myData = {
          dataArchiveId: archive_id,
          dataCompanyName: company_name_value,
          dataCompanyAddress: company_address_value,
          dataCompanyCity: company_city_value,
          dataCompanyCountry: company_country_value,
          dataCompanyDepartment: company_department_value,
          dataCompanyPosition: company_position_value,
          dataRequiredSkills: required_skills_value,
          dataStartDate: start_date_value,
          dataEndDate: end_date_value,
          dataWorkDescription: work_description_value
        };

        // Converts JavaScript objects to JSON string
        const data = JSON.stringify(myData);

        // Send request with data
        xhr.send(data);

        // ===================================== /UPDATE ===================================== //

      } else {

        if (company_name_value.length !== 0) {
          document.getElementById("archive-company-name").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-company-name").style.border = "2.5px solid #d50000";
        }

        if (company_address_value.length !== 0) {
          document.getElementById("archive-company-address").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-company-address").style.border = "2.5px solid #d50000";
        }

        if (company_city_value.length !== 0) {
          document.getElementById("archive-company-city").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-company-city").style.border = "2.5px solid #d50000";
        }

        if (company_country_value.length !== 0) {
          document.getElementById("archive-company-country").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-company-country").style.border = "2.5px solid #d50000";
        }

        if (company_department_value.length !== 0) {
          document.getElementById("archive-company-department").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-company-department").style.border = "2.5px solid #d50000";
        }

        if (company_position_value.length !== 0) {
          document.getElementById("archive-company-position").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-company-position").style.border = "2.5px solid #d50000";
        }

        if (required_skills_value.length !== 0) {
          document.getElementById("archive-required-skills").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-required-skills").style.border = "2.5px solid #d50000";
        }

        if (start_date_value.length !== 0) {
          document.getElementById("archive-start-date").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-start-date").style.border = "2.5px solid #d50000";
        }

        if (end_date_value.length !== 0) {
          document.getElementById("archive-end-date").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-end-date").style.border = "2.5px solid #d50000";
        }

        if (work_description_value.length !== 0) {
          document.getElementById("archive-work-description").style.border = "2.5px solid #00c853";
        } else {
          document.getElementById("archive-work-description").style.border = "2.5px solid #d50000";
        }
      }

    }

  });
}





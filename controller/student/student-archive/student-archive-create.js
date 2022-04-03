document.getElementById("archive-btn").addEventListener("click", archiveStudentCreate);

function archiveStudentCreate(e) {

  e.preventDefault();

  const companyName = document.getElementById("company-name").value;
  const companyAddress = document.getElementById("company-address").value;
  const companyCity = document.getElementById("company-city").value;
  const companyCountry = document.getElementById("company-country").value;
  const companyDepartment = document.getElementById("company-department").value;
  const companyPosition = document.getElementById("company-position").value;
  const requiredSkills = document.getElementById("required-skills").value;
  const startDate = document.getElementById("start-date").value;
  const endDate = document.getElementById("end-date").value;
  const workDescription = document.getElementById("work-description").value;

  if (companyName.length !== 0
    && companyAddress.length !== 0
    && companyCity.length !== 0
    && companyCountry.length !== 0
    && companyDepartment.length !== 0
    && companyPosition.length !== 0
    && requiredSkills.length !== 0
    && startDate.length !== 0
    && endDate.length !== 0
    && workDescription.length !== 0) {

    // Creating xhr object
    const xhr = new XMLHttpRequest();

    // Initialize ("true" means asynchronous request)
    xhr.open("POST", "../../../model/student/student-archive/student-archive-create.php", true);

    // Set request header
    xhr.setRequestHeader("Content-Type", "application/json");

    // Handle response
    xhr.onload = function () {
      if (xhr.status === 200) {
        const obj = JSON.parse(xhr.response);
        document.getElementById("popup-archive").classList.toggle("active");
      } else {
        console.log("Error occurred!" + "\nxhr.status: " + xhr.status);
      }
    };

    // JavaScript object
    const myData = {
      dataCompanyName: companyName,
      dataCompanyAddress: companyAddress,
      dataCompanyCity: companyCity,
      dataCompanyCountry: companyCountry,
      dataCompanyDepartment: companyDepartment,
      dataCompanyPosition: companyPosition,
      dataRequiredSkills: requiredSkills,
      dataStartDate: startDate,
      dataEndDate: endDate,
      dataWorkDescription: workDescription
    };

    // Converts JavaScript objects to JSON string
    const data = JSON.stringify(myData);

    // Send request with data
    xhr.send(data);

  } else {

    if (companyName.length !== 0) {
      document.getElementById("company-name").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("company-name").style.border = "2.5px solid #d50000";
    }

    if (companyAddress.length !== 0) {
      document.getElementById("company-address").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("company-address").style.border = "2.5px solid #d50000";
    }

    if (companyCity.length !== 0) {
      document.getElementById("company-city").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("company-city").style.border = "2.5px solid #d50000";
    }

    if (companyCountry.length !== 0) {
      document.getElementById("company-country").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("company-country").style.border = "2.5px solid #d50000";
    }

    if (companyDepartment.length !== 0) {
      document.getElementById("company-department").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("company-department").style.border = "2.5px solid #d50000";
    }

    if (companyPosition.length !== 0) {
      document.getElementById("company-position").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("company-position").style.border = "2.5px solid #d50000";
    }

    if (requiredSkills.length !== 0) {
      document.getElementById("required-skills").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("required-skills").style.border = "2.5px solid #d50000";
    }

    if (startDate.length !== 0) {
      document.getElementById("start-date").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("start-date").style.border = "2.5px solid #d50000";
    }

    if (endDate.length !== 0) {
      document.getElementById("end-date").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("end-date").style.border = "2.5px solid #d50000";
    }

    if (workDescription.length !== 0) {
      document.getElementById("work-description").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("work-description").style.border = "2.5px solid #d50000";
    }
  }
}

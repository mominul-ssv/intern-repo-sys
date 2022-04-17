document.getElementById("student-profile-update-submit-btn").addEventListener("click", studentProfileUpdate);

function studentProfileUpdate(e) {

  e.preventDefault();

  const firstName = document.getElementById("first-name").value;
  const lastName = document.getElementById("last-name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const dob = document.getElementById("dob").value;
  const country = document.getElementById("country").value;
  const address = document.getElementById("address").value;
  const universityName = document.getElementById("university-name").value;
  const studentId = document.getElementById("student-id").value;

  if (firstName.length !== 0
    && lastName.length !== 0
    && email.length !== 0
    && phone.length !== 0
    && dob.length !== 0
    && country.length !== 0
    && address.length !== 0
    && universityName.length !== 0
    && studentId.length !== 0) {

    // Creating xhr object
    const xhr = new XMLHttpRequest();

    // Initialize ("true" means asynchronous request)
    xhr.open("POST", "../../model/student/student-profile/student-profile-update.php", true);

    // Set request header
    xhr.setRequestHeader("Content-Type", "application/json");

    // JavaScript object
    const myData = {
      dataFirstName: firstName,
      dataLastName: lastName,
      dataEmail: email,
      dataPhone: phone,
      dataDob: dob,
      dataCountry: country,
      dataAddress: address,
      dataUniversityName: universityName,
      dataStudentId: studentId
    };

    // Converts JavaScript objects to JSON string
    const data = JSON.stringify(myData);

    // Send request with data
    xhr.send(data);

    // Handle response
    xhr.onload = function () {
      if (xhr.status === 200) {
        const obj = JSON.parse(xhr.response);
        document.getElementById("student-id-td").innerText = obj.student_id;
        document.getElementById("name-td").innerText = obj.first_name + " " + obj.last_name;
        document.getElementById("email-td").innerText = obj.email;
        document.getElementById("phone-td").innerText = obj.phone;
        document.getElementById("dob-td").innerText = obj.dob;
        document.getElementById("country-td").innerText = obj.country;
        document.getElementById("address-td").innerText = obj.address;
        document.getElementById("university-name-td").innerText = obj.university_name;
        document.getElementById("popup-profile-update").classList.toggle("active");
      } else {
        console.log("Error occurred!" + "\nxhr.status: " + xhr.status);
      }
    };

  } else {

    if (firstName.length !== 0) {
      document.getElementById("first-name").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("first-name").style.border = "2.5px solid #d50000";
    }

    if (lastName.length !== 0) {
      document.getElementById("last-name").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("last-name").style.border = "2.5px solid #d50000";
    }

    if (email.length !== 0) {
      document.getElementById("email").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("email").style.border = "2.5px solid #d50000";
    }

    if (phone.length !== 0) {
      document.getElementById("phone").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("phone").style.border = "2.5px solid #d50000";
    }

    if (dob.length !== 0) {
      document.getElementById("dob").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("dob").style.border = "2.5px solid #d50000";
    }

    if (country.length !== 0) {
      document.getElementById("country").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("country").style.border = "2.5px solid #d50000";
    }

    if (address.length !== 0) {
      document.getElementById("address").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("address").style.border = "2.5px solid #d50000";
    }

    if (universityName.length !== 0) {
      document.getElementById("university-name").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("university-name").style.border = "2.5px solid #d50000";
    }

    if (studentId.length !== 0) {
      document.getElementById("student-id").style.border = "2.5px solid #00c853";
    } else {
      document.getElementById("student-id").style.border = "2.5px solid #d50000";
    }

  }
}
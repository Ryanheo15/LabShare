let cookies = 0;

fetch('../../assets/cookies.json')
    .then(response => response.json())
    .then(function (data) {
        document.getElementById('currentName').textContent = data.firstName + ' ' + data.lastName;
        document.getElementById('currentEmail').textContent = data.email;
        document.getElementById('currentInstitution').textContent = data.institution;
        document.getElementById('currentDepartment').textContent = data.department;
        document.getElementById('currentDivision').textContent = data.division;
        document.getElementById('currentBuilding').textContent = data.building;

        if (data.admin === 'false') {
            document.getElementById('adminLabel').textContent = "";
        }

        console.log(data);
    });
document.addEventListener("DOMContentLoaded", () => {
    const surveyData = [
        { id: 570, name: "Đàm Việt Hưng", role: "Sinh Viên", username: "ngankt2", email: "ngankt2@gmail.com", pass: "ngankt2004", date: "05/11/2020" },
        { id: 569, name: "Anh Hưng đẹp trai", role: "Giảng viên", username: "lelam", email: "lelamnhat@gmail.com", pass: "lelamnhat2711", date: "26/09/2020" },
        // Add more survey data here
    ];

    const surveyList = document.getElementById("survey-list");
    const modal = document.getElementById("addAccountModal");
    const closeModal = document.getElementsByClassName("close")[0];

    function renderTable(data) {
        surveyList.innerHTML = "";
        data.forEach((survey, index) => {
            const row = `<tr>
                <td><input type="checkbox" class="select-row" data-id="${survey.id}"></td>
                <td>${index + 1}</td>
                <td>${survey.name}</td>
                <td>${survey.role}</td>
                <td>${survey.username}</td>
                <td>${survey.pass}</td>
                <td>${survey.email}</td>
                <td>${survey.date}</td>
            </tr>`;
            surveyList.innerHTML += row;
        });
    }

    renderTable(surveyData);

    document.getElementById("add-survey").addEventListener("click", () => {
        modal.style.display = "block";
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });

    document.getElementById("addAccountForm").addEventListener("submit", (event) => {
        event.preventDefault();

        const newSurvey = {
            id: Date.now(),
            name: document.getElementById("name").value,
            role: document.getElementById("role").value,
            username: document.getElementById("username").value,
            pass: document.getElementById("password").value,
            email: document.getElementById("email").value,
            date: document.getElementById("birthdate").value
        };

        surveyData.push(newSurvey);
        renderTable(surveyData);
        modal.style.display = "none";
    });

    document.getElementById("delete-survey").addEventListener("click", () => {
        const selectedCheckboxes = document.querySelectorAll('.select-row:checked');
        const selectedIds = Array.from(selectedCheckboxes).map(cb => Number(cb.dataset.id));
        const newData = surveyData.filter(survey => !selectedIds.includes(survey.id));
        surveyData.length = 0;
        surveyData.push(...newData);
        renderTable(surveyData);
    });

    document.getElementById("change-results").addEventListener("click", () => {
        const selectedCheckboxes = document.querySelectorAll('.select-row:checked');
        selectedCheckboxes.forEach(cb => {
            const surveyId = Number(cb.dataset.id);
            const survey = surveyData.find(s => s.id === surveyId);
            if (survey) {
                const newName = prompt("Enter new name:", survey.name);
                if (newName) survey.name = newName;
            }
        });
        renderTable(surveyData);
    });
});

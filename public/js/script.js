document.addEventListener("DOMContentLoaded", function () {
    const formContainer = document.getElementById("form-container");
    const toggleFormBtn = document.getElementById("toggle-form");
    const addAccountForm = document.getElementById("addAccountForm");
    const accountTable = document.getElementById("account-list");
    const editAccountBtn = document.getElementById("edit-account");
    const deleteAccountBtn = document.getElementById("delete-account");

    // Hiển thị/Ẩn form thêm tài khoản
    toggleFormBtn.addEventListener("click", function () {
        formContainer.style.display = formContainer.style.display === "none" ? "block" : "none";
        addAccountForm.reset();
        document.getElementById("editIndex").value = "";
    });

    // Thêm hoặc chỉnh sửa tài khoản
    addAccountForm.addEventListener("submit", function (event) {
        event.preventDefault();

        let editIndex = document.getElementById("editIndex").value;
        let name = document.getElementById("name").value;
        let role = document.getElementById("role").value;
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;
        let email = document.getElementById("email").value;
        let birthdate = document.getElementById("birthdate").value;

        if (editIndex !== "") {
            let row = accountTable.children[editIndex];
            row.cells[2].textContent = name;
            row.cells[3].textContent = role;
            row.cells[4].textContent = username;
            row.cells[5].textContent = password;
            row.cells[6].textContent = email;
            row.cells[7].textContent = birthdate;
        } else {
            let newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td><input type="checkbox" class="select-member"></td>
                <td>${accountTable.children.length + 1}</td>
                <td>${name}</td>
                <td>${role}</td>
                <td>${username}</td>
                <td>${password}</td>
                <td>${email}</td>
                <td>${birthdate}</td>
            `;
            accountTable.appendChild(newRow);
        }

        addAccountForm.reset();
        formContainer.style.display = "none";
    });

    // Chỉnh sửa tài khoản
    editAccountBtn.addEventListener("click", function () {
        let selectedRow = [...document.querySelectorAll(".select-member:checked")].map(checkbox => checkbox.closest("tr"));

        if (selectedRow.length === 1) {
            let row = selectedRow[0];
            document.getElementById("editIndex").value = row.rowIndex - 1;
            document.getElementById("name").value = row.cells[2].textContent;
            document.getElementById("role").value = row.cells[3].textContent;
            document.getElementById("username").value = row.cells[4].textContent;
            document.getElementById("password").value = row.cells[5].textContent;
            document.getElementById("email").value = row.cells[6].textContent;
            document.getElementById("birthdate").value = row.cells[7].textContent;

            formContainer.style.display = "block";
        } else {
            alert("Vui lòng chọn một tài khoản để chỉnh sửa!");
        }
    });

    // Xóa tài khoản
    deleteAccountBtn.addEventListener("click", function () {
        let selectedRows = [...document.querySelectorAll(".select-member:checked")].map(checkbox => checkbox.closest("tr"));

        if (selectedRows.length > 0) {
            selectedRows.forEach(row => row.remove());
            alert("Tài khoản đã được xoá!");
        } else {
            alert("Vui lòng chọn ít nhất một tài khoản để xoá!");
        }
    });
});

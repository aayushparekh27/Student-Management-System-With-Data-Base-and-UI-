function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const enrollmentDate = document.getElementById("enrollmentDate").value;

    if (!name || !email || !enrollmentDate) {
        alert("Please fill in all fields.");
        return false;
    }
    return true;
}

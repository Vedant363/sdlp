document.addEventListener('DOMContentLoaded', function () {
    const complaintForm = document.getElementById('complaintForm');
    const complaintsList = document.getElementById('complaintsList');

    complaintForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const complaintText = document.getElementById('complaint').value;

        fetch('submit_complaint.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'complaint=' + encodeURIComponent(complaintText),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                fetchComplaints();
            } else {
                alert('Failed to submit complaint.');
            }
        });
    });

    function fetchComplaints() {
        fetch('get_complaints.php')
        .then(response => response.json())
        .then(data => {
            complaintsList.innerHTML = '';
            data.forEach(complaint => {
                const complaintItem = document.createElement('div');
                complaintItem.textContent = complaint.complaint;
                complaintsList.appendChild(complaintItem);
            });
        });
    }

    fetchComplaints();
});

const sortBtns = document.querySelectorAll(".job-id > *  ")
const sortItems = document.querySelectorAll(".jobs-container > *")

sortBtns.forEach((btn) => {
    btn.addEventListener("click", () =>{
        sortBtns.forEach((btn) => btn.classList.remove("active"));
        btn.classList.add("active");

        const targetData = btn.getAttribute('data-target')
        sortItems.forEach((item) => {
            item.classList.add("delete"); 
            if(item.getAttribute("data-item")===targetData 
            || targetData==="all"){
                item.classList.remove("delete");
            }
        });
    });
});

function showRegisterOptions() {
    document.getElementById('registerModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('registerModal').style.display = 'none';
}

function redirectTo(role) {
    closeModal();
    if (role === 'undergraduate') {
        window.location.href = 'signup_undergraduate.html'; // Link to Undergraduate signup page
    } else if (role === 'employer') {
        window.location.href = 'signup_employer.html'; // Link to Employer signup page
    }
}

// Optional: Close modal when clicking outside of the modal content
window.onclick = function(event) {
    if (event.target == document.getElementById('registerModal')) {
        closeModal();
    }
};

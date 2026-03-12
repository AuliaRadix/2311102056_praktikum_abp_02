document.addEventListener('DOMContentLoaded', function () {
    const thrModal = document.getElementById('thrModal');

    thrModal.addEventListener('shown.bs.modal', function () {
        console.log("Selamat! THR telah diklaim.");

        const modalBody = document.querySelector('.modal-body');
        modalBody.style.transition = "background 2s";
        modalBody.style.backgroundColor = "#f0fff0";
    });

    thrModal.addEventListener('hidden.bs.modal', function () {
        document.querySelector('.modal-body').style.backgroundColor = "#fdfdfd";
    });
});


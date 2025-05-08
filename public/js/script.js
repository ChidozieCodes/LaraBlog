

let errorModal = document.querySelector('#errorModalM');

let closeModalButton = document.querySelector('#errorcloseModal');
if(closeModalButton){
    closeModalButton.addEventListener('click', function() {
        errorModal.style.display = 'none';
    });
}

    // Your existing modal close code
    const continueButton = document.getElementById('closeModal');
    if (continueButton) {
        continueButton.addEventListener('click', () => {
            const successModal = document.getElementById('successModal');
            if (successModal) {
                successModal.style.display = 'none';
            }
        });
    }

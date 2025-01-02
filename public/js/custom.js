let selectedForm = null;

// Mostrar el modal y guardar el formulario seleccionado
function showConfirmationModal(formId) {
    selectedForm = document.getElementById(`deleteForm-${formId}`);
    document.getElementById("confirmModal").classList.remove("hidden");
}

// Ocultar el modal
function hideConfirmationModal() {
    selectedForm = null;
    document.getElementById("confirmModal").classList.add("hidden");
}

// Confirmar la eliminación
document
    .getElementById("confirmDeleteButton")
    .addEventListener("click", function () {
        if (selectedForm) {
            selectedForm.submit();
        }
    });

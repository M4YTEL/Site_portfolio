document.addEventListener('DOMContentLoaded', function () {
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach(function (input) {
        input.addEventListener('change', function () {
            showFilePreview(this);
        });
    });

    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            deleteFilePreview(this);
        });
    });

    function showFilePreview(input) {
        const previewContainer = input.closest('.drag-area').querySelector('.file-preview');
        const deleteButton = input.closest('.drag-area').querySelector('.btn-delete');

        // Réinitialisez le contenu du conteneur de prévisualisation
        previewContainer.innerHTML = '';

        // Vérifiez si des fichiers ont été sélectionnés
        if (input.files && input.files.length > 0) {
            // Masquez le contenu <i class="bi bi-upload"></i>
            const dragArea = input.closest('.drag-area');
            if (dragArea) {
                dragArea.querySelector('.bi-upload').style.display = 'none';
            }

            // Parcourez les fichiers sélectionnés
            for (let i = 0; i < input.files.length; i++) {
                const file = input.files[i];

                // Vérifiez si le fichier est une image
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        // Créez un élément d'image pour afficher la prévisualisation
                        const image = document.createElement('img');
                        image.src = e.target.result;

                        // Ajustez les styles pour tenir dans les dimensions de la drag-area
                        image.style.maxWidth = '100%';
                        image.style.maxHeight = '100%';
                        dragArea.style.overflow = 'hidden';

                        // Ajoutez l'image à la div de prévisualisation
                        previewContainer.appendChild(image);
                        deleteButton.style.display = 'block'; // Affichez le bouton de suppression
                    };

                    // Lisez le contenu du fichier comme une URL de données
                    reader.readAsDataURL(file);
                } else if (file.type === 'application/pdf') {
                    // Si le fichier est un PDF, affichez l'icône PDF
                    const pdfIcon = document.createElement('img');
                    pdfIcon.src = 'icons/pdf.svg'; // Assurez-vous que le chemin est correct
                    pdfIcon.alt = 'PDF Icon';
                    pdfIcon.style.maxWidth = '100%';
                    pdfIcon.style.maxHeight = '100%';
                    dragArea.style.overflow = 'hidden';
                    previewContainer.appendChild(pdfIcon);
                    deleteButton.style.display = 'block'; // Affichez le bouton de suppression


                }
            }
        }
    }

    function deleteFilePreview(deleteButton) {
        const previewContainer = deleteButton.closest('.drag-area').querySelector('.file-preview');
        const dragArea = deleteButton.closest('.drag-area');

        // Réinitialisez le contenu du conteneur de prévisualisation
        previewContainer.innerHTML = '';

        // Affichez à nouveau le contenu <i class="bi bi-upload"></i>
        dragArea.querySelector('.bi-upload').style.display = 'block';

        // Réinitialisez la valeur du champ de fichier
        const fileInput = dragArea.querySelector('input[type="file"]');
        fileInput.value = '';

        // Masquez le bouton de suppression
        deleteButton.style.display = 'none';

        // Supprimez la classe CSS pour masquer la bordure si elle a été ajoutée lors de la sélection du fichier
        dragArea.classList.remove('file-selected');
    }
});

// // Cette fonction affiche le bouton de suppression et la prévisualisation du fichier
// function showFilePreview(input) {
//     const previewContainer = input.closest('.drag-area').querySelector('.file-preview');
//     const deleteButton = input.closest('.drag-area').querySelector('.btn-delete');

//     // Réinitialisez le contenu du conteneur de prévisualisation
//     previewContainer.innerHTML = '';

//     // Vérifiez si des fichiers ont été sélectionnés
//     if (input.files && input.files.length > 0) {
//         // Masquez le contenu <i class="bi bi-upload"></i>
//         const dragArea = input.closest('.drag-area');
//         if (dragArea) {
//             dragArea.querySelector('.bi-upload').style.display = 'none';
//         }

//         // Parcourez les fichiers sélectionnés
//         for (let i = 0; i < input.files.length; i++) {
//             const file = input.files[i];

//             // Vérifiez si le fichier est une image
//             if (file.type.startsWith('image/')) {
//                 const reader = new FileReader();

//                 reader.onload = function (e) {
//                     // Créez un élément d'image pour afficher la prévisualisation
//                     const image = document.createElement('img');
//                     image.src = e.target.result;

//                     // Ajustez les styles pour tenir dans les dimensions de la drag-area
//                     image.style.maxWidth = '100%';
//                     image.style.maxHeight = '100%';
//                     dragArea.style.overflow = 'hidden';

//                     // Ajoutez l'image à la div de prévisualisation
//                     previewContainer.appendChild(image);
//                     deleteButton.style.display = 'block'; // Affichez le bouton de suppression
//                 };

//                 // Lisez le contenu du fichier comme une URL de données
//                 reader.readAsDataURL(file);
//             } else if (file.type === 'application/pdf') {
//                 // Si le fichier est un PDF, affichez l'icône PDF
//                 const pdfIcon = document.createElement('img');
//                 pdfIcon.src = 'icons/pdf.svg'; // Assurez-vous que le chemin est correct
//                 pdfIcon.alt = 'PDF Icon';
//                 pdfIcon.style.maxWidth = '100%';
//                 pdfIcon.style.maxHeight = '100%';
//                 dragArea.style.overflow = 'hidden';
//                 previewContainer.appendChild(pdfIcon);
//                 deleteButton.style.display = 'block'; // Affichez le bouton de suppression
//             }
//         }
//     }
// }

// function deleteFilePreview(deleteButton) {
//     const previewContainer = deleteButton.closest('.drag-area').querySelector('.file-preview');
//     const dragArea = deleteButton.closest('.drag-area');

//     // Réinitialisez le contenu du conteneur de prévisualisation
//     previewContainer.innerHTML = '';

//     // Affichez à nouveau le contenu <i class="bi bi-upload"></i>
//     dragArea.querySelector('.bi-upload').style.display = 'block';

//     // Réinitialisez la valeur du champ de fichier
//     const fileInput = dragArea.querySelector('input[type="file"]');
//     fileInput.value = '';

//     // Masquez le bouton de suppression
//     deleteButton.style.display = 'none';

//     // Supprimez la classe CSS pour masquer la bordure si elle a été ajoutée lors de la sélection du fichier
//     dragArea.classList.remove('file-selected');
// }

// // Ajoutez des gestionnaires d'événements pour les champs de fichier et les boutons de suppression
// const fileInputs = document.querySelectorAll('input[type="file"]');
// fileInputs.forEach(function (input) {
//     input.addEventListener('change', function () {
//         showFilePreview(this);
//     });
// });

// const deleteButtons = document.querySelectorAll('.btn-delete');
// deleteButtons.forEach(function (button) {
//     button.addEventListener('click', function () {
//         deleteFilePreview(this);
//     });
// });

const fileInput = document.getElementById('fileInput');
const imagePreview = document.getElementById('imagePreview');

fileInput.addEventListener('change', function () {
  if (fileInput.files.length > 0) {
    const selectedImage = fileInput.files[0];

    const imageUrl = URL.createObjectURL(selectedImage);

    imagePreview.src = imageUrl;
  } else {
    imagePreview.src = '';
  }
});

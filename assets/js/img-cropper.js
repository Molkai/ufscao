 window.addEventListener('DOMContentLoaded', function() {
// Get the element on document
var photo = document.getElementById('photo');
var modal_image = document.getElementById('modal-img');
var input = document.getElementById('photo-input');
var $modal = $('#modal');
var cropper;

$('[data-toggle="tooltip"]').tooltip();

//Function to set the new image on modal and show modal
var done = function (url) {
    input.value = '';
    modal_image.src = url;
    $modal.modal('show');
};
var new_url;

// Verify if a file was inputed
input.addEventListener('change', function (e) {
    var files = e.target.files;

    var reader;
    var file;
    var url;

    //Apply the function created above
    if (files && files.length > 0) {
        file = files[0];

        if (URL) {
            new_url = URL.createObjectURL(file);
            done(new_url);
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
                new_url = reader.result;
                done(new_url);
            };
            reader.readAsDataURL(file);
        }
    }
});

//Button to zoom in and zoom out
document.getElementById("zoom-in").addEventListener('click', function(){
   cropper.zoom(0.1);
});
document.getElementById("zoom-out").addEventListener('click', function(){
   cropper.zoom(-0.1);
});

//Create a cropper when modal show up, destroy cropper when modal is closed
$modal.on('shown.bs.modal', function () {
    cropper = new Cropper(modal_image, {
        dragMode: 'move',
        aspectRatio: 1,
        rotatable: false,
        restore: false,
        guides: false,
        center: false,
        highlight: false,
        cropBoxMovable: false,
        cropBoxResizable: false,
    });
}).on('hidden.bs.modal', function () {
    cropper.destroy();
    cropper = null;
});
document.getElementById('crop').addEventListener('click', function () {
    var initial_url;
    var canvas;

    $modal.modal('hide');

    if (cropper) {
        canvas = cropper.getCroppedCanvas({
            width: 500,
            height: 500,
        });
        initial_url = photo.src;
        photo.src = canvas.toDataURL();
        $("#edit").css("display", "block");
    }
});

//Edit cropped image
document.getElementById('edit').addEventListener('click', function(e){
    e.preventDefault();
    e.stopPropagation();
    done(new_url);
});
});
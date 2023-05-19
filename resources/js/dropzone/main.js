import Dropzone from 'dropzone'

Dropzone.options.imageUpload = {
    maxFilesize: 10,
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    addRemoveLinks: true,
    createImageThumbnails: true,
    autoProcessQueue: false,
    init: function() {
        var buttonSubmit = document.querySelector('#button');
        buttonSubmit.addEventListener("click", function(e) {
            e.preventDefault();
            myDropzone.processQueue();
        });

        this.on('sending', function(file, xhr, formData) {
            var data = document.querySelector('#image-upload').serializeArray();
            forEach(data, function(value, key) {
                formData.append(value.name, value.value);
            });

        });
    }
}
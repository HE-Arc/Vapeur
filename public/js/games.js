/**
 * Check the file size limit
 * @returns {Boolean}
 */

function upload_check(file) {
    var max_size = 1024 * 1024 * 2; // 2MB

    return file.files[0].size > max_size;
}

function new_image_validation() {
    var file = document.getElementById("image");
    var preview = document.getElementById("preview");

    if (upload_check(file)) {
        alert("File size is too big!");
        preview.src = "";
        preview.style.display = "none";
        file.value = "";
    } else {
        var preview = document.getElementById("preview");
        preview.src = URL.createObjectURL(file.files[0]);
        preview.style.display = "block";
    }
}

function update_image_validation() {
    var file = document.getElementById("image");
    var preview = document.getElementById("preview");
    var original_image = document.getElementById("image").value;

    if (upload_check(file)) {
        alert("File size is too big!");
        preview.src = "images/" + original_image;
        file.value = "";
    } else {
        var preview = document.getElementById("preview");
        preview.src = URL.createObjectURL(file.files[0]);
    }
}

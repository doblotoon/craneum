$(document).ready(function (){
    function readImage() {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function(e) {
                document.getElementById("imgPerfilUpdate").src = e.target.result;
            };       
            file.readAsDataURL(this.files[0]);
        }
    }
    document.getElementById("fotoPerfilUpdate").addEventListener("change", readImage, false);
})
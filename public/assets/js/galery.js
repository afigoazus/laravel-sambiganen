document.addEventListener('DOMContentLoaded', function () {
    var img = document.querySelectorAll('.myImg');
    var modal = document.getElementById('myModal');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    var close = document.getElementsByClassName("close")[0];

    for (var i = 0; i < img.length; i++) {
        img[i].onclick = function(){
            modal.classList.remove("hidden");
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
    }    

    // var span = document.getElementsByClassName("close")[0];
    close.onclick = function() {
        modal.classList.add("hidden");
    }
});


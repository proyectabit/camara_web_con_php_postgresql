var localstream, canvas, video, cxt;

function turnOnCamera() {
    canvas = document.getElementById("canvas");
    cxt = canvas.getContext("2d");
    video = document.getElementById("video");

    if(!navigator.getUserMedia)
        navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia || 
    navigator.msGetUserMedia;
    if(!window.URL)
        window.URL = window.webkitURL;

    if (navigator.getUserMedia) {
        navigator.getUserMedia({"video" : true, "audio": false
        }, function(stream) {
            try {
                localstream = stream;
                video.srcObject = stream;
                video.play();
            } catch (error) {
                video.srcObject = null;
            }
        }, function(err){
            swal("Error", err, "error");
        });
    } else {
        swal("Mensaje", "User Media No Disponible" , "error");
        return;
    }
}

function turnOffCamera() {
    video.pause();
    video.srcObject = null;
    localstream.getTracks()[0].stop();
}

$("#radiotfoto").click(function() {
    $("#subirfoto").addClass("none");
    $("#video").removeClass("none");
    turnOnCamera();
    document.getElementById("subirfoto").value = null;
});

$("#radiosfoto").click(function() {
    $("#subirfoto").removeClass("none");
    $("#video").addClass("none");
    turnOffCamera();
});
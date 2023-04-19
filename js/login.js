const panoramaImage = new PANOLENS.ImagePanorama("images/long.jpg");
const imageContainer = document.querySelector(".image-container");

const viewer = new PANOLENS.Viewer({
    container: imageContainer,
    autoRotate: true, //ภาพเคลื่นauto
    autoRotateSpeed: 0.5, //เวลา
    controlBar : false,
});

viewer.add(panoramaImage);
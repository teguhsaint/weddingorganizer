<link href="css/lightgallery.css" rel="stylesheet" />

<style>
    body {
        background-color: darkblue !important;
    }

    .cards {
        display: block;
        width: 20%;
        margin: 20px;
       
    }

    .w-100 {
        width: 100%;
        height: 50%;
        padding: 15px;
        border: 1px solid white;
        /* box-shadow: 0 0 15px #00000083; */
        border-radius: 2px;
    }

    .r1 {
        transform: rotate(3deg);
        transition: all;
        transform-style: preserve-3d;
        transition-duration: 0.4s;
    }

    .r1:hover {
        transform: rotate(0deg);
        transition: all;
        transform-style: preserve-3d;
        transition-duration: 0.4s;

    }

    .r4 {
        transform: rotate(-4deg);
        transition: all;
        transform-style: preserve-3d;
        transition-duration: 0.4s
    }

    .r4:hover {
        transform: rotate(0deg);
        
        transition: all;
        transform-style: preserve-3d;
        transition-duration: 0.4s
    }
</style>

<div id="lightgallery" style="display: flex;justify-content: center">
    <a href="img/1.jfif" class="cards">

        <img src="img/1.jfif" class="w-100 r1" />
    </a>

    <a href="img/13.jpg" class="cards">
        <img src="img/13.jpg" class="w-100" />
    </a>
    <a href="img/cover3.jpeg" class="cards">
        <img src="img/cover3.jpeg" class="w-100 r4" />
    </a>
    <a href="img/2.jpg" class="cards">
        <img src="img/2.jpg" class="w-100" />
    </a>
</div>

<script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
<script>
    lightGallery(document.getElementById('lightgallery'));
</script>
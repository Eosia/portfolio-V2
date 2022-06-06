<div class="container-hidden">
    <div class="container-loader">
        <div class="loader"></div>
    </div>
</div>

<script rel="preload">
    function hidden() {
        document.getElementsByClassName("loader")[0].style.display = 'none';
    }
    window.setTimeout(hidden, 1000);
</script>

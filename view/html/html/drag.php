<h1>Drag & Drop</h1>


<div class="drag" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="/images/logo.png" draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="100">
</div>

<div class="drag" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<script>
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
</script>
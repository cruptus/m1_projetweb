<script>
    function loadcss(filename) {
        var file = document.createElement("link");
        file.setAttribute("rel", "stylesheet");
        file.setAttribute("type", "text/css");
        file.setAttribute("href", filename);
        document.head.appendChild(file);
    }
    loadcss("/css/rotate.css");
</script>

<h1>Rotate</h1>
<table>
    <tr>
        <td colspan="3">300x50</td>
        <td rowspan="4">100x200</td>
    </tr>
    <tr>
        <td rowspan="2" colspan="2">200x100</td>
        <td>100x50</td>
    </tr>
    <tr>
        <td>100x50</td>
    </tr>
    <tr>
        <td rowspan="2">100x100</td>
        <td rowspan="2" colspan="2">200x100</td>
    </tr>
    <tr>
        <td>100x50</td>
    </tr>
</table>
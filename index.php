<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script type="module">
import "/overhoor/public/overhoor.js";
</script>
<?php




?>

<body>
<div id="questionBlock" class="jumbotron text-center">
    <p id="feedback"></p>
    <p id="question"></p>
    <input id="answer" type="text"></input>
    <button id="answerButton">Insert</button>
</div>
<div id="testSelect">
    <div class="row mx-auto">
        <div class="col-sm-4">
            <p>Kwartiel 1:</p>
            <div class="btn-group-vertical">
                <button type="button" value="1" id="selectButton" class="btn btn-secondary">Jaartallen alle perioden</button>
                <button type="button" value="2" id="selectButton" class="btn btn-secondary">Kna Protocollen</button>
                <button type="button" value="3" id="selectButton" class="btn btn-secondary">Belangrijke Archeologen</button>
                <button type="button" value="4" id="selectButton" class="btn btn-secondary">Jaartallen Perioden Steentijden</button>
                <button type="button" value="5" id="selectButton" class="btn btn-secondary">Jaartallen Perioden Metaaltijden + Romeins</button>
                <button type="button" value="6" id="selectButton" class="btn btn-secondary">Jaartallen Perioden Middeleeuwen + Nieuwe Tijd</button>
            </div>
        </div>
        <div class="col-sm-4">
            <p>Kwartiel 2:</p>
            <div class="btn-group-vertical">
                <button type="button" value="7" id="selectButton" class="btn btn-secondary">Jaartallen Perioden Prehistorie Detail</button>
                <button type="button" value="8" id="selectButton" class="btn btn-secondary">Types Vuursteen</button>
            </div>
        </div>
        <div class="col-sm-4">
            <p>Kwartiel 3:</p>
            <div class="btn-group-vertical">
                <button type="button" value="9" id="selectButton" class="btn btn-secondary">Formaties -> Afzettingen</button>
                <button type="button" value="10" id="selectButton" class="btn btn-secondary">Afzettingen -> Formaties</button>
                <button type="button" value="11" id="selectButton" class="btn btn-secondary">Laagpakketten</button>
                <button type="button" value="12" id="selectButton" class="btn btn-secondary">Culturen IJzertijd</button>
            </div>
        </div>
    </div> 
    <div class="row mx-auto">
        <div class="col-sm-4">
            <p>Kwartiel 5:</p>
            <div class="btn-group-vertical">
                <button type="button" value="13" id="selectButton" class="btn btn-secondary">VME baksels -> jaartallen</button>
                <button type="button" value="14" id="selectButton" class="btn btn-secondary">VME potten -> baksels en jaartallen</button>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
<?php
session_start()


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="modal.css">
    <style>
        /* Add this CSS to center the forms */
        .form-container {
            width: 50%;
            /* adjust the width to your liking */
            margin: 40px auto;
            /* add some margin and center the container */
            text-align: center;
            /* center the forms horizontally */
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="panel">
            <img src="Eulap.png" alt="Eulap image">
        </div>

        <a href="#" class="panel">
            <strong>Contestant 1</strong>
        </a>
        <a href="#" class="panel">
            <strong>Contestant 2</strong>
        </a>
        <a href="#" class="panel">
            <strong>Contestant 3</strong>
        </a>
        <a href="#" class="panel">
            <strong>Contestant 4</strong>
        </a>
        <a href="#" class="panel">
            <strong>Contestant 5</strong>
        </a>
        <a href="#" class="panel">
            <strong>Contestant 6</strong>
        </a>

        <div class="logout-button">
            <a href="">
                <button><strong>LOGOUT</strong></button>
            </a>
        </div>
    </div>


    <div class="container">
        <h1>SEARCH FOR MOST FESTIVE CONTINGENT</h1>

        <form action="#" method="post">
            <div class="form-group">
                <label for="appearance"><strong>Festival Spirit of Parade <br> Participants:</strong></label>

                <input id="appearance" name="appearance" type="number" min="1" max="50" required>
                <p>(Festive-feel, Festive-look, Festivity, Color, Use of Liveners, Enthusiasm)</p>
            </div>
            <div class="form-group">
                <label for="artistry"><strong>Costume and Props: </strong></label>
                <input id="artistry" name="artistry" type="number" min="1" max="30" required>
                <p class="crea">(Creativity, Uniqueness)</p>
            </div>
            <div class="form-group">
                <label for="craftsmanship"><strong>Relevance to the Theme: </strong></label>
                <input id="craftsmanship" name="craftsmanship" type="number" min="1" max="20" required>
                <p class="culturalbril"><em>(Theme: "CULTURAL BRILLIANCE: Weaving Traditions, Celebrating Legacies")</em></p>
            </div>

            <div class="buttons">
                <button onclick="document.getElementById('id01').style.display='block'" type="submit">Submit</button>
                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                    <form class="modal-content" action="/action_page.php">
                        <div class="containermodal">
                            <h1>Delete Account</h1>
                            <p>Are you sure you want to delete your account?</p>

                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </form>

    </div>

    <script>
        // Get the modal
        // Get the modal
        var modal = document.getElementById('id01');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input[type="number"]');

            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    const min = parseInt(this.min);
                    const max = parseInt(this.max);
                    const value = parseInt(this.value);

                    if (value < min) {
                        this.value = min;
                    } else if (value > max) {
                        this.value = max;
                    }
                });
            });
        });
    </script>
</body>

</html>
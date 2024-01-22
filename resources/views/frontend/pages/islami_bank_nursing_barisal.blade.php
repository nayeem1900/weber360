<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"type="text/css"href="{{asset('public/frontend/css/barisal_nursing/nursing.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Islami Bank Nursing Institute Barisal</title>
</head>
<body>
<div class="wrap">
    <div class="logo">
        <img src="{{url('public/upload/logo_images/202104010722logo.png')}}">

    </div>
    <div class="header">
        <div id="London" class="tabcontent">
            <h1>London</h1>
            <p>London is the capital city of England.</p>
        </div>

        <div id="Paris" class="tabcontent">
            <h1>Paris</h1>
            <p>Paris is the capital of France.</p>
        </div>

        <div id="Tokyo" class="tabcontent">
            <h1>Tokyo</h1>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <div id="Oslo" class="tabcontent">
            <h1>Oslo</h1>
            <p>Oslo is the capital of Norway.</p>
        </div>

        <button class="tablink" onclick="openCity('London', this, 'red')" id="defaultOpen">London</button>
        <button class="tablink" onclick="openCity('Paris', this, 'green')">Paris</button>
        <button class="tablink" onclick="openCity('Tokyo', this, 'blue')">Tokyo</button>
        <button class="tablink" onclick="openCity('Oslo', this, 'orange')">Oslo</button>


    </div>

</div>

<h1>Hello, world!</h1>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="{{asset('public/frontend/js/npm.js')}}" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

<script type="text/javascript">
    function openCity(cityName, elmnt, color) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }

        // Show the specific tab content
        document.getElementById(cityName).style.display = "block";

        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<!-- divinectorweb.com -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Background HTML CSSS</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sty.css">
    <title>Ajax||Calculator</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Boothstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
    </div>

    <div class="row">



        <div class="row align-items-center mt-5 lead">
            <div class="col-4 offset-4 border  p-4 bg-light shadow  ">
                <h3 class=" text-center bg-info rounded text-black py-4">AJAX CALCULATOR</h3>
                <div class="form_group mt-3">
                    <div class="form-group mb-4">
                        <level>1st digit</level>
                        <input type="number" class="form-control anumber" placeholder="Enter your first digit">

                    </div>
                    <div class="form-group mb-4">
                        <level>2nd digit</level>
                        <input type="number" class="form-control  bnumber" placeholder="Enter your second  digit">
                    </div>
                    <div class="form-group mb-4">
                        <level>Result</level>
                        <input type="number" class=" result">
                    </div>

                    <div class="form-group mb-4 text-center">


                        <input type="submit" class="btn btn-success  add" value="+">


                        <input type="submit" class="btn btn-primary  sub" value="-">


                        <input type="submit" class="btn btn-danger  mul" value="*">


                        <input type="submit" class="btn btn-warning  div" value="/"> <br> <br>
                        <input type="button" class="btn btn-secondary clear" value="Clear" onclick="clearAllFields()">

                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Boothstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- font-awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="ajax.js"></script>
</body>

</html>
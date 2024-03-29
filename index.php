<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Moul&display=swap&family=Bayon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="statics/style.css">
    <title>ការគណនាកាលបរិច្ឆេទ</title>
</head>

<body class="bg-light">
    <header class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid d-grid gap-3 align-items-center text-center" style="grid-template-columns: 1fr 2fr;">
            <h2 class="moul-regular text-light">ការគណនាកាលបរច្ឆេទ</h2>
        </div>
    </header>
    <main class="m-3 text-center">
        <div class="container">
            <form action="" method="post">
                <div class="row align-items-center justify-content-center">
                    <div class="col-5 text-center border border-secondary p-3 m-1 rounded">
                        <h4 class="card-title battambang-bold">កាលបរច្ឆេទទី ១</h4>
                        <label for="date1" class="battambang-regular ">ថ្ងៃខែឆ្នាំ៖ </label>
                        <input type="date" name="date1" id="date1" required>
                        <label for="time1" class="battambang-regular ">ម៉ោង៖ </label>
                        <input type="time" name="time1" id="time1" required>
                    </div>
                    <div class="col-5 text-center border border-secondary p-3 m-1 rounded">
                        <h4 class="card-title battambang-bold">កាលបរច្ឆេទទី ២</h4>
                        <label for="date2" class="battambang-regular ">ថ្ងៃខែឆ្នាំ៖ </label>
                        <input type="date" name="date2" id="date2" required>
                        <label for="time2" class="battambang-regular ">ម៉ោង៖ </label>
                        <input type="time" name="time2" id="time2" required>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-auto m-auto"> 
                        <input type="submit" value="គណនា" class="battambang-bold m-3" style="width: 15rem; height: 3rem;">
                    </div> 
                </div>      
            </form>
        </div>

        <!-- result will show here -->
        <div class="container">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    include "datetime.php";
                }
             ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 fixed-bottom bg-dark text-light">
        <div class="container">
            <span class="text-muted">រៀបចំដោយ៖ ក្អាត ណាត់ </span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
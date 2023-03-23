<!DOCTYPE html>
<html>

<head>
    <title>Flower Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap');
        body{
            font-family: 'Chakra Petch', sans-serif;
        }
     
        </style>
<body>
<?php include 'header.php';?>

    <div class="container" style="display: block;" id="main">
        <div class="row pb-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">

                <div class="h1 text-center pt-3 ">JULIE'S FLOWER SHOP</div>
                <div class="h2 text-center ">Type of Flowers</div>
                <div class="fw-bold text-center pt-1">Preserved roses last up to 5 years</div>
                <div class="text-center pt-1 pb-4">EVERY ROSE IS HANDPICKED / LASTS UP TO 5 YEARS / ALONG WITH EXQUISITE
                    PACKAGING</div>

                <div class="container">
                    <div id="type" class="row row-cols-2 "></div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="api/index.js"></script>
</body>

</html>
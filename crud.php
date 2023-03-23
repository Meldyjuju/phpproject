<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
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

    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>IMG</th>
                        <th>Type</th>
                        <th>Edit</th>
                        <th>DEL</th>
                    </thead>
                    <tbody id="fetchh" class="align-text-bottom">


                    </tbody>


                </table>



            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <!-- Modal EDIT -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="editbody"></div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">ประเภท :</span>
                        <select name="" id="selectedit" class="form-control"></select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="confEdit()">Save</button>
                </div>
            </div>
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="api/crud.js"></script>
</body>

</html>
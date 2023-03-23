<!DOCTYPE html>
<html>

<head>
    <title>Order</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap');
        body{
            font-family: 'Chakra Petch', sans-serif;
        }
        </style>
<body>
<?php include 'header.php';?>

    <div class="container">
        <div class="row pt-3">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="container ">
                    
                    <div class=" rounded rounded-4 border border-primary bg-light pb-5 pt-5">
                <div class="h1 text-center pb-2 fw-bolder text-dark">My Order</div>

                <div id="result" class="text-center"></div>
                   
                </div>

            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>









    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function() {
            let result = ''
            $.ajax({
                type: "get",
                dataType: "json",
                url: "api/getLastOrder.php",
                data: {},
                success: function(response) {
                    console.log("GET LAST SUCCESS", response)
                    data = response.result;
                    for (let i = 0; i < data.length; i++) {
                        result += `
                        
                <img src="${data[i].img}" width="300px" height="300px" class="border rounded rounded-3 border-primary"><br>
        <div class="pt-4">       <lable class="fw-bold">ชื่อ : </lable> ${data[i].name} </div>
        <div class="pt-2">       <lable class="fw-bold">ราคา : </lable> ${data[i].price} </div>
        <div class="pt-2">       <lable class="fw-bold">จำนวน : </lable> ${data[i].num} </div>
              <div class="pt-2">  <button class="btn btn-outline-primary" onclick="back()">กลับหน้าหลัก</button> </div>
                     

                `


                    }

                    $("#result").html(result)

                },
                error: function(err) {
                    console.log("GET LAST FAILED", err)
                }
            });

        });

        function back(){

            window.location.href = "index.php";


        }
    </script>
</body>

</html>
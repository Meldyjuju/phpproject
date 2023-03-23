$(document).ready(function() {
    let html = ''

    $.ajax({
        type: "get",
        dataType: "json",
        url: "api/getType.php",
        data: {},
        success: function(response) {
            console.log("Type Success", response)

            data = response.result;

            for (let i = 0; i < data.length; i++) {

                html += `
                
                <div class="col-lg-6 text-center pt-3">
                
               

                <div class="card text-dark">
                <div class="view overlay zoom">
                <img src="${data[i].img}" class="card-img" alt="..." id="image">
                </div>
                <div class="card-img-overlay" >
                  
                  <p class="card-text"><div class="pt-2 fw-bolder h1">${data[i].name}</div></p>
                  <p class="card-text" style="padding-top:85%;"><button class="btn btn-dark"  onclick="getproduct(${data[i].id})" >View</button></p>
                </div>
              </div>
               
              
                </div>
                
                `


            }
            $("#type").html(html);

        },
        error: function(err) {
            console.log("Type error", err)
        }



    });




});


function getproduct(id) {

    sessionStorage.setItem("type", id)
    window.location.href = "product.php"

}
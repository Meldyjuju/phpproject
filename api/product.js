var type = sessionStorage.getItem("type");

$(document).ready(function() {
    let html = "";
    let cate = "";
    $.ajax({
        type: "get",
        url: "api/getproduct.php",
        data: {
            type: type,
        },
        dataType: "json",
        success: function(response) {
            console.log("product success", response);

            data = response.result;

            for (let i = 0; i < data.length; i++) {
                $("#category").html(data[i].type);
                html += `

                    <div class="col-lg-6 ">
                        <div class="container">
                         <div class="card border-dark mb-3 " style="max-width: 18rem;">
                               <div class="card-header fw-bolder text-dark"> ${data[i].name}</div>
                                     <div class="card-body text-dark">
                                           <h5 class="card-title"><img src="${data[i].img}" width="100%" height="250px" class="rounded rounded-3 border"></h5>
                                               <p class="card-text"><div class="pb-2">จำนวน: ${data[i].num} ดอก </div>
                                                     <div class="pb-4">ราคา: ${data[i].price} บาท</div>
                                                           <button style="width:100%;" type="button" class ="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="order(${data[i].id})">สั่งซื้อ</button></p>
                                         </div>
                             </div>
                        </div>
                     </div>
                `;
            }
            $("#productlist").html(html);
        },
        error: function(err) {
            console.log("product err", err);
        },
    });
});

function order(id) {
    let prolist = ''
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "api/orderpro.php",
        data: {
            id: id,
        },
        success: function(response) {
            console.log("Order success", response);
            data = response.result
            for (let i = 0; i < data.length; i++) {

                prolist += `
                <center>
                <img src="${data[i].img}" width="200px" height="200px">
                </center>
                <div class="input-group pt-3">
                <span class="input-group-text">ชื่อ :</span>
                <input type="text" class="form-control" value="${data[i].name}" id="o_name" disabled>
                </div>

                <div class="input-group pt-3">
                <span class="input-group-text">ราคา :</span>
                <input type="text" class="form-control" value="${data[i].price}" id="o_price" disabled>
                </div>

                <div class="input-group pt-3">
                <span class="input-group-text">จำนวนที่มี :</span>
                <input type="text" class="form-control" value="${data[i].num} ดอก"  disabled>
                </div>

                <div class="input-group pt-3">
                <span class="input-group-text">จำนวนที่ต้องการซื้อ :</span>
                <input type="number" class="form-control" value="" id="amount" placeholder="กรอกจำนวนสินค้า" >
                </div>

                <div class="input-group pt-3">
                <span class="input-group-text">ประเภท :</span>
                <input type="text" class="form-control" value="${data[i].type_name}" id="o_type" disabled>
                </div>
        
                <input type="hidden" value="${data[i].id}" id ="reforder">
                <input type="hidden" value="${data[i].img}" id="o_img">
                



                
                `



            }
            $("#orderpro").html(prolist)
        },
        error: function(err) {
            console.log("Order failed", err);
        },
    });
}


function orderNow() {
    var refid = $("#reforder").val()
    let conff = confirm("ยืนยันการสั่ง?")
    if (conff) {

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "api/orderNow.php",
            data: {
                ref: refid,
                amount: $("#amount").val(),
                name_or: $("#o_name").val(),
                price: $("#o_price").val(),
                img: $("#o_img").val()
            },
            success: function(response) {
                console.log("Update Success", response)
                window.location.href = "result.php";
            },
            error: function(err) {
                console.log("Update failed", err)
            }
        });




    }



}
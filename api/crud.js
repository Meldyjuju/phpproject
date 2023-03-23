$(document).ready(function() {
    let fetchh = ''
    $.ajax({
        type: "get",
        dataType: "json",
        url: "api/getAllProduct.php",
        data: {},
        success: function(response) {
            console.log("fetch success", response)
            data = response.result
            for (let i = 0; i < data.length; i++) {
                fetchh +=

                    `
                    <tr>
                        <td>${data[i].id}</td>
                        <td>${data[i].name}</td>
                        <td>${data[i].price}</td>
                        <td>${data[i].num}</td>
                        <td>${data[i].type_name}</td>
                        <td><img src="${data[i].img}" width="150px" height="150px  " ></td>
                        <td><button class="btn btn-warning" onclick="edit(${data[i].id})" data-bs-toggle="modal" data-bs-target="#editmodal" >Edit</button></td>
                        <td><button class="btn btn-danger" onclick="del(${data[i].id})">Del</button></td>
                    
                    </tr>
                
                
                
                `






            }
            $("#fetchh").html(fetchh);


        },
        error: function(err) {
            console.log("fetch error", err);
        }
    });





});

function selectedit() {
    let sledit = ''
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "api/getType.php",
        data: {


        },
        success: function(response) {
            console.log("SELECT SUCCESS", response)

            data = response.result;

            for (let i = 0; i < data.length; i++) {

                sledit += `

                <option value="${data[i].id}">${data[i].name} </option>

                
                `


            }

            $("#selectedit").html(sledit)

        },
        error: function(err) {
            console.log("SELECT ERROR", err)
        }





    });
}

function edit(id) {
    selectedit()
    let fetchedit = ''
    let e_ref = id

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "api/editcrud.php",
        data: {
            ref_e: e_ref
        },
        success: function(response) {

            console.log("edit success", response);
            data = response.result;

            for (let i = 0; i < data.length; i++) {

                fetchedit += `
                <center>
                <img src="${data[i].img}" width="150px" height="150px">
                </center>
                <input type="hidden" id="e_id" value="${data[i].id}">
                <div class="input-group mb-3 pt-3">
                <span class="input-group-text" id="basic-addon1">ชื่อ :</span>
                <input id="e_name" type="text" class="form-control" value="${data[i].name}" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ราคา :</span>
                <input id="e_price" type="text" class="form-control" placeholder="" value="${data[i].price}"  aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">จำนวน :</span>
                <input id="e_num" type="text" class="form-control" value="${data[i].num}" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                </div>


                `


            }
            $("#editbody").html(fetchedit)


        },
        error: function(error) {
            console.log("edit error", error);
        }

    });




}

function confEdit() {

    let confff = confirm("ยืนยันการแก้ไข?")

    if (confff) {

        let name_e = $("#e_name").val();
        let price_e = $("#e_price").val();
        let num_e = $("#e_num").val();
        let id_e = $("#e_id").val();
        let type_e = $("#selectedit").val()

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "api/updateCrud.php",
            data: {
                eid: id_e,
                ename: name_e,
                eprice: price_e,
                enum: num_e,
                etype: type_e
            },
            success: function(response) {
                console.log("UPDATE SUCCES", response);
                alert("แก้ไขเสร็จสิ้น")
                window.location.reload();

            },
            error: function(error) {
                console.log("UPDATE FAILED", error)
            }


        });

    }



}

function del(id) {
    let conf = confirm("ยืนยันการลบ?")
    if (conf) {
        let refid = id
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "api/delpro.php",
            data: {
                ref: refid
            },
            success: function(response) {
                console.log("DEL SUCCESS", response)
                alert("ลบสินค้าเรียบร้อยแล้ว")
                window.location.reload();
            },
            error: function(err) {
                console.log("DEL ERR", err)
            }
        });





    }

}
<?php 
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Rooms</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4">
               <h3 class="mb-4">ROOMS</h3>

                <!-- feature -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">     

                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                            <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-dark text-light"> 
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Guests</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                        </tr>
                            </thead>
                            <tbody id="room-data">
                            </tbody>
                            </table>
                        </div>

                    </div>
                </div>

        </div>
    </div>
</div>

    
     <!-- Add Room modal  -->

<div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="add_room_form" autocomplete="off">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Room</h5>
                    </div>
                        <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                                </div>
                                 <div class="col-md-6 mb-3">
                                   <label class="form-label fw-bold">Area</label>
                                    <input type="number" min="1" name="area" class="form-control shadow-none" required>
                                </div>
                                 <div class="col-md-6 mb-3">
                                  <label class="form-label fw-bold">Price</label>
                                    <input type="number" min="1" name="price" class="form-control shadow-none" required>
                                </div>
                                 <div class="col-md-6 mb-3">
                                  <label class="form-label fw-bold">Quantity</label>
                                    <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                                </div>
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Adult (Max.)</label>
                                     <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                                </div>
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Children (Max.)</label>
                                     <input type="number" min="1" name="children" class="form-control shadow-none" required>
                                </div>
                                <div class="col-12 mb-3">
                                 <label class="form-label fw-bold">Features</label>
                                        <div class="row">
                                            <?php
                                            $res = selectAll('features');
                                            while($opt = mysqli_fetch_assoc($res)){
                                                echo"
                                                <div class='col-md-3 mb-1'>
                                                 <label>
                                                 <input type='checkbox' name='features' value'$opt[id]' class='form-check-input shadow-none'>
                                                 $opt[name]
                                                 </label>
                                                </div>
                                                ";
                                            }
                                            ?>
                                        </div>
                            </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Facilities</label>
                                        <div class="row">
                                            <?php
                                            $res = selectAll('facilities');
                                            while($opt = mysqli_fetch_assoc($res)){
                                                echo"
                                                <div class='col-md-3 mb-1'>
                                                 <label>
                                                 <input type='checkbox' name='facilities' value'$opt[id]' class='form-check-input shadow-none'>
                                                 $opt[name]
                                                 </label>
                                                </div>
                                                ";
                                            }
                                            ?>
                                        </div>
                            </div>
                        <div class="col-12 mb-3">
                         <label class="form-label fw-bold">Description</label>
                            <textarea name="desc" id="4" rows="10" class="form-control shadow-none" required></textarea>
                        </div>
                    </div>
                </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
                    </div> 
                 </div>
     </div>


    <?php require('inc/scripts.php'); ?>
   
   <script>

        let add_room_form = document.getElementById('add_room_form');

        add_room_form.addEventListener('submit',function(e){
            e.preventDefault();
            add_rooms();
            get_all_rooms();
        });

        function add_rooms()
        {
         
                let data = new FormData();
                data.append('add-room','');
                data.append('name',add_room_form.elements['name'].value);  
                data.append('area',add_room_form.elements['area'].value);  
                data.append('price',add_room_form.elements['price'].value);  
                data.append('quantity',add_room_form.elements['quantity'].value);  
                data.append('adult',add_room_form.elements['adult'].value);  
                data.append('children',add_room_form.elements['children'].value);  
                data.append('desc',add_room_form.elements['desc'].value);  

                let features = [];
                add_room_form.elements['features'].forEach(el =>{
                    if(el.checked){
                        features.push(el.value);
                    }
                });

                let facilities = [];
                add_room_form.elements['facilities'].forEach(el =>{
                    if(el.checked){
                        facilities.push(el.value);
                    }
                });

                data.append('features',JSON.stringify(features));  
                data.append('facilities',JSON.stringify(facilities));  
                

                let xhr = new XMLHttpRequest();
                xhr.open("POST","ajax/rooms.php",true);

                xhr.onload = function(){
                    var myModal = document.getElementById('add-room');
                    var modal = bootstrap.Modal.getInstance(myModal);
                    modal.hide();
                    
                    if(this.responseText == 1){
                        alert('success', 'New room added!');
                        add_room_form.reset(); 
                        
                    }
                    else{
                        alert('error','Server Down!');  
                    }
                    }
            
            xhr.send(data);
        }

        function get_all_rooms()
        {
            let xhr = new XMLHttpRequest();
                xhr.open("POST","ajax/rooms.php",true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function(){
                document.getElementById('room-data').innerHTML = this.responseText;
                }
            
            xhr.send('get_all_rooms');
        }

        
        window.onlaod = function(){
            get_all_rooms();
        }

        
    </script>

</body>
</html>
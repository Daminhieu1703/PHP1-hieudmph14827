<?php
// B1 : Ket noi CSDL
require_once './../../db/khach_hang.php';

$kq = getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\WEB16305\src\bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 ">
        <div class="row border border-3 border-secondary rounded">
            <div class="col-6 p-2 ">
                <a href="\WEB16305\src\admin\users\form_create.php" class="btn btn-success">Create</a>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="row ">
                <table class="table table-striped table-hover text-justify">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Ma kh</th>
                        <th scope="col">Tên kh</th>
                        <th scope="col">SDT</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Email</th>
                        <th scope="col">Avatar</th>
                        <th scope="col" colspan = "2">Thao tác  </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    
                    for ($i=0; $i < count($kq); $i++) { 
                    
                    
                    ?>
                    <tr>
                        <td>
                            
                            <?php echo $kq[$i]['id'];   ?>
                        </td>
                        <td>
                            <?php echo $kq[$i]['ma'];   ?>
                        </td>
                        <td>
                            <?php echo $kq[$i]['ten'];   ?>
                        </td>
                        <td>
                            <?php echo $kq[$i]['sdt'];   ?>
                        </td>
                        <td>
                            <?php echo $kq[$i]['dia_chi'];   ?>
                        </td>
                        <td>
                            <?php
                            if ($kq[$i]['gioi_tinh']==0) {
                                echo "Nữ";
                            } else {
                                echo "Nam";
                            };
                            // echo $kq[$i]['gioi_tinh'];   ?>
                        </td>
                        <td>
                            <?php echo $kq[$i]['email'];   ?>
                        </td>
                        <td>
                            <img src="<?php echo $kq[$i]['avatar'];   ?>" alt="" width=150px>
                        </td>
                        <td>
                            <a href="\WEB16305\src\admin\users\edit.php?id=<?php echo $kq[$i]['id']; ?>" class="btn btn-primary">Update</a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger fw-bolder " id="exampleModalLabel">ALERT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body fw-bold">
                                    Are you sure to delete?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">
                                        <a href="delete.php?id=<?php echo $kq[$i]['id']; ?>" class="text-decoration-none text-white" >Delete</a>
                                    </button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
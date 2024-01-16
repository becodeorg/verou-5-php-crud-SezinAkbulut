<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

<h1 class="bg-dark text-center text-light py-2">Goodcard - track your collection of Pokémon cards</h1>

<div class="container">


    <!-- Modal -->
    <div class="modal fade" id="newmodal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding or Updating</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <form id="addform" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <!--name-->
                    <div class="form-group">
                        <label>Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark">
                                 <i class="fa fa-user-alt text-light"></i>
                                 </span>
                            </div>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="off" required="required">
                        </div>
                    </div>

                    <!--email-->
                    <div class="form-group">
                        <label>E-mail:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark">
                                 <i class="fas fa-envelope-open text-light"></i>
                                 </span>
                            </div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your e-mail" autocomplete="off" required="required">
                        </div>
                    </div>

                    <!--mobile-->
                    <div class="form-group">
                        <label>Mobile:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark">
                                 <i class="fas fa-phone text-light"></i>
                                 </span>
                            </div>
                            <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" minlength="10" placeholder="Enter your mobile" autocomplete="off" required="required">
                        </div>
                    </div>

                    <!--photo-->
                    <div class="form-group">
                        <label>Photo:</label>
                        <div class="input-group">
                            <label class="custom-file-label" for="photo">Choose File:</label>
                            <input type="file" class="custom-file-input" name="photo" id="photo">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
             </form>
            </div>
        </div>
    </div>

    <!--input search and button section-->
<div class="row mb-3">
    <div class="col-10">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark">
                    <i class="fa fa-search text-light" aria-hidden="true"></i>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Search...">
        </div>
    </div>
    <div class="col-2">
        <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#newmodal">
            Add New
        </button>
    </div>
</div>


    <!--table-->
    <table class="table" id="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Operations</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Picture 1</th>
            <td>Mark</td>
            <td>mark@gmail.com</td>
            <td>1234567890</td>
            <td>
                <span>Edit</span>
                <span>Profile</span>
                <span>Delete</span>
            </td>
        </tr>
        </tbody>
    </table>

    <!--pagination-->
    <nav aria-label="Page navigation example" id="pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

</div>



<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['name'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
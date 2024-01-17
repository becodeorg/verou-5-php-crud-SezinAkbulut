

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
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <!-- 2 input fields first for adding and next for updating, deleting or viewing profile-->
                    <input type="hidden" name="action" value="adduser">
                    <input type="hidden" name="userId" id="userId" value="">
                </div>
             </form>
            </div>
        </div>
    </div>
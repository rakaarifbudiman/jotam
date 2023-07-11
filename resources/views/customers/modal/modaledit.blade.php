<!-- Modal Upload Evidence Action Plan-->
<div class="modal fade" id="modaleditcustomer-js" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" name="upload-file" id="frm-modaleditcustomer-js" class="form-horizontal"
                enctype="multipart/form-data" id="upload-file">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="entry_at" class="col-sm col-form-label col-form-label-sm">Entry Date</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="date" id="modaledit_entry_at"
                                name="entry_at">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="industries" class="col-sm col-form-label col-form-label-sm">Industries</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="text" id="modaledit_industries"
                                name="industries">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="data_form" class="col-sm col-form-label col-form-label-sm">Data Form</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="text" id="modaledit_data_form"
                                name="data_form">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telephone" class="col-sm col-form-label col-form-label-sm">Telephone</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="text" id="modaledit_telephone"
                                name="telephone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="company" class="col-sm col-form-label col-form-label-sm">Company</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" list="listusers" type="text"
                                id="modaledit_company" name="company">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address" class="col-sm col-form-label col-form-label-sm">Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control form-control-sm" id="modaledit_address" name="address"></textarea>                            
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="first_name" class="col-sm col-form-label col-form-label-sm">First Name</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" list="listusers" type="text"
                                id="modaledit_first_name" name="first_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="last_name" class="col-sm col-form-label col-form-label-sm">Last Name</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" list="listusers" type="text"
                                id="modaledit_last_name" name="last_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="position" class="col-sm col-form-label col-form-label-sm">Position</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" list="listusers" type="text"
                                id="modaledit_position" name="position">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="email"
                                id="modaledit_email" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="handphone" class="col-sm col-form-label col-form-label-sm">Handphone</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="text"
                                id="modaledit_handphone" name="handphone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sales" class="col-sm col-form-label col-form-label-sm">ID Sales</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="text"
                                id="modaledit_sales" name="sales">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="area" class="col-sm col-form-label col-form-label-sm">Area</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="text"
                                id="modaledit_area" name="area">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="produk" class="col-sm col-form-label col-form-label-sm">Produk</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="text"
                                id="modaledit_produk" name="produk">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="desc" class="col-sm col-form-label col-form-label-sm">Desc</label>
                        <div class="col-sm-8">
                            <textarea class="form-control form-control-sm" id="modaledit_desc" name="desc"></textarea>                            
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input" class="col-sm col-form-label col-form-label-sm">Input</label>
                        <div class="col-sm-8">
                            <textarea class="form-control form-control-sm" id="modaledit_input" name="input"></textarea>                            
                        </div>
                    </div>
                    <input class="form-control form-control-sm" type="text" id="modaledit_id"
                        name="modaledit_id" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" class="btn btn-primary" name="saveaction">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete-->
<div class="modal fade" id="modaldeletecustomer-js" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Customer ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" name="upload-file" id="frm-modaldeletecustomer-js" class="form-horizontal"
                enctype="multipart/form-data" id="upload-file">
                @csrf                
                <div class="modal-body">                    
                    <input class="form-control form-control-sm" type="text" id="modaldelete_id"
                        name="modaldelete_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" class="btn btn-danger" name="saveaction">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
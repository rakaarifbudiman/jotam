<!-- Modal Upload Evidence Action Plan-->
<div class="modal fade" id="modalsearchcustomer-js" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" name="upload-file" id="frm-modalsearchcustomer-js" class="form-horizontal"
                enctype="multipart/form-data" id="upload-file" action="{{route('customers.search')}}">
                @csrf
                <div class="modal-body">                    
                    <div class="row mb-3">
                        <label for="searchtext" class="col-sm col-form-label col-form-label-sm">Masukkan Keyword</label>
                        <div class="col-sm-8">
                            <input class="form-control form-control-sm" type="text" id="modalsearch_searchtext"
                                name="searchtext" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                    <button type="submit" class="btn btn-primary" name="saveaction">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
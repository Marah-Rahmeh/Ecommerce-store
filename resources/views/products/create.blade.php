<div class="modal modal-lg fade" id="ModalCreate" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
            <div class="modal-content">

                    {{-- header --}}
                    <div class="modal-header">
                      <h5 class="modal-title">Create Product</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    {{-- body --}}
                    <div class="modal-body col-xs-12 col-sm-12 col-md-12">

                            <div >
                                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="box-body">
                                    <div class="form-group ">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="name"  placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <span class="input-group-addon">$</span>
                                        <input type="number"  min="1" class="form-control" name="price" placeholder="$1,000,000.00">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                    </div>

            </div>


    </div>
</div>

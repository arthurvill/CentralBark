@if (Route::is('staff.service_categories.index'))
    {{-- Creating category --}}
    <div class="modal fade" id="m_service_category" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="m_service_category_title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" id="m_service_category_header">
                    <h6 class="modal-title text-white" id="m_service_category_title">{{-- Modal Title --}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-2">
                    <form class="service_category_form" autocomplete="off">
                        <label class="fw-bold">Category *</label>
                        <div class="input-group input-group-outline mb-3 ">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn float-end btn_add_service_category btn-primary"
                        onclick="c_store('.service_category_form','.service_category_dt', 'staff.service_categories.store')">Submit</button>
                    <button type="button" class="btn float-end btn_update_service_category btn-primary"
                        onclick="c_update('.service_category_form','.service_category_dt', 'staff.service_categories.update', event)">Update</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Creating category --}}
@endif


@if (Route::is('staff.categories.index'))
    {{-- Creating category --}}
    <div class="modal fade" id="m_category" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="m_category_title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" id="m_category_header">
                    <h6 class="modal-title text-white" id="m_category_title">{{-- Modal Title --}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-2">
                    <form class="category_form" autocomplete="off">
                        <label class="fw-bold">Category *</label>
                        <div class="input-group input-group-outline mb-3 ">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn float-end btn_add_category btn-primary"
                        onclick="c_store('.category_form','.category_dt', 'staff.categories.store')">Submit</button>
                    <button type="button" class="btn float-end btn_update_category btn-primary"
                        onclick="c_update('.category_form','.category_dt', 'staff.categories.update', event)">Update</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Creating category --}}
@endif

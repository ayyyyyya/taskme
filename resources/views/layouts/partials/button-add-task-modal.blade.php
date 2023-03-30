{{-- Button Add Task --}}
<div class="btn-fixed-bottom-right position-fixed" style="bottom: 80px; right: 40px;">
    <button class="btn primary-btn btn-hover rounded-full fs-4" data-bs-toggle="modal" data-bs-target="#add-task"><i
            class="lni lni-plus"></i></button>
</div>


<!-- Modal Add Task-->
<div class="modal fade" id="add-task" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="input-style-1">
                            <label for="title" class="form-label fw-bold">Title</label>
                            <input type="text" id="title" placeholder="Example : Mathematics-Calculus">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-style-1">
                            <label for="short_description" class="form-label fw-bold">Short Description</label>
                            <textarea class="form-control" id="short_description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-style-1">
                            <label for="deadline" class="form-label fw-bold">Deadline</label>
                            <input type="date" class="form-control" id="deadline">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-style-1">
                            <label for="file" class="form-label"><b>File</b> <small
                                    class="text=secondary">(Optional)</small></label>
                            <input class="form-control form-control-sm" id="file" type="file">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

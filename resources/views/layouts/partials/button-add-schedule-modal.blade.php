{{-- Button Add Task --}}
<div class="btn-fixed-bottom-right position-fixed" style="bottom: 80px; right: 40px;">
    <button class="btn btn-primary btn-hover rounded-full fs-4" data-bs-toggle="modal" data-bs-target="#add-task"><i
            class="lni lni-plus"></i></button>
</div>


<!-- Modal Add Task-->
<div class="modal fade" id="add-task" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Schedule</h1>
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
                            <label for="date" class="form-label fw-bold">Date</label>
                            <input type="date" id="date">
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

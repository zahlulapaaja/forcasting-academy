<div class="card border-transparent" data-bs-theme="light" style="background-color: #1C325E;">
    <div class="card-body d-flex ps-xl-15">
        <div class="m-0">
            <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                <span class="me-2">You have got
                    <span class="position-relative d-inline-block text-danger">
                        <a href="#" class="text-danger opacity-75-hover">{{ number_format($bonusPoints) }} bonus</a>
                        <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                    </span>
                </span>points.
                <br />Feel free to use them in your lessons
            </div>
            <div class="mb-3">
                <a href="#" class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Get Reward</a>
                <a href="#" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">How to</a>
            </div>
        </div>
        <img src="{{ asset('assets/media/illustrations/sigma-1/17-dark.png') }}" class="position-absolute me-3 bottom-0 end-0 h-200px" alt="" />
    </div>
</div>

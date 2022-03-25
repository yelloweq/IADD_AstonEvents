
@include('layouts.basic')

    <header class="gradient pt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 text-center">
                    <h2 class="text-white">Book events with one click!</h2>
                    <p class="fs-4 fw-bold text-white">
                        Register an account and checkout our catalogue of upcoming events.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('storage/booking.svg') }}" width="700"
                        class="mx-auto d-block">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,160L26.7,144C53.3,128,107,96,160,90.7C213.3,85,267,107,320,128C373.3,149,427,171,480,149.3C533.3,128,587,64,640,80C693.3,96,747,192,800,202.7C853.3,213,907,139,960,101.3C1013.3,64,1067,64,1120,85.3C1173.3,107,1227,149,1280,160C1333.3,171,1387,149,1413,138.7L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
            </path>
        </svg>
    </header>


<section>
    <div class="site-section">
        <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Выберите одного из наших специалистов</h3>
            <p class="mb-5 lead">Здесь вам предоставляются вам на выбор лучшие наши специалисты в этой области услуг</p>
            </div>
        </div>
        <div class="row hair-style">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="{{ route('barbers.index1') }}" class="place">
                <img src="{{ asset('/images/Котенок.jpg') }}" alt="Image placeholder">
                <h2>Barber Pit</h2>
                <span>стоимость услуг от $50.00<br>
                время работы: с 9.00 до 18.00</span>
            </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="{{ route('barbers.index2') }}" class="place">
                <img src="{{ asset('/images/Котикс.png') }}" alt="Image placeholder">
                <h2>Barber Max</h2>
                <span>стоимость услуг от $50.00<br>
                время работы: с 9.00 до 18.00</span>
            </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="{{ route('barbers.index3') }}" class="place">
                <img src="{{ asset('/images/Котюня.jpg') }}" alt="Image placeholder">
                <h2>Barber Peter</h2>
                <span>стоимость услуг от $50.00<br>
                время работы: с 9.00 до 18.00</span>

            </a>
            </div>

        </div>
        </div>
    </div>
    {{-- @endsection --}}
    </section>


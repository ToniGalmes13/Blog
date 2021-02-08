@extends('/layout/inicio')

<h1>Comprar</h1>

@section('container')


    <h3>Comprar</h3>

    <div class="container">
        <!-- <h2>Form Validation</h2> -->

        <div class="row">
          <div class="col-2"><img src="" alt="image"></div>
          <div class="col-8 p-3">

            <!-- <form action="/action_page.php" class="was-validated"> -->
            <form class="" action="{{route('comprado')}}" method="POST">
              @csrf
              <label for="">Nom:</label>
              <div class="row">
                <div class="col-7">
                  <div class="form-group">
                    <i class="fa fa-user-o"></i>
                    <input id="nom" type="text" class="form-control custom-input" name="nom" value=""
                      placeholder="Escriu el teu nom" required autofocus style="border-radius: 30px;">
                  </div>
                </div>
              </div>
              <label for="">Email:</label>
              <div class="row">

                <div class="col-7">
                  <div class="form-group">

                    <i class="fa fa-at"></i>
                    <input id="email" type="email" class="form-control custom-input" name="email" value=""
                      placeholder="Escriu el teu Email" required autofocus style="border-radius: 30px;">
                  </div>
                  <div class="form-group">
                    <input id="llibre" type="input" class="form-control custom-input"
                        name="llibre" value="Llibre1" hidden
                        autofocus style="border-radius: 30px;">
                </div>
                </div>
              </div>
            
              <button type="submit" class="btn btn-success">Comprar</button>
            </form>

          </div>

          <div class="col-2"></div>
        </div>
      </div>


@endsection
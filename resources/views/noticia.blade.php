@extends('/layout/inicio')

<h1>Nueva Noticia</h1>

@section('container')


    <h3>Nueva Noticia</h3>

    <div class="container">
        <!-- <h2>Form Validation</h2> -->

        <div class="row">
          <div class="col-2"></div>
          <div class="col-8 p-3">

            <!-- <form action="/action_page.php" class="was-validated"> -->
            <form class="" action="{{route('noticia')}}" method="POST">
              @csrf
              <label for="">Títol:</label>
              <div class="row">
                <div class="col-7">
                  <div class="form-group">
                    {{-- <i class="fa fa-user-o"></i> --}}
                    <input id="titol" type="text" class="form-control custom-input" name="titulo" value=""
                      placeholder="Títol de la noticia" required autofocus style="border-radius: 30px;">
                  </div>
                </div>
              </div>
              
            
              <label for="pwd">Noticia:</label>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">

                    {{-- <i class="fa fa-comment"></i> --}}
                    <textarea type="text" class="form-control textarea" id="noticia"
                      placeholder="Escriu la noticia..." name="noticia" required></textarea>

                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success">Publica</button>
            </form>

          </div>

          <div class="col-2"></div>
        </div>
      </div>



@endsection
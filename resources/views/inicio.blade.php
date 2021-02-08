@extends('/layout/inicio')

<h1>Blog</h1>

@section('container')


    <h3>Noticias</h3>

    <div class="container">
        <div class="row">
            <div class="col-8">

                @foreach ($comentarios as $noticia)
                    <div class="row">

                        <h2>{{ $noticia->titulo }}</h2>

                       

                    </div>
                    <div class="row">
                        <p>{{ $noticia->noticia }}</p>
                    </div>


                @endforeach

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam totam alias et perferendis eos fugiat!
                    Cupiditate odio iste deleniti laborum porro esse recusandae amet, aliquam perspiciatis, ducimus saepe.
                    Provident, sint? Id illo hic ab dolorem nisi vero, optio nemo cum maiores? Eligendi obcaecati voluptatum
                    aliquam exercitationem qui. Sequi pariatur ipsa at minima optio harum reprehenderit aliquam ab in qui
                    assumenda quo beatae voluptates est possimus quidem iure libero blanditiis natus obcaecati, consequuntur
                    ea. Unde repudiandae velit necessitatibus ut, doloremque ea aliquid porro eligendi, culpa, et at
                    excepturi? Doloribus quae sit eos dicta iure inventore aliquam eveniet reiciendis dolorum error ratione,
                    ducimus commodi saepe, nostrum perspiciatis consectetur deserunt voluptates, sed corrupti sequi fuga.
                    Quaerat aut facere id animi harum quod voluptatum deserunt optio, consectetur totam molestiae laudantium
                    nobis incidunt debitis porro! Numquam ad at ut nesciunt nostrum in animi, nihil eos quidem earum soluta
                    cum ipsam mollitia. Architecto aut cupiditate a impedit accusamus harum ipsam sed reiciendis, voluptatum
                    veniam, deserunt quas saepe cum perferendis rem omnis quasi est nesciunt accusantium et? Itaque dolores
                    provident voluptas veritatis, odit asperiores nesciunt exercitationem nostrum excepturi incidunt quam ut
                    molestiae quibusdam velit perspiciatis officia, quas voluptate odio quasi labore tempora officiis.
                    Debitis nobis qui fugit!</p>
            </div>



            <div class="col-4">
                <img src="/images/ret1.jpg" class="img-fluid" alt="image">
            </div>
        </div>










    </div>


@endsection

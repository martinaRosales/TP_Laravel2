@extends('layout.layout')

@section('title')
Video
@endsection

@section('contenido')
<div class="row justify-content-center">
    <h3 class="text-center">Video</h3>
    <div class="d-flex justify-content-center my-2">
        <!-- Visible solo en pantallas mobile -->
        <a type="button" class="btn btn-warning d-flex justify-content-center d-sm-block d-md-none" href="https://www.youtube.com/watch?v=IBtz0mmUpc4" target="_blank">Ver aquí</a>
        <!-- Visible solo en pantallas md/lg -->
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/IBtz0mmUpc4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="d-none d-md-block"></iframe>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-6 col-12 p-md-5 p-3 border border-solid rounded border-warning">
        <h4>Invitacion</h4>
        <div class="mt-3">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe accusantium hic dolore. Aperiam animi, deleniti soluta autem recusandae quaerat obcaecati consectetur laborum accusantium accusamus aliquid beatae voluptates, consequuntur facilis dolores. Quia accusamus illo, fuga hic veritatis molestias dolores minima consectetur maiores nesciunt debitis illum voluptatibus nam repellendus corrupti totam omnis, quis dolorum nemo. Possimus neque sit dolores ex iste voluptas nobis perspiciatis non dicta aliquid blanditiis quas eveniet ipsum, necessitatibus sed laboriosam voluptatum. Quos pariatur dignissimos possimus id maiores sequi ab, suscipit ratione voluptates ullam sed animi itaque expedita cumque quisquam ipsum. Quisquam atque voluptatibus repellat non dolorem nobis ex!
            </p>
        </div>
    </div>
    <div class="col-md-6 col-12 p-md-2 p-3 d-flex flex-wrap">
        <div class="border border-solid rounded p-md-3 border-info">
            <h5>Bases</h5>
            <div class="mt-3">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores rerum rem aspernatur fuga. Velit labore obcaecati natus accusamus excepturi dolore, reiciendis illum perferendis magnam vitae consequatur sint vero eos placeat?
                </p>
            </div>
        </div>
        <div class="border border-solid mt-3 rounded p-md-3 border-success">
            <h5>Flyer</h5>
            <div class="mt-3">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo quos facilis nisi ullam? Deserunt neque corporis nostrum suscipit dolorem libero accusantium nemo. Reprehenderit optio, voluptates ipsum veniam corrupti accusantium rerum omnis quod velit dolore distinctio ex debitis accusamus laborum delectus?
                </p>
            </div>

        </div>
    </div>
</div>
@endsection

<div class="container">

    <div class="panel panel-primary">


      <div class="panel-body">



        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">asdasdasd</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

        @endif

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


            <div class="row">


                <div class="col-md-12">

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div>
                          <label for="profile_image">Qual a foto principal da Campanha?*</label>
                          <br>
                          <label for="files" class="btn">Select Image</label>
                          <input id="files" style="visibility:hidden;" type="file">
                          <p id="teste"></p>
                    </div>
                </div>



            </div>



      </div>

    </div>

</div>

<script>
    $("#files").change(function() {
  filename = this.files[0].name
  document.getElementById("teste").innerHTML = "Sucesso!";
});
</script>


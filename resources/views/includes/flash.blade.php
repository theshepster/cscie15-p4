@if(Session::get('flash_message') != null)
    <br><br><br><br><br>
    <div class="row" style="z-index: 100; position: relative">
        <div class='alert alert-warning text-center'>
            {{ Session::get('flash_message') }}
        </div>
    </div>
@endif
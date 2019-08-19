<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
                <i class="material-icons">{{$icono}}</i>
            </div>
            <h4 class="card-title">{{$header}}</h4>
        </div>
        <div class="card-body">
            @include('shared._errors')
            {{$content}}
        </div>
    </div>
</div>
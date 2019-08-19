@if(session('info'))
    <div class="alert alert-success alert-with-icon" data-notify="container">
        <i class="material-icons" data-notify="icon">notifications</i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span data-notify="message">{{ session('info') }}</span>
    </div>
@endif
@if(session('warning'))
    <div class="alert alert-warning alert-with-icon" data-notify="container">
        <i class="material-icons" data-notify="icon">notifications</i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span data-notify="message">{{ session('warning') }}</span>
    </div>
@endif
@if(session('alert'))
    <div class="alert alert-danger alert-with-icon" data-notify="container">
        <i class="material-icons" data-notify="icon">notifications</i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span data-notify="message"> {{ session('alert') }}</span>
    </div>
@endif


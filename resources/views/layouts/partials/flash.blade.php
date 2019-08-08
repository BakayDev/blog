<div class="col-md-8 col-md-offset-2" style="position: fixed; z-index: 100; margin-top: 80px">

    @if (session('status'))
        <div class="alert alert-info fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="ion-ios-close-empty"></i></button>
            <i class="icon-chat"></i> <strong>  {{ session('status') }}</strong>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="ion-ios-close-empty"></i></button>
            <i class="icon-happy"></i> <strong>   {{ session('success') }}</strong>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="ion-ios-close-empty"></i></button>
            <i class="icon-genius"></i> <strong>  {{ session('error') }}</strong>
        </div>
    @endif

    @if (session('info'))
        <div class="alert alert-info fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="ion-ios-close-empty"></i></button>
            <i class="icon-chat"></i> <strong>  {{ session('info') }}</strong>
        </div>
    @endif

</div>
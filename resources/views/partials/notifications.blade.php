@if(Session::has('warning'))
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-warning hidden margin-top-70">
                    @if(Session::has('flash_message_important')))
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    @endif
                    <span class="">{{ Session::get('warning') }}</span>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has('success'))
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-success hidden margin-top-70">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span class="">{{ Session::get('success') }}</span>
                </div>
            </div>
        </div>
    </div>
@endif

@if(Session::has('error'))
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-danger hidden margin-top-70">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span class="">{{ Session::get('error') }}</span>
                </div>
            </div>
        </div>
    </div>
@endif
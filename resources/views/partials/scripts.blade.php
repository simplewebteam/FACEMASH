<!-- Scripts Placed at the end of the document so the pages load faster -->
<!--================================================== -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/jquery-1.11.3.min.js') }}">\x3C/script<\/script>');</script>
<script>window.Modernizr || document.write('<script src="{{ asset('js/modernizr-2.6.2.min.js') }}">\x3C/script<\/script>');</script>
<script>
    $(document).ready(function() {
//        $("#inputimage").fileinput({
//            showCaption: false
//        });
        $("#images").filestyle({
            input: false,
            buttonText: "UPLOAD"
        });
    });

    $(document).ready(function() {
        $('.pickoption').click(function(event){
            event.preventDefault();
            $(this).parents('form:first').submit();
            $('#left').toggleClass('bounceInLeft bounceOutRight');
//            $(this).find('img').removeClass('bounceInLeft bounceInRight').addClass('hinge');
            $('#right').toggleClass('bounceInRight bounceOutLeft');
        });
    });
</script>
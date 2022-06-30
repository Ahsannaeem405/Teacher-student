<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-first-col">
                <img src="{{url('/images/logo-main.svg')}}" alt="Image"/>
                <p>Virtual teaching is a marketplace filled with qualified teachers that will provide excellent teaching resources. We are happy to work with you in your learning journey.</p>
                <h4 class="m_right">Follow Us:</h4>
                <ul class="footer-icon">
                    <li><i class="fa-brands fa-linkedin-in"></i></li>
                    <li><i class="fa-brands fa-facebook-f"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-instagram"></i></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4>Product</h4>
                <ul class="footer-link">

                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="{{ url('/features') }}">Features</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="{{ url('/price') }}">Pricing</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="{{ url('/sign-in') }}">Log in</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4>Company</h4>
                <ul class="footer-link">
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="{{ url('/about') }}">About Us</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="{{ url('/blog') }}">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4 forth-col">
                <h4>Help</h4>
                <ul class="footer-link">
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="{{ url('/contact-us') }}">Contact Us</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="{{ url('/term') }}">Terms Of Service</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="{{ url('/policy') }}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-float-right">
        <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins)   Order is important -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


@if(\Request::route()->getName() != 'student.chat')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endif
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html

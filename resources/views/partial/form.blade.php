<!-- The form content -->
<div class="blur-background">
    <!-- Form message used to send the message vai email -->

    <div class="container">
        <div class="form-description">
            <h5 class="heading" style="text-decoration:underline; text-align:center; text-decoration-color:#2F65AD;">@lang('form-lan.heading1')</h5>
            <p class="text-center mt-4">@lang('form-lan.paragraph')</p>
        </div>
        <div class="row flex-direction">
            <div class="col-sm-12 col-lg-8">
                <form class="form-message" action="{{url('/email')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="fullName" id="fullName" class="form-control" placeholder="@lang('form-lan.name')" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="@lang('form-lan.mail')" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" name="message" id="message" class="form-control" placeholder="@lang('form-lan.message')" required></textarea>
                    </div>
                    <div class="form-group">
                        <!-- Hiddent token for recaptcha -->
                        <input type="hidden" name="token" id="token">
                    </div>
                    <button class="btn-message" type="submit">@lang('form-lan.btn-message')</button>
                </form>
            </div>
            <!-- info of company -->
            <div class="col-sm-12 col-lg-4">
                <form class="form-info">
                    <label for="comEmail">@lang('form-lan.label-info')</label><br>
                    <input class="input" type="email" name="comEmail" id="comEmail" value="info@tranich.com" readonly><br>
                    <label for="comNumber">@lang('form-lan.label-phone')</label><br>
                    <input class="input" type="text" name="comNumber" id="comNumber" value="(+855) 12 646 517/ 96 88 11119" readonly><br>
                    <label for="comAddress">@lang('form-lan.label-address')</label><br>
                    <input class="input" id="comAddress" name="comAddress" type="text" value="Phnom pench, Cambodia" readonly><br>
                    <label for="">@lang('form-lan.label-socail')</label><br>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6LeAtFgaAAAAAH_Xp8SJ2ZLSRThVcaTpu5hiZmpx"></script>
<!-- google recaptcha script -->
<script>
    grecaptcha.ready(function() {
        // replace outside key get from google recaptcha admin page (v3)
        grecaptcha.execute('6LeAtFgaAAAAAH_Xp8SJ2ZLSRThVcaTpu5hiZmpx', {
            action: 'email'
        }).then(function(token) {
            // Store token for backend validation 
            $('#token').val(token);
        })
    });
</script>
<div>
    <div style="display: none" id="captcha_src">{!! $captcha !!}</div>

    <script>

        document.addEventListener('livewire:load', function () {

            let component = @this;
            console.log('livewire:load');

            $('.captcha img').attr("src", $('#captcha_src').html());

            window.addEventListener('reloadCaptcha', event => {
                $('.captcha img').attr("src", $('#captcha_src').html());
            });

        })

    </script>

</div>

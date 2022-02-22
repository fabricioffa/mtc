<div>
    <div style="display: none" id="captcha_src">{!! $captcha !!}</div>

    <script>

        const setImgSrc = () => {
            document.querySelector('.captcha img')
                .setAttribute('src', document.querySelector('#captcha_src').innerText );
        };

        document.addEventListener('livewire:load', function reloadCaptcha () {
            setImgSrc();
            window.addEventListener('reloadCaptcha', setImgSrc);
        });

    </script>

</div>


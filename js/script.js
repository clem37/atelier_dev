jQuery(document).ready(function ($) {

    if ($('#jssor_1')[0]) {
        var jssor_1_options = {
            $AutoPlay: true,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1920);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*responsive code end*/
    }




    $('#form-create-message').submit(function (event) {
        event.preventDefault();

        var form = $(this);
        var button = form.find('*[type="submit"]');

        var nom = form.find('input[name="nom"]').val();
        var prenom = form.find('input[name="prenom"]').val();
        var mail = form.find('input[name="mail"]').val();
        var message = form.find('textarea[name="message"]').val();

        button.prop('disabled', true);

        $.ajax({
            method: "POST",
            url: "envoyer_mail.php",
            data: {nom: nom, prenom: prenom, mail: mail, message: message},
        }).done(function (html) {
            button.prop('disabled', false);

        });

    });

});

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}


        <footer class="footer container">
        <p>Faqja e punuar nga studentet e shkolles <strong> Probit Academy </strong></p>
        </footer>

<script src = "js/jquery-3.6.1.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
    $().ready(function() {
        $("#login").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                fjalekalimi: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                fjalekalimi: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: {
                    required: "Please provide an email",
                    email: "Please enter a valid email address"
                }
            }

        });
        $("#anetari").validate({
            rules: {
                emri: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                mbiemri: {
                    required: true,
                    minlength: 3,
                    lettersonly: true
                },
                telefoni: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                fjalekalimi: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                emri: {
                    required: "Ju lutem shenoni emrin",
                    minlength: "Emri i juaj duhet te kete se paku tre karaktere",
                    lettersonly: "Emri nuk duhet te kete numra "
                },
                mbiemri: {
                    required: "Ju lutem shenoni mbiemrin",
                    minlength: "Mbiemri i juaj duhet te kete se paku tre karaktere",
                    lettersonly: "Mbiemri nuk duhet te kete numra "
                },
                telefoni: {
                    required: "Ju lutem shenoni telefonin"
                },
                email: {
                    required: "Ju lutem shenoni emailin",
                    email: "Ju lutem shenoni emaili adres valide"
                },
                fjalekalimi: {
                    required: "Ju lutem shenoni fjalekalimin",
                    minlength: "Fjalekalimi i juaj duhet te kete se paku gjashte karaktere"
                }

            }

        });
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
        }, "Letters only please");
    });
    $('.slider').slick({
        dots: true,
        // infinite: false,
        //  speed: 300,
        nextArrow: false,
        prevArrow: false,
        slidesToShow: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>

        <script type="text/javascript">
            $("#message").fadeOut(2000);
        </script>
    </body>
</html>
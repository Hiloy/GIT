<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Foody/template/common/footer.twig */
class __TwigTemplate_f2c37f8383f62192eb530003362b0b71014427cfb2e1a9243be6ad90e2bb5e8d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-secondary mt-5 pt-5\">
        ";
        // line 56
        echo "        <div class=\"row border-top mx-xl-5 py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
            <div class=\"col-md-6 px-xl-0\">
                <p class=\"mb-md-0 text-center text-md-left text-secondary\">
                    &copy; 2024 FoodyM. Усі права захищено.
                </p>
            </div>
            ";
        // line 65
        echo "        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


    <!-- JavaScript Libraries -->
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
    <script src=\"catalog/view/theme//foody/assets/lib/easing/easing.min.js\"></script>
    <script src=\"catalog/view/theme//foody/assets/lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Contact Javascript File -->
    <script src=\"catalog/view/theme//foody/assets/mail/jqBootstrapValidation.min.js\"></script>
    <script src=\"catalog/view/theme//foody/assets/mail/contact.js\"></script>

    <script>
        const btnClose = '";
        // line 84
        echo ($context["text_btn_close"] ?? null);
        echo "'
    </script>

    <div class=\"alert alert-success\" id=\"wishlistAlert\" role=\"alert\" style=\"display: none;\">
    
    </div>



    <!-- Template Javascript -->
    <script src=\"catalog/view/theme//foody/assets/js/common.js\"></script>
    <script src=\"catalog/view/theme//foody/assets/js/main.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "Foody/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 84,  49 => 65,  41 => 56,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-secondary mt-5 pt-5\">
        {# <div class=\"row px-xl-5 pt-5\">
            <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
                <h5 class=\"text-secondary text-uppercase mb-4\">Get In Touch</h5>
                <p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary mr-3\"></i>foodym@gmail.com</p>
                <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary mr-3\"></i>+380955100700</p>
            </div>
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-4 mb-5\">
                        <h5 class=\"text-secondary text-uppercase mb-4\">Quick Shop</h5>
                        <div class=\"d-flex flex-column justify-content-start\">
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                            <a class=\"text-secondary\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-5\">
                        <h5 class=\"text-secondary text-uppercase mb-4\">My Account</h5>
                        <div class=\"d-flex flex-column justify-content-start\">
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                            <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                            <a class=\"text-secondary\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-5\">
                        <h5 class=\"text-secondary text-uppercase mb-4\">Newsletter</h5>
                        <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                        <form action=\"\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Your Email Address\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-primary\">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class=\"text-secondary text-uppercase mt-4 mb-3\">Follow Us</h6>
                        <div class=\"d-flex\">
                            <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            <a class=\"btn btn-primary btn-square\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> #}
        <div class=\"row border-top mx-xl-5 py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
            <div class=\"col-md-6 px-xl-0\">
                <p class=\"mb-md-0 text-center text-md-left text-secondary\">
                    &copy; 2024 FoodyM. Усі права захищено.
                </p>
            </div>
            {# <div class=\"col-md-6 px-xl-0 text-center text-md-right\">
                <img class=\"img-fluid\" src=\"catalog/view/theme/foody/assets/img/payments.png\" alt=\"\">
            </div> #}
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


    <!-- JavaScript Libraries -->
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
    <script src=\"catalog/view/theme//foody/assets/lib/easing/easing.min.js\"></script>
    <script src=\"catalog/view/theme//foody/assets/lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Contact Javascript File -->
    <script src=\"catalog/view/theme//foody/assets/mail/jqBootstrapValidation.min.js\"></script>
    <script src=\"catalog/view/theme//foody/assets/mail/contact.js\"></script>

    <script>
        const btnClose = '{{ text_btn_close }}'
    </script>

    <div class=\"alert alert-success\" id=\"wishlistAlert\" role=\"alert\" style=\"display: none;\">
    
    </div>



    <!-- Template Javascript -->
    <script src=\"catalog/view/theme//foody/assets/js/common.js\"></script>
    <script src=\"catalog/view/theme//foody/assets/js/main.js\"></script>
</body>

</html>", "Foody/template/common/footer.twig", "");
    }
}

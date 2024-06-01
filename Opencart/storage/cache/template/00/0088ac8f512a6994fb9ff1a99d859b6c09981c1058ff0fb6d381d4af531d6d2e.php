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

/* Foody/template/common/home.twig */
class __TwigTemplate_fd787690af8edc12867baea2bebcfb61de0016508d99fbb3658e79e613d755ae extends \Twig\Template
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
        echo "    ";
        echo ($context["header"] ?? null);
        echo "

    ";
        // line 3
        echo ($context["content_top"] ?? null);
        echo "

    ";
        // line 5
        echo ($context["category"] ?? null);
        echo "




   


    <!-- Products Start -->
    <div class=\"container-fluid pt-5 pb-3\">
        <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Featured Products</span></h2>
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-1.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-2.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-3.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-4.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-5.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-6.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-7.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-8.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class=\"container-fluid pt-5 pb-3\">
        <div class=\"row px-xl-5\">
            <div class=\"col-md-6\">
                <div class=\"product-offer mb-30\" style=\"height: 300px;\">
                    <img class=\"img-fluid\" src=\"catalog/view/theme/foody/assets/img/offer-1.jpg\" alt=\"\">
                    <div class=\"offer-text\">
                        <h6 class=\"text-white text-uppercase\">Save 20%</h6>
                        <h3 class=\"text-white mb-3\">Special Offer</h3>
                        <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"product-offer mb-30\" style=\"height: 300px;\">
                    <img class=\"img-fluid\" src=\"catalog/view/theme/foody/assets/img/offer-2.jpg\" alt=\"\">
                    <div class=\"offer-text\">
                        <h6 class=\"text-white text-uppercase\">Save 20%</h6>
                        <h3 class=\"text-white mb-3\">Special Offer</h3>
                        <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class=\"container-fluid pt-5 pb-3\">
        <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Recent Products</span></h2>
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-1.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-2.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-3.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-4.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-5.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-6.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-7.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-8.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"owl-carousel vendor-carousel\">
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-4.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-5.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-6.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-7.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-8.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

 ";
        // line 526
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "Foody/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 526,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {{ header }}

    {{ content_top }}

    {{ category }}




   


    <!-- Products Start -->
    <div class=\"container-fluid pt-5 pb-3\">
        <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Featured Products</span></h2>
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-1.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-2.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-3.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-4.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-5.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-6.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-7.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-8.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class=\"container-fluid pt-5 pb-3\">
        <div class=\"row px-xl-5\">
            <div class=\"col-md-6\">
                <div class=\"product-offer mb-30\" style=\"height: 300px;\">
                    <img class=\"img-fluid\" src=\"catalog/view/theme/foody/assets/img/offer-1.jpg\" alt=\"\">
                    <div class=\"offer-text\">
                        <h6 class=\"text-white text-uppercase\">Save 20%</h6>
                        <h3 class=\"text-white mb-3\">Special Offer</h3>
                        <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"product-offer mb-30\" style=\"height: 300px;\">
                    <img class=\"img-fluid\" src=\"catalog/view/theme/foody/assets/img/offer-2.jpg\" alt=\"\">
                    <div class=\"offer-text\">
                        <h6 class=\"text-white text-uppercase\">Save 20%</h6>
                        <h3 class=\"text-white mb-3\">Special Offer</h3>
                        <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class=\"container-fluid pt-5 pb-3\">
        <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Recent Products</span></h2>
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-1.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-2.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-3.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-4.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-5.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-6.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-7.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
                <div class=\"product-item bg-light mb-4\">
                    <div class=\"product-img position-relative overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-8.jpg\" alt=\"\">
                        <div class=\"product-action\">
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                        </div>
                    </div>
                    <div class=\"text-center py-4\">
                        <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                        <div class=\"d-flex align-items-center justify-content-center mt-2\">
                            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                        </div>
                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"fa fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small class=\"far fa-star text-primary mr-1\"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"owl-carousel vendor-carousel\">
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-4.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-5.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-6.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-7.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-8.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

 {{footer}}

", "Foody/template/common/home.twig", "");
    }
}

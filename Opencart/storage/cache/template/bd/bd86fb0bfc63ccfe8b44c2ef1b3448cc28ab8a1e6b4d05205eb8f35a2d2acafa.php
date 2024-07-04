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

/* Foody/template/product/product.twig */
class __TwigTemplate_3239e3d9a4d476f1ba037cd5990c39b301bbaa4689eeeb2f4934e255471f5549 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<div id=\"product-product\">

    <!-- Breadcrumb Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <nav class=\"breadcrumb bg-light mb-30\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 11)) {
                // line 12
                echo "                            <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                echo "</span>
                        ";
            } else {
                // line 14
                echo "                            <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
                echo "</a>
                        ";
            }
            // line 16
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    ";
        // line 23
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 24
            echo "        ";
            $context["class"] = "col-lg-7";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context["class"] = "col-lg-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    <div class=\"container-fluid pb-5\">
        <div class=\"row px-xl-5\">

            ";
        // line 32
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 33
            echo "
                ";
            // line 34
            if (($context["thumb"] ?? null)) {
                // line 35
                echo "                    ";
                $context["gallery"] = twig_array_merge([0 => ["popup" => ($context["thumb"] ?? null), "thumb" => ($context["thumb"] ?? null)]], ($context["images"] ?? null));
                // line 36
                echo "                ";
            } else {
                // line 37
                echo "                    ";
                $context["gallery"] = ($context["images"] ?? null);
                // line 38
                echo "                ";
            }
            // line 39
            echo "
                <div class=\"col-lg-5 mb-30\">
                    <div id=\"product-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner bg-light\">
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 44
                echo "                                <div class=\"carousel-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 44) == 0)) {
                    echo "active";
                }
                echo "\">
                                    <img class=\"w-100 h-100\" src=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 45);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                                </div>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                        </div>
                        ";
            // line 49
            if ((twig_length_filter($this->env, ($context["gallery"] ?? null)) > 1)) {
                // line 50
                echo "                            <a class=\"carousel-control-prev\" href=\"#product-carousel\" data-slide=\"prev\">
                                <i class=\"fa fa-2x fa-angle-left text-dark\"></i>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#product-carousel\" data-slide=\"next\">
                                <i class=\"fa fa-2x fa-angle-right text-dark\"></i>
                            </a>
                        ";
            }
            // line 57
            echo "                    </div>
                </div>
            ";
        }
        // line 60
        echo "
            <div class=\"";
        // line 61
        echo ($context["class"] ?? null);
        echo " h-auto mb-30\" id=\"product\">
                ";
        // line 62
        echo ($context["content_top"] ?? null);
        echo "
                <div class=\"h-100 bg-light p-30\">
                    <h3>";
        // line 64
        echo ($context["heading_title"] ?? null);
        echo "</h3>

                    ";
        // line 66
        if (($context["review_status"] ?? null)) {
            // line 67
            echo "                        <div class=\"d-flex mb-3\">
                            <div class=\"rating text-primary mr-2\">
                                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 70
                echo "                                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 71
                    echo "                                        <small class=\"far fa-star\"></small>
                                    ";
                } else {
                    // line 73
                    echo "                                        <small class=\"fas fa-star\"></small>
                                    ";
                }
                // line 75
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </div><!-- /.rating text-primary mr-2 -->
                            <small class=\"pt-1\">(";
            // line 77
            echo ($context["reviews"] ?? null);
            echo ")</small>
                        </div><!-- ./d-flex mb-3 -->
                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if (($context["price"] ?? null)) {
            // line 82
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 83
                echo "                            <h3 class=\"font-weight-semi-bold mb-4\">";
                echo ($context["price"] ?? null);
                echo "</h3>
                        ";
            } else {
                // line 85
                echo "                            <h3 class=\"font-weight-semi-bold mb-4\">
                                ";
                // line 86
                echo ($context["special"] ?? null);
                echo "
                                <small class=\"text-muted ml-2\">
                                    <del>";
                // line 88
                echo ($context["price"] ?? null);
                echo "</del>
                                </small>
                            </h3>
                        ";
            }
            // line 92
            echo "                    ";
        }
        // line 93
        echo "
                    <p><strong>";
        // line 94
        echo ($context["text_stock"] ?? null);
        echo "</strong> ";
        echo ($context["stock"] ?? null);
        echo "</p>

                    ";
        // line 96
        if (($context["options"] ?? null)) {
            // line 97
            echo "
                        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 99
                echo "
                            ";
                // line 100
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 100) == "radio")) {
                    // line 101
                    echo "                                <div class=\"d-flex mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 101)) {
                        echo " required-option ";
                    }
                    echo "\"
                                     id=\"input-option";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 102);
                    echo "\">
                                    <strong class=\"text-dark mr-3\">Вага:</strong>

                                    ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 105));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 106
                        echo "                                        <div class=\"custom-control custom-radio custom-control-inline\">
                                            <input type=\"radio\" class=\"custom-control-input\"
                                                   id=\"option-";
                        // line 108
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108);
                        echo "\"
                                                   name=\"option[";
                        // line 109
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 109);
                        echo "]\"
                                                   value=\"";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 110);
                        echo "\">
                                            <label class=\"custom-control-label\"
                                                   for=\"option-";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112);
                        echo "\">
                                                ";
                        // line 113
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 113);
                        echo "
                                                ";
                        // line 114
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 114)) {
                            // line 115
                            echo "                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 115);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 115);
                            echo ")
                                                ";
                        }
                        // line 117
                        echo "                                            </label>
                                        </div>
                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "
                                </div>
                            ";
                }
                // line 123
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "
                    ";
        }
        // line 127
        echo "
                    <div class=\"d-flex align-items-center mb-4 pt-2\">
                        <div class=\"input-group quantity mr-3\" style=\"width: 130px;\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-minus\">
                                    <i class=\"fa fa-minus\"></i>
                                </button>
                            </div>
                            <input type=\"text\" name=\"quantity\" class=\"form-control bg-secondary border-0 text-center\" value=\"";
        // line 135
        echo ($context["minimum"] ?? null);
        echo "\" id=\"input-quantity\">
                            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 136
        echo ($context["product_id"] ?? null);
        echo "\" />
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-plus\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                        <button type=\"button\" class=\"btn btn-primary px-3\" id=\"button-cart\" data-loading-text=\"";
        // line 143
        echo ($context["text_loading"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart mr-1\"></i> ";
        echo ($context["button_cart"] ?? null);
        echo "
                        </button>
                    </div>

                    ";
        // line 147
        if ((($context["minimum"] ?? null) > 1)) {
            // line 148
            echo "                        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                    ";
        }
        // line 150
        echo "
                </div><!-- ./h-100 bg-light p-30 -->
                ";
        // line 152
        echo ($context["content_bottom"] ?? null);
        echo "
            </div><!-- ./class h-auto mb-30 -->

        </div><!-- ./row px-xl-5 -->

        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"bg-light p-30\">
                    <div class=\"nav nav-tabs mb-4\">
                        <a class=\"nav-item nav-link text-dark active\" data-toggle=\"tab\" href=\"#tab-pane-1\">Description</a>
                        <a class=\"nav-item nav-link text-dark\" data-toggle=\"tab\" href=\"#tab-pane-2\">Information</a>
                        <a class=\"nav-item nav-link text-dark\" data-toggle=\"tab\" href=\"#tab-pane-3\">Reviews (0)</a>
                    </div>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"tab-pane-1\">
                            <h4 class=\"mb-3\">Product Description</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <p>Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.</p>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-2\">
                            <h4 class=\"mb-3\">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item px-0\">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class=\"col-md-6\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item px-0\">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-3\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h4 class=\"mb-4\">1 review for \"Product Name\"</h4>
                                    <div class=\"media mb-4\">
                                        <img src=\"img/user.jpg\" alt=\"Image\" class=\"img-fluid mr-3 mt-1\" style=\"width: 45px;\">
                                        <div class=\"media-body\">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class=\"text-primary mb-2\">
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star-half-alt\"></i>
                                                <i class=\"far fa-star\"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h4 class=\"mb-4\">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class=\"d-flex my-3\">
                                        <p class=\"mb-0 mr-2\">Your Rating * :</p>
                                        <div class=\"text-primary\">
                                            <i class=\"far fa-star\"></i>
                                            <i class=\"far fa-star\"></i>
                                            <i class=\"far fa-star\"></i>
                                            <i class=\"far fa-star\"></i>
                                            <i class=\"far fa-star\"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class=\"form-group\">
                                            <label for=\"message\">Your Review *</label>
                                            <textarea id=\"message\" cols=\"30\" rows=\"5\" class=\"form-control\"></textarea>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"name\">Your Name *</label>
                                            <input type=\"text\" class=\"form-control\" id=\"name\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"email\">Your Email *</label>
                                            <input type=\"email\" class=\"form-control\" id=\"email\">
                                        </div>
                                        <div class=\"form-group mb-0\">
                                            <input type=\"submit\" value=\"Leave Your Review\" class=\"btn btn-primary px-3\">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- ./container-fluid pb-5 -->

</div><!-- #product-product -->

<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                \$('#button-cart').button('loading');
            },
            complete: function() {
                \$('#button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('span.cart-info').html(json['total']);
                    \$('#modal-cart .modal-body').load('index.php?route=common/cart/info .in-cart');
                    \$('#modal-cart').modal();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 342
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 347
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 353
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 420
        echo ($context["product_id"] ?? null);
        echo "');

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 424
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function() {
        \$('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    //--></script>
";
        // line 462
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 462,  751 => 424,  744 => 420,  674 => 353,  665 => 347,  657 => 342,  464 => 152,  460 => 150,  454 => 148,  452 => 147,  443 => 143,  433 => 136,  429 => 135,  419 => 127,  415 => 125,  408 => 123,  403 => 120,  387 => 117,  380 => 115,  378 => 114,  374 => 113,  369 => 112,  364 => 110,  360 => 109,  355 => 108,  351 => 106,  334 => 105,  328 => 102,  321 => 101,  319 => 100,  316 => 99,  312 => 98,  309 => 97,  307 => 96,  300 => 94,  297 => 93,  294 => 92,  287 => 88,  282 => 86,  279 => 85,  273 => 83,  270 => 82,  268 => 81,  265 => 80,  259 => 77,  256 => 76,  250 => 75,  246 => 73,  242 => 71,  239 => 70,  235 => 69,  231 => 67,  229 => 66,  224 => 64,  219 => 62,  215 => 61,  212 => 60,  207 => 57,  198 => 50,  196 => 49,  193 => 48,  174 => 45,  167 => 44,  150 => 43,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  130 => 34,  127 => 33,  125 => 32,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  105 => 23,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div id=\"product-product\">

    <!-- Breadcrumb Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <nav class=\"breadcrumb bg-light mb-30\">
                    {% for breadcrumb in breadcrumbs %}
                        {% if loop.last %}
                            <span class=\"breadcrumb-item active\">{{ breadcrumb.text }}</span>
                        {% else %}
                            <a class=\"breadcrumb-item text-dark\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                        {% endif %}
                    {% endfor %}
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    {% if thumb or images %}
        {% set class = 'col-lg-7' %}
    {% else %}
        {% set class = 'col-lg-12' %}
    {% endif %}

    <div class=\"container-fluid pb-5\">
        <div class=\"row px-xl-5\">

            {% if thumb or images %}

                {% if thumb %}
                    {% set gallery = [{popup: thumb, thumb: thumb}]|merge(images) %}
                {% else %}
                    {% set gallery = images %}
                {% endif %}

                <div class=\"col-lg-5 mb-30\">
                    <div id=\"product-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner bg-light\">
                            {% for image in gallery %}
                                <div class=\"carousel-item {% if loop.index0 == 0 %}active{% endif %}\">
                                    <img class=\"w-100 h-100\" src=\"{{ image.popup }}\" alt=\"{{ heading_title }}\">
                                </div>
                            {% endfor %}
                        </div>
                        {% if gallery|length > 1 %}
                            <a class=\"carousel-control-prev\" href=\"#product-carousel\" data-slide=\"prev\">
                                <i class=\"fa fa-2x fa-angle-left text-dark\"></i>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#product-carousel\" data-slide=\"next\">
                                <i class=\"fa fa-2x fa-angle-right text-dark\"></i>
                            </a>
                        {% endif %}
                    </div>
                </div>
            {% endif %}

            <div class=\"{{ class }} h-auto mb-30\" id=\"product\">
                {{ content_top }}
                <div class=\"h-100 bg-light p-30\">
                    <h3>{{ heading_title }}</h3>

                    {% if review_status %}
                        <div class=\"d-flex mb-3\">
                            <div class=\"rating text-primary mr-2\">
                                {% for i in 1..5 %}
                                    {% if rating < i %}
                                        <small class=\"far fa-star\"></small>
                                    {% else %}
                                        <small class=\"fas fa-star\"></small>
                                    {% endif %}
                                {% endfor %}
                            </div><!-- /.rating text-primary mr-2 -->
                            <small class=\"pt-1\">({{ reviews }})</small>
                        </div><!-- ./d-flex mb-3 -->
                    {% endif %}

                    {% if price %}
                        {% if not special %}
                            <h3 class=\"font-weight-semi-bold mb-4\">{{ price }}</h3>
                        {% else %}
                            <h3 class=\"font-weight-semi-bold mb-4\">
                                {{ special }}
                                <small class=\"text-muted ml-2\">
                                    <del>{{ price }}</del>
                                </small>
                            </h3>
                        {% endif %}
                    {% endif %}

                    <p><strong>{{ text_stock }}</strong> {{ stock }}</p>

                    {% if options %}

                        {% for option in options %}

                            {% if option.type == 'radio' %}
                                <div class=\"d-flex mb-3{% if option.required %} required-option {% endif %}\"
                                     id=\"input-option{{ option.product_option_id }}\">
                                    <strong class=\"text-dark mr-3\">Вага:</strong>

                                    {% for option_value in option.product_option_value %}
                                        <div class=\"custom-control custom-radio custom-control-inline\">
                                            <input type=\"radio\" class=\"custom-control-input\"
                                                   id=\"option-{{ option.product_option_id }}{{ loop.index }}\"
                                                   name=\"option[{{ option.product_option_id }}]\"
                                                   value=\"{{ option_value.product_option_value_id }}\">
                                            <label class=\"custom-control-label\"
                                                   for=\"option-{{ option.product_option_id }}{{ loop.index }}\">
                                                {{ option_value.name }}
                                                {% if option_value.price %}
                                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                                {% endif %}
                                            </label>
                                        </div>
                                    {% endfor %}

                                </div>
                            {% endif %}

                        {% endfor %}

                    {% endif %}

                    <div class=\"d-flex align-items-center mb-4 pt-2\">
                        <div class=\"input-group quantity mr-3\" style=\"width: 130px;\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-minus\">
                                    <i class=\"fa fa-minus\"></i>
                                </button>
                            </div>
                            <input type=\"text\" name=\"quantity\" class=\"form-control bg-secondary border-0 text-center\" value=\"{{ minimum }}\" id=\"input-quantity\">
                            <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" />
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-plus\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                        <button type=\"button\" class=\"btn btn-primary px-3\" id=\"button-cart\" data-loading-text=\"{{ text_loading }}\"><i class=\"fa fa-shopping-cart mr-1\"></i> {{ button_cart }}
                        </button>
                    </div>

                    {% if minimum > 1 %}
                        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ text_minimum }}</div>
                    {% endif %}

                </div><!-- ./h-100 bg-light p-30 -->
                {{ content_bottom }}
            </div><!-- ./class h-auto mb-30 -->

        </div><!-- ./row px-xl-5 -->

        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"bg-light p-30\">
                    <div class=\"nav nav-tabs mb-4\">
                        <a class=\"nav-item nav-link text-dark active\" data-toggle=\"tab\" href=\"#tab-pane-1\">Description</a>
                        <a class=\"nav-item nav-link text-dark\" data-toggle=\"tab\" href=\"#tab-pane-2\">Information</a>
                        <a class=\"nav-item nav-link text-dark\" data-toggle=\"tab\" href=\"#tab-pane-3\">Reviews (0)</a>
                    </div>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"tab-pane-1\">
                            <h4 class=\"mb-3\">Product Description</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <p>Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.</p>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-2\">
                            <h4 class=\"mb-3\">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item px-0\">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class=\"col-md-6\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item px-0\">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class=\"list-group-item px-0\">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-pane-3\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h4 class=\"mb-4\">1 review for \"Product Name\"</h4>
                                    <div class=\"media mb-4\">
                                        <img src=\"img/user.jpg\" alt=\"Image\" class=\"img-fluid mr-3 mt-1\" style=\"width: 45px;\">
                                        <div class=\"media-body\">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class=\"text-primary mb-2\">
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star-half-alt\"></i>
                                                <i class=\"far fa-star\"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <h4 class=\"mb-4\">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class=\"d-flex my-3\">
                                        <p class=\"mb-0 mr-2\">Your Rating * :</p>
                                        <div class=\"text-primary\">
                                            <i class=\"far fa-star\"></i>
                                            <i class=\"far fa-star\"></i>
                                            <i class=\"far fa-star\"></i>
                                            <i class=\"far fa-star\"></i>
                                            <i class=\"far fa-star\"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class=\"form-group\">
                                            <label for=\"message\">Your Review *</label>
                                            <textarea id=\"message\" cols=\"30\" rows=\"5\" class=\"form-control\"></textarea>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"name\">Your Name *</label>
                                            <input type=\"text\" class=\"form-control\" id=\"name\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"email\">Your Email *</label>
                                            <input type=\"email\" class=\"form-control\" id=\"email\">
                                        </div>
                                        <div class=\"form-group mb-0\">
                                            <input type=\"submit\" value=\"Leave Your Review\" class=\"btn btn-primary px-3\">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- ./container-fluid pb-5 -->

</div><!-- #product-product -->

<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                \$('#button-cart').button('loading');
            },
            complete: function() {
                \$('#button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('span.cart-info').html(json['total']);
                    \$('#modal-cart .modal-body').load('index.php?route=common/cart/info .in-cart');
                    \$('#modal-cart').modal();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '{{ datepicker }}',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id={{ product_id }}',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function() {
        \$('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    //--></script>
{{ footer }}", "Foody/template/product/product.twig", "");
    }
}

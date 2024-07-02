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
class __TwigTemplate_6dcad02a1f71f769f32698622c95c79bbfb034177b1d8559a6d41520f18dc92c extends \Twig\Template
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
        echo " h-auto mb-30\" id=\"content\">
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
            echo "
                      ";
            // line 83
            if ( !($context["special"] ?? null)) {
                // line 84
                echo "                        <h3 class=\"font-weight-semi-bold mb-4\">";
                echo ($context["price"] ?? null);
                echo "</h3>
                      ";
            } else {
                // line 86
                echo "                        <h3 class=\"font-weight-semi-bold mb-4\">";
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
            echo "                      

                    ";
        }
        // line 95
        echo "                    
                    <p class=\"mb-4\">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit
                        clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea
                        Nonumy</p>
                    <div class=\"d-flex mb-3\">
                        <strong class=\"text-dark mr-3\">Sizes:</strong>
                        <form>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-1\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-1\">XS</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-2\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-2\">S</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-3\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-3\">M</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-4\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-4\">L</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-5\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-5\">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class=\"d-flex mb-4\">
                        <strong class=\"text-dark mr-3\">Colors:</strong>
                        <form>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-1\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-1\">Black</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-2\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-2\">White</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-3\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-3\">Red</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-4\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-4\">Blue</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-5\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-5\">Green</label>
                            </div>
                        </form>
                    </div>
                    <div class=\"d-flex align-items-center mb-4 pt-2\">
                        <div class=\"input-group quantity mr-3\" style=\"width: 130px;\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-minus\">
                                    <i class=\"fa fa-minus\"></i>
                                </button>
                            </div>
                            <input type=\"text\" class=\"form-control bg-secondary border-0 text-center\" value=\"1\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-plus\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                        <button class=\"btn btn-primary px-3\"><i class=\"fa fa-shopping-cart mr-1\"></i> Add To
                            Cart
                        </button>
                    </div>
                    <div class=\"d-flex pt-2\">
                        <strong class=\"text-dark mr-2\">Share on:</strong>
                        <div class=\"d-inline-flex\">
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-linkedin-in\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-pinterest\"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- ./h-100 bg-light p-30 -->
                ";
        // line 185
        echo ($context["content_bottom"] ?? null);
        echo "
            </div><!-- ./class h-auto mb-30 -->

        </div><!-- ./row px-xl-5 -->
    </div><!-- ./container-fluid pb-5 -->

</div><!-- #product-product -->


";
        // line 194
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
        return array (  403 => 194,  391 => 185,  299 => 95,  294 => 92,  287 => 88,  281 => 86,  275 => 84,  273 => 83,  270 => 82,  268 => 81,  265 => 80,  259 => 77,  256 => 76,  250 => 75,  246 => 73,  242 => 71,  239 => 70,  235 => 69,  231 => 67,  229 => 66,  224 => 64,  219 => 62,  215 => 61,  212 => 60,  207 => 57,  198 => 50,  196 => 49,  193 => 48,  174 => 45,  167 => 44,  150 => 43,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  130 => 34,  127 => 33,  125 => 32,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  105 => 23,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
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

            <div class=\"{{ class }} h-auto mb-30\" id=\"content\">
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
                        <h3 class=\"font-weight-semi-bold mb-4\">{{ special }}
                          <small class=\"text-muted ml-2\">
                            <del>{{ price }}</del>
                          </small>
                        </h3>
                      {% endif %}
                      

                    {% endif %}
                    
                    <p class=\"mb-4\">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit
                        clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea
                        Nonumy</p>
                    <div class=\"d-flex mb-3\">
                        <strong class=\"text-dark mr-3\">Sizes:</strong>
                        <form>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-1\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-1\">XS</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-2\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-2\">S</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-3\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-3\">M</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-4\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-4\">L</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"size-5\" name=\"size\">
                                <label class=\"custom-control-label\" for=\"size-5\">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class=\"d-flex mb-4\">
                        <strong class=\"text-dark mr-3\">Colors:</strong>
                        <form>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-1\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-1\">Black</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-2\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-2\">White</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-3\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-3\">Red</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-4\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-4\">Blue</label>
                            </div>
                            <div class=\"custom-control custom-radio custom-control-inline\">
                                <input type=\"radio\" class=\"custom-control-input\" id=\"color-5\" name=\"color\">
                                <label class=\"custom-control-label\" for=\"color-5\">Green</label>
                            </div>
                        </form>
                    </div>
                    <div class=\"d-flex align-items-center mb-4 pt-2\">
                        <div class=\"input-group quantity mr-3\" style=\"width: 130px;\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-minus\">
                                    <i class=\"fa fa-minus\"></i>
                                </button>
                            </div>
                            <input type=\"text\" class=\"form-control bg-secondary border-0 text-center\" value=\"1\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-plus\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                        <button class=\"btn btn-primary px-3\"><i class=\"fa fa-shopping-cart mr-1\"></i> Add To
                            Cart
                        </button>
                    </div>
                    <div class=\"d-flex pt-2\">
                        <strong class=\"text-dark mr-2\">Share on:</strong>
                        <div class=\"d-inline-flex\">
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-linkedin-in\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-pinterest\"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- ./h-100 bg-light p-30 -->
                {{ content_bottom }}
            </div><!-- ./class h-auto mb-30 -->

        </div><!-- ./row px-xl-5 -->
    </div><!-- ./container-fluid pb-5 -->

</div><!-- #product-product -->


{{ footer }}", "Foody/template/product/product.twig", "");
    }
}

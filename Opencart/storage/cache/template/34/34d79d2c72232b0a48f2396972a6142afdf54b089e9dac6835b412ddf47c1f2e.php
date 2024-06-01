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

/* Foody/template/common/header.twig */
class __TwigTemplate_bd50488f08aa6fd21c75fdc148dccc0a6048856d93b11289a9a54550a76e039f extends \Twig\Template
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
        echo "<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 3
        echo ($context["title"] ?? null);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <base href=\"";
        // line 5
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 6
        if (($context["description"] ?? null)) {
            // line 7
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 9
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 10
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 12
        echo "
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">  

    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"catalog/view/theme//foody/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"catalog/view/theme//foody/assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 27);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 27);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 27);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 30
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    <!-- Customized Bootstrap Stylesheet -->    
    <link href=\"catalog/view/theme//foody/assets/css/style.css\" rel=\"stylesheet\">

    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 37
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 37);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 37);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 40
            echo "    ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</head> 

<body>
    <!-- Topbar Start -->
    <div class=\"container-fluid\">
        <div class=\"row bg-secondary py-1 px-xl-5\">
            <div class=\"col-lg-6 d-none d-lg-block\">
                <div class=\"d-inline-flex align-items-center h-100\">
                    <a class=\"text-body mr-3\" href=\"\">Про нас</a>
                    <a class=\"text-body mr-3\" href=\"\">Зв'язок</a>
                    <a class=\"text-body mr-3\" href=\"\">Допомога</a>
                    <a class=\"text-body mr-3\" href=\"\">Часті запитання</a>
                </div>
            </div>
            <div class=\"col-lg-6 text-center text-lg-right\">
                <div class=\"d-inline-flex align-items-center\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">Мій профіль</button>
                        <div class=\"dropdown-menu dropdown-menu-right\">
                        ";
        // line 61
        if (($context["logged"] ?? null)) {
            // line 62
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 63
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 64
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 66
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 67
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
                        ";
        }
        // line 69
        echo "                        </div>
                    </div>  
                    ";
        // line 71
        echo ($context["language"] ?? null);
        echo "
                </div>
                <div class=\"d-inline-flex align-items-center\">
                    <a href=\"\" class=\"btn px-0 ml-2\">
                        <i class=\"fas fa-heart text-dark\"></i>
                        <span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
                    </a>

                   ";
        // line 79
        echo ($context["cart"] ?? null);
        echo "               
                </div>
            </div>
        </div>
        <div class=\"row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex\">
            <div class=\"col-lg-4\">
                <a href=\"";
        // line 85
        echo ($context["base"] ?? null);
        echo "\" class=\"text-decoration-none\">
                    <span class=\"h1 text-uppercase text-primary bg-dark px-2\">FOODY</span>
                    <span class=\"h1 text-uppercase text-dark bg-primary px-2 ml-n1\">M</span>
                </a>
            </div>
            <div class=\"col-lg-4 col-6 text-left\">
                ";
        // line 91
        echo ($context["search"] ?? null);
        echo "
            </div>
            <div class=\"col-lg-4 col-6 text-right\">
                <p class=\"m-0\">Клієнтська підтримка</p>
                <h5 class=\"m-0\"><a href=\"tel: +380955100700\">+380 955 100 700</a></h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class=\"container-fluid bg-dark mb-30\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-3\">
                ";
        // line 106
        echo ($context["menu"] ?? null);
        echo "
            </div>
            <div class=\"col-lg-9\">
                <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0\">
                    <a href=\"\" class=\"text-decoration-none d-block d-lg-none\">
                        <span class=\"h1 text-uppercase text-dark bg-light px-2\">FOOD</span>
                        <span class=\"h1 text-uppercase text-light bg-primary px-2 ml-n1\">Y</span>
                    </a>
                    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mr-auto py-0\">
                            <a href=\"index.html\" class=\"nav-item nav-link active\">Головна</a>
                            <a href=\"shop.html\" class=\"nav-item nav-link\">Магазин</a>
                            <a href=\"detail.html\" class=\"nav-item nav-link\">Деталі магазину</a>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Сторінки <i class=\"fa fa-angle-down mt-1\"></i></a>
                                <div class=\"dropdown-menu bg-primary rounded-0 border-0 m-0\">
                                    <a href=\"cart.html\" class=\"dropdown-item\">Кошик</a>
                                    <a href=\"checkout.html\" class=\"dropdown-item\">Оформити замовлення</a>
                                </div>
                            </div>
                            <a href=\"contact.html\" class=\"nav-item nav-link\">Контакти</a>
                        </div>
                        ";
        // line 141
        echo "                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->";
    }

    public function getTemplateName()
    {
        return "Foody/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 141,  257 => 106,  239 => 91,  230 => 85,  221 => 79,  210 => 71,  206 => 69,  199 => 67,  192 => 66,  185 => 64,  179 => 63,  172 => 62,  170 => 61,  149 => 42,  140 => 40,  135 => 39,  124 => 37,  120 => 36,  114 => 32,  105 => 30,  100 => 29,  87 => 27,  83 => 26,  67 => 12,  61 => 10,  58 => 9,  52 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"utf-8\">
    <title>{{ title }}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <base href=\"{{ base }}\" />
    {% if description %}
    <meta name=\"description\" content=\"{{ description }}\" />
    {% endif %}
    {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\" />
    {% endif %}

    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">  

    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"catalog/view/theme//foody/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"catalog/view/theme//foody/assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\" />
    {% endfor %}
    {% for script in scripts %}
    <script src=\"{{ script }}\" type=\"text/javascript\"></script>
    {% endfor %}

    <!-- Customized Bootstrap Stylesheet -->    
    <link href=\"catalog/view/theme//foody/assets/css/style.css\" rel=\"stylesheet\">

    {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\" />
    {% endfor %}
    {% for analytic in analytics %}
    {{ analytic }}
    {% endfor %}
</head> 

<body>
    <!-- Topbar Start -->
    <div class=\"container-fluid\">
        <div class=\"row bg-secondary py-1 px-xl-5\">
            <div class=\"col-lg-6 d-none d-lg-block\">
                <div class=\"d-inline-flex align-items-center h-100\">
                    <a class=\"text-body mr-3\" href=\"\">Про нас</a>
                    <a class=\"text-body mr-3\" href=\"\">Зв'язок</a>
                    <a class=\"text-body mr-3\" href=\"\">Допомога</a>
                    <a class=\"text-body mr-3\" href=\"\">Часті запитання</a>
                </div>
            </div>
            <div class=\"col-lg-6 text-center text-lg-right\">
                <div class=\"d-inline-flex align-items-center\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">Мій профіль</button>
                        <div class=\"dropdown-menu dropdown-menu-right\">
                        {% if logged %}
                            <a class=\"dropdown-item\" href=\"{{ account }}\">{{ text_account }}</a>
                            <a class=\"dropdown-item\" href=\"{{ order }}\">{{ text_order }}</a>
                            <a class=\"dropdown-item\" href=\"{{ logout }}\">{{ text_logout }}</a>
                        {% else %}
                            <a class=\"dropdown-item\" href=\"{{ register }}\">{{ text_register }}</a>
                            <a class=\"dropdown-item\" href=\"{{ login }}\">{{ text_login }}</a>
                        {% endif %}
                        </div>
                    </div>  
                    {{ language }}
                </div>
                <div class=\"d-inline-flex align-items-center\">
                    <a href=\"\" class=\"btn px-0 ml-2\">
                        <i class=\"fas fa-heart text-dark\"></i>
                        <span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
                    </a>

                   {{ cart }}               
                </div>
            </div>
        </div>
        <div class=\"row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex\">
            <div class=\"col-lg-4\">
                <a href=\"{{ base }}\" class=\"text-decoration-none\">
                    <span class=\"h1 text-uppercase text-primary bg-dark px-2\">FOODY</span>
                    <span class=\"h1 text-uppercase text-dark bg-primary px-2 ml-n1\">M</span>
                </a>
            </div>
            <div class=\"col-lg-4 col-6 text-left\">
                {{ search }}
            </div>
            <div class=\"col-lg-4 col-6 text-right\">
                <p class=\"m-0\">Клієнтська підтримка</p>
                <h5 class=\"m-0\"><a href=\"tel: +380955100700\">+380 955 100 700</a></h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class=\"container-fluid bg-dark mb-30\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-3\">
                {{ menu }}
            </div>
            <div class=\"col-lg-9\">
                <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0\">
                    <a href=\"\" class=\"text-decoration-none d-block d-lg-none\">
                        <span class=\"h1 text-uppercase text-dark bg-light px-2\">FOOD</span>
                        <span class=\"h1 text-uppercase text-light bg-primary px-2 ml-n1\">Y</span>
                    </a>
                    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mr-auto py-0\">
                            <a href=\"index.html\" class=\"nav-item nav-link active\">Головна</a>
                            <a href=\"shop.html\" class=\"nav-item nav-link\">Магазин</a>
                            <a href=\"detail.html\" class=\"nav-item nav-link\">Деталі магазину</a>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Сторінки <i class=\"fa fa-angle-down mt-1\"></i></a>
                                <div class=\"dropdown-menu bg-primary rounded-0 border-0 m-0\">
                                    <a href=\"cart.html\" class=\"dropdown-item\">Кошик</a>
                                    <a href=\"checkout.html\" class=\"dropdown-item\">Оформити замовлення</a>
                                </div>
                            </div>
                            <a href=\"contact.html\" class=\"nav-item nav-link\">Контакти</a>
                        </div>
                        {# <div class=\"navbar-nav ml-auto py-0 d-none d-lg-block\">
                            <a href=\"\" class=\"btn px-0\">
                                <i class=\"fas fa-heart text-primary\"></i>
                                <span class=\"badge text-secondary border border-secondary rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
                            </a>
                            <a href=\"\" class=\"btn px-0 ml-3\">
                                <i class=\"fas fa-shopping-cart text-primary\"></i>
                                <span class=\"badge text-secondary border border-secondary rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
                            </a>
                        </div> #}
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->", "Foody/template/common/header.twig", "");
    }
}

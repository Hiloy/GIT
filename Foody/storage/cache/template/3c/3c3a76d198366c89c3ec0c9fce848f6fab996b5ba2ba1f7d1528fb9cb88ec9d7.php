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

/* Foody/template/account/account.twig */
class __TwigTemplate_cc1f3710c940326dbe83a71d0bbadb96586d789e55fe55edfefc307a4f3e6aba extends \Twig\Template
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

<div id=\"account-account\" class=\"container-fluid\">

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
        if (($context["success"] ?? null)) {
            // line 24
            echo "        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 26
            echo ($context["success"] ?? null);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 31
        echo "
    <div class=\"row px-xl-5\">
        ";
        // line 33
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 34
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 35
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 36
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 37
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 38
            echo "        ";
        } else {
            // line 39
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 40
            echo "        ";
        }
        // line 41
        echo "
        <div id=\"content\" class=\"";
        // line 42
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"bg-light p-30 mb-5\">
                ";
        // line 44
        echo ($context["content_top"] ?? null);
        echo "
                <h2>";
        // line 45
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 47
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 48
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 49
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 50
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                </ul>
                ";
        // line 52
        if (($context["credit_cards"] ?? null)) {
            // line 53
            echo "                    <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
                    <ul class=\"list-unstyled\">
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 56
                echo "                            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 56);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 56);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </ul>
                ";
        }
        // line 60
        echo "                <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 62
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                    ";
        // line 64
        echo "                    ";
        if (($context["reward"] ?? null)) {
            // line 65
            echo "                        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 67
        echo "                    <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
                    ";
        // line 69
        echo "                    ";
        // line 70
        echo "                </ul>
                ";
        // line 84
        echo "                ";
        echo ($context["content_bottom"] ?? null);
        echo "
            </div>
        </div>
        ";
        // line 87
        echo ($context["column_right"] ?? null);
        echo "
    </div>

</div>

";
        // line 92
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 92,  258 => 87,  251 => 84,  248 => 70,  246 => 69,  239 => 67,  231 => 65,  228 => 64,  222 => 62,  216 => 60,  212 => 58,  201 => 56,  197 => 55,  191 => 53,  189 => 52,  182 => 50,  176 => 49,  170 => 48,  164 => 47,  159 => 45,  155 => 44,  150 => 42,  147 => 41,  144 => 40,  141 => 39,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  127 => 34,  123 => 33,  119 => 31,  111 => 26,  107 => 24,  105 => 23,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div id=\"account-account\" class=\"container-fluid\">

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

    {% if success %}
        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
                </div>
            </div>
        </div>
    {% endif %}

    <div class=\"row px-xl-5\">
        {{ column_left }}
        {% if column_left and column_right %}
            {% set class = 'col-sm-6' %}
        {% elseif column_left or column_right %}
            {% set class = 'col-sm-9' %}
        {% else %}
            {% set class = 'col-sm-12' %}
        {% endif %}

        <div id=\"content\" class=\"{{ class }}\">
            <div class=\"bg-light p-30 mb-5\">
                {{ content_top }}
                <h2>{{ text_my_account }}</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
                    <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
                    <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
                    <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
                </ul>
                {% if credit_cards %}
                    <h2>{{ text_credit_card }}</h2>
                    <ul class=\"list-unstyled\">
                        {% for credit_card in credit_cards %}
                            <li><a href=\"{{ credit_card.href }}\">{{ credit_card.name }}</a></li>
                        {% endfor %}
                    </ul>
                {% endif %}
                <h2>{{ text_my_orders }}</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
                    {# <li><a href=\"{{ download }}\">{{ text_download }}</a></li> #}
                    {% if reward %}
                        <li><a href=\"{{ reward }}\">{{ text_reward }}</a></li>
                    {% endif %}
                    <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
                    {# <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li> #}
                    {# <li><a href=\"{{ recurring }}\">{{ text_recurring }}</a></li> #}
                </ul>
                {# <h2>{{ text_my_affiliate }}</h2>
                <ul class=\"list-unstyled\">
                    {% if not tracking %}
                        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a></li>
                    {% else %}
                        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a></li>
                        <li><a href=\"{{ tracking }}\">{{ text_tracking }}</a></li>
                    {% endif %}
                </ul>
                <h2>{{ text_my_newsletter }}</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
                </ul> #}
                {{ content_bottom }}
            </div>
        </div>
        {{ column_right }}
    </div>

</div>

{{ footer }}", "Foody/template/account/account.twig", "");
    }
}

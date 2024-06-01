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

/* Foody/template/common/cart.twig */
class __TwigTemplate_6e064080e8262465801eb70617bae2bcf15f62e078d45b5286c26b606ad3a8db extends \Twig\Template
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
        echo "<a href=\"\" class=\"btn px-0 ml-2\" data-toggle=\"modal\" data-target=\"#modal-cart\">
    <i class=\"fas fa-shopping-cart text-dark\"></i>
    <span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">";
        // line 3
        echo ($context["text_items"] ?? null);
        echo "</span>
</a>
<div class=\"modal fade\" id=\"modal-cart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
      <div class=\"modal-content\">
      <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Кошик</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
          </button>
      </div>
      <div class=\"modal-body\">
          <div class=\"in-cart\">
            ";
        // line 16
        if (($context["products"] ?? null)) {
            // line 17
            echo "              <div class=\"table-esponsive\">
                <table class=\"table\">
                  <tbody>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 21
                echo "                      <tr>
                        <td>
                          <a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23);
                echo "\" alt=\"\"></a>
                        </td>
                        <td>
                          <a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "</a>
                          ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
                            - <small>";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 29);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 29);
                        echo "</small> 
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                          ";
                }
                // line 32
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 32)) {
                    echo "  <br />
                            - <small>";
                    // line 33
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 33);
                    echo "</small> 
                          ";
                }
                // line 35
                echo "                        </td>
                        <td> ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36);
                echo " </td>
                        <td> ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                echo " </td>
                        <td> ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38);
                echo " </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                  </tbody>
                </table>
              </div>
            ";
        } else {
            // line 45
            echo "              <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 47
        echo "          </div>
      </div>
      <div class=\"modal-footer\">
        <table class=\"table table-bordered\">
          ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 52
            echo "          <tr>
            <td class=\"text-right\"><strong>";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 53);
            echo ": </strong>";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 53);
            echo "</td>
            ";
            // line 55
            echo "          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </table>
        <a href=\"";
        // line 58
        echo ($context["cart"] ?? null);
        echo "\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        echo ($context["text_cart"] ?? null);
        echo "</a>
        <a href=\"";
        // line 59
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a>
      </div>
      </div>
  </div>
</div>  ";
    }

    public function getTemplateName()
    {
        return "Foody/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  181 => 58,  178 => 57,  171 => 55,  165 => 53,  162 => 52,  158 => 51,  152 => 47,  146 => 45,  140 => 41,  131 => 38,  127 => 37,  123 => 36,  120 => 35,  113 => 33,  108 => 32,  105 => 31,  95 => 29,  88 => 28,  86 => 27,  80 => 26,  72 => 23,  68 => 21,  64 => 20,  59 => 17,  57 => 16,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"\" class=\"btn px-0 ml-2\" data-toggle=\"modal\" data-target=\"#modal-cart\">
    <i class=\"fas fa-shopping-cart text-dark\"></i>
    <span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">{{ text_items }}</span>
</a>
<div class=\"modal fade\" id=\"modal-cart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
      <div class=\"modal-content\">
      <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Кошик</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
          </button>
      </div>
      <div class=\"modal-body\">
          <div class=\"in-cart\">
            {% if products %}
              <div class=\"table-esponsive\">
                <table class=\"table\">
                  <tbody>
                    {% for product in products %}
                      <tr>
                        <td>
                          <a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"\"></a>
                        </td>
                        <td>
                          <a href=\"{{ product.href }}\">{{ product.name }}</a>
                          {% if product.option %}
                            {% for option in product.option %} <br />
                            - <small>{{ option.name }} {{ option.value }}</small> 
                            {% endfor %}
                          {% endif %}
                          {% if product.recurring %}  <br />
                            - <small>{{ text_recurring }} {{ product.recurring }}</small> 
                          {% endif %}
                        </td>
                        <td> {{ product.quantity }} </td>
                        <td> {{ product.price }} </td>
                        <td> {{ product.total }} </td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            {% else %}
              <p>{{ text_empty }}</p>
            {% endif %}
          </div>
      </div>
      <div class=\"modal-footer\">
        <table class=\"table table-bordered\">
          {% for total in totals %}
          <tr>
            <td class=\"text-right\"><strong>{{ total.title }}: </strong>{{ total.text }}</td>
            {# <td class=\"text-left\">{{ total.text }}</td> #}
          </tr>
          {% endfor %}
        </table>
        <a href=\"{{ cart }}\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{ text_cart }}</a>
        <a href=\"{{ checkout }}\" class=\"btn btn-primary\">{{ text_checkout }}</a>
      </div>
      </div>
  </div>
</div>  ", "Foody/template/common/cart.twig", "");
    }
}

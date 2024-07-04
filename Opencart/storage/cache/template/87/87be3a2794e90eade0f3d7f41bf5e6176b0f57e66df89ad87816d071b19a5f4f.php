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

/* Foody/template/product/review.twig */
class __TwigTemplate_f0b18f9345717c28639d736ab5195778061fdd23d66ba5569bc37fcb4f9f7d04 extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "        <table class=\"table table-striped table-bordered\">
            <tr>
                <td style=\"width: 50%;\"><strong>";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 5);
                echo "</strong></td>
                <td class=\"text-right\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 6);
                echo "</td>
            </tr>
            <tr>
                <td colspan=\"2\"><p>";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 9);
                echo "</p>
                    <div class=\"text-primary \">
                        ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 12
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 12) < $context["i"])) {
                        // line 13
                        echo "                                <span class=\"fa fa-stack c-f-star-mpt\">
                                  <i class=\"fa fa-star fa-stack-2x\"></i>
                                  <i class=\"fa fa-star-o fa-stack-2x\">
                                  
                                  </i>
                                </span>
                            ";
                    } else {
                        // line 20
                        echo "                                <span class=\"fa fa-stack c-f-star\">
                                  <i class=\"fa fa-star fa-stack-2x\"></i>
                                  <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                </span>
                            ";
                    }
                    // line 25
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                    </div>
                </td>
            </tr>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 32
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 33
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
";
        } else {
            // line 36
            echo "    <p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "Foody/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  109 => 33,  105 => 32,  102 => 31,  92 => 26,  86 => 25,  79 => 20,  70 => 13,  67 => 12,  63 => 11,  58 => 9,  52 => 6,  48 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if reviews %}
    {% for review in reviews %}
        <table class=\"table table-striped table-bordered\">
            <tr>
                <td style=\"width: 50%;\"><strong>{{ review.author }}</strong></td>
                <td class=\"text-right\">{{ review.date_added }}</td>
            </tr>
            <tr>
                <td colspan=\"2\"><p>{{ review.text }}</p>
                    <div class=\"text-primary \">
                        {% for i in 1..5 %}
                            {% if review.rating < i %}
                                <span class=\"fa fa-stack c-f-star-mpt\">
                                  <i class=\"fa fa-star fa-stack-2x\"></i>
                                  <i class=\"fa fa-star-o fa-stack-2x\">
                                  
                                  </i>
                                </span>
                            {% else %}
                                <span class=\"fa fa-stack c-f-star\">
                                  <i class=\"fa fa-star fa-stack-2x\"></i>
                                  <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                </span>
                            {% endif %}
                        {% endfor %}
                    </div>
                </td>
            </tr>
        </table>
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
        <div class=\"col-sm-6 text-right\">{{ results }}</div>
    </div>
{% else %}
    <p>{{ text_no_reviews }}</p>
{% endif %}", "Foody/template/product/review.twig", "");
    }
}

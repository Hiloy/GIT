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

/* Foody/template/extension/captcha/basic.twig */
class __TwigTemplate_72703319f11f38d31d988ab2bfbcc4ad51b6bf8c78fe38ee99efd8bcafa13a4f extends \Twig\Template
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
        echo "111
fieldset>
  <legend>";
        // line 3
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
  <div class=\"form-group required\">
    ";
        // line 5
        if ((twig_slice($this->env, ($context["route"] ?? null), 0, 9) == "checkout/")) {
            // line 6
            echo "    <label class=\"control-label\" for=\"input-payment-captcha\">";
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
    <input type=\"text\" name=\"captcha\" id=\"input-payment-captcha\" class=\"form-control\" autocomplete=\"off\" />
    <img src=\"index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
    ";
        } else {
            // line 10
            echo "    <label class=\"col-sm-2 control-label\" for=\"input-captcha\">";
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"captcha\" id=\"input-captcha\" class=\"form-control\" />
      <img src=\"index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
      ";
            // line 14
            if (($context["error_captcha"] ?? null)) {
                // line 15
                echo "      <div class=\"text-danger\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
      ";
            }
            // line 17
            echo "    </div>
    ";
        }
        // line 19
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/captcha/basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  72 => 17,  66 => 15,  64 => 14,  56 => 10,  48 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("111
fieldset>
  <legend>{{ text_captcha }}</legend>
  <div class=\"form-group required\">
    {% if route|slice(0, 9) == 'checkout/' %}
    <label class=\"control-label\" for=\"input-payment-captcha\">{{ entry_captcha }}</label>
    <input type=\"text\" name=\"captcha\" id=\"input-payment-captcha\" class=\"form-control\" autocomplete=\"off\" />
    <img src=\"index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
    {% else %}
    <label class=\"col-sm-2 control-label\" for=\"input-captcha\">{{ entry_captcha }}</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"captcha\" id=\"input-captcha\" class=\"form-control\" />
      <img src=\"index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
      {% if error_captcha %}
      <div class=\"text-danger\">{{ error_captcha }}</div>
      {% endif %}
    </div>
    {% endif %}
  </div>
</fieldset>
", "Foody/template/extension/captcha/basic.twig", "");
    }
}

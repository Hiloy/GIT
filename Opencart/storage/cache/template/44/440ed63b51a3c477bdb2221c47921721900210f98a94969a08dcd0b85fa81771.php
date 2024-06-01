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
class __TwigTemplate_8aaf9058d40277d7712e3c380ebdc4df5df9476868a670c5f6867fe6560a76f0 extends \Twig\Template
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
          ...
      </div>
      <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
          <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
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
        return array (  41 => 3,  37 => 1,);
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
          ...
      </div>
      <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
          <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
      </div>
  </div>
</div>  ", "Foody/template/common/cart.twig", "");
    }
}

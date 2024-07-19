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

/* Foody/template/extension/module/custom/customer.twig */
class __TwigTemplate_486594e80b63223f5545a36e5026590343e3988e2cb9b0d354015edeea866676 extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3>";
        // line 2
        echo ($context["heading_customer"] ?? null);
        echo "</h3></div>
  <div class=\"panel-body\">
    <div class=\"form-group\" style=\"display: ";
        // line 4
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) < 2)) {
            echo " none ";
        }
        echo "\">
      <label class=\"control-label\">";
        // line 5
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            echo " 
      ";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 7) == ($context["customer_group_id"] ?? null))) {
                echo " 
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 10);
                echo "\" checked=\"checked\" />
          ";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 11);
                echo "</label>
      </div>
      ";
            } else {
                // line 13
                echo " 
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 16);
                echo "\" />
          ";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 17);
                echo "</label>
      </div>
      ";
            }
            // line 19
            echo " 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo " 
    </div>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["fields"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 

      ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 25) == "firstname")) {
                echo " 
        <div class=\"form-group required row\" id=\"customer-field-firstname\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-firstname\">";
                // line 27
                echo ($context["entry_firstname"] ?? null);
                echo "</label>
          <div class=\"col-sm-10\"><input  type=\"text\" name=\"customer_firstname\" value=\"";
                // line 28
                echo ($context["firstname"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_firstname"] ?? null);
                echo "\" id=\"customer-input-firstname\" class=\"form-control\" data-validation=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["field"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["validation"] ?? null) : null);
                echo "\" /></div>
        </div>
      ";
            }
            // line 30
            echo " 

      ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 32) == "lastname")) {
                echo " 
        <div class=\"form-group required row\" id=\"customer-field-lastname\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-lastname\">";
                // line 34
                echo ($context["entry_lastname"] ?? null);
                echo "</label>
          <div class=\"col-sm-10\"><input type=\"text\" name=\"customer_lastname\" value=\"";
                // line 35
                echo ($context["lastname"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_lastname"] ?? null);
                echo "\" id=\"customer-input-lastname\" class=\"form-control\" data-validation=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["field"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["validation"] ?? null) : null);
                echo "\" /></div>
        </div>
         
      ";
            }
            // line 38
            echo " 

      ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 40) == "email")) {
                echo " 
        <div class=\"form-group required row\" id=\"customer-field-email\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-email\">";
                // line 42
                echo ($context["entry_email"] ?? null);
                echo "</label>
          <div class=\"col-sm-10\"><input type=\"text\" name=\"customer_email\" value=\"";
                // line 43
                echo ($context["email"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_email"] ?? null);
                echo "\" id=\"customer-input-email\" class=\"form-control\" data-validation=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["validation"] ?? null) : null);
                echo "\" /></div>
        </div>
         
      ";
            }
            // line 46
            echo " 

      ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 48) == "telephone")) {
                echo " 
        <div class=\"form-group required row\" id=\"customer-field-telephone\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-telephone\">";
                // line 50
                echo ($context["entry_telephone"] ?? null);
                echo "</label>
          <div class=\"col-sm-10\"><input type=\"text\" name=\"customer_telephone\" value=\"";
                // line 51
                echo ($context["telephone"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_telephone"] ?? null);
                echo "\" id=\"customer-input-telephone\" class=\"form-control\" data-validation=\"";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["field"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["validation"] ?? null) : null);
                echo "\" /></div>
        </div>
         
      ";
            }
            // line 54
            echo " 

      ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 56) == "fax")) {
                echo " 
        <div class=\"form-group required row\" id=\"customer-field-fax\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-fax\">";
                // line 58
                echo ($context["entry_fax"] ?? null);
                echo "</label>
          <div class=\"col-sm-10\"><input type=\"text\" name=\"customer_fax\" value=\"";
                // line 59
                echo ($context["fax"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_fax"] ?? null);
                echo "\" id=\"customer-input-fax\" class=\"form-control\" data-validation=\"";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["field"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["validation"] ?? null) : null);
                echo "\" /></div>
        </div>
         
      ";
            }
            // line 62
            echo " 

      ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 64) == "password")) {
                echo " 
        <div class=\"form-group required row\" id=\"customer-field-password\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-password\">";
                // line 66
                echo ($context["entry_password"] ?? null);
                echo "</label>
          <div class=\"col-sm-10\"><input type=\"password\" name=\"customer_password\" value=\"";
                // line 67
                echo ($context["password"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_password"] ?? null);
                echo "\" id=\"customer-input-password\" class=\"form-control\" data-validation=\"";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["field"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["validation"] ?? null) : null);
                echo "\" /></div>
        </div>
         
      ";
            }
            // line 70
            echo " 

      ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 72) == "confirm")) {
                echo " 
        <div class=\"form-group required row\" id=\"customer-field-confirm\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-confirm\">";
                // line 74
                echo ($context["entry_confirm"] ?? null);
                echo "</label>
          <div class=\"col-sm-10\"><input type=\"password\" name=\"customer_confirm\" value=\"";
                // line 75
                echo ($context["confirm"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_confirm"] ?? null);
                echo "\" id=\"customer-input-confirm\" class=\"form-control\" data-validation=\"";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["field"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["validation"] ?? null) : null);
                echo "\" /></div>
        </div>
         
      ";
            }
            // line 78
            echo " 

      ";
            // line 80
            if ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 80), 0, 12) == "custom_field")) {
                echo " 

        ";
                // line 82
                $context["custom_field_id"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 82), 12);
                echo " 

        ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                    echo " 
        ";
                    // line 85
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85) == ($context["custom_field_id"] ?? null))) {
                        echo " 
        
        ";
                        // line 87
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 87) == "select")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 88
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 88);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 89
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 89);
                            echo "</label>
          <select name=\"customer_custom_field";
                            // line 90
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                            echo "\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                            echo "\" class=\"form-control\">
            <option value=\"\">";
                            // line 91
                            echo ($context["text_select"] ?? null);
                            echo "</option>
            ";
                            // line 92
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["custom_field"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["custom_field_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                echo " 
            <option value=\"";
                                // line 93
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 93);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 93);
                                echo "</option>
            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 94
                            echo " 
          </select>
        </div>
        ";
                        }
                        // line 97
                        echo " 
        ";
                        // line 98
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 98) == "radio")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 99
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 99);
                            echo "\">
          <label class=\"control-label\">";
                            // line 100
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 100);
                            echo "</label>
          <div id=\"input-custom-field";
                            // line 101
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                            echo "\">
            ";
                            // line 102
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["custom_field"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["custom_field_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                echo " 
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"customer_custom_field";
                                // line 105
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                                echo "\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105);
                                echo "\" />
                ";
                                // line 106
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 106);
                                echo "</label>
            </div>
            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 108
                            echo " 
          </div>
        </div>
        ";
                        }
                        // line 111
                        echo " 
        ";
                        // line 112
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "checkbox")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 113
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 113);
                            echo "\">
          <label class=\"control-label\">";
                            // line 114
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 114);
                            echo "</label>
          <div id=\"input-custom-field";
                            // line 115
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                            echo "\">
            ";
                            // line 116
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["custom_field"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["custom_field_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                echo " 
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"customer_custom_field";
                                // line 119
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                                echo "[]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 119);
                                echo "\" />
                ";
                                // line 120
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 120);
                                echo "</label>
            </div>
            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 122
                            echo " 
          </div>
        </div>
        ";
                        }
                        // line 125
                        echo " 
        ";
                        // line 126
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 126) == "text")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 127
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 127);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 128
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 128);
                            echo "</label>
          <input type=\"text\" name=\"customer_custom_field";
                            // line 129
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 129);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                            echo "\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                            echo "\" class=\"form-control\" data-validation=\"";
                            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["field"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["validation"] ?? null) : null);
                            echo "\" />
        </div>
        ";
                        }
                        // line 131
                        echo " 
        ";
                        // line 132
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "textarea")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 133
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 133);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 134
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                            echo "</label>
          <textarea name=\"customer_custom_field";
                            // line 135
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                            echo "\" rows=\"5\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                            echo "\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                            echo "\" class=\"form-control\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 135);
                            echo "</textarea>
        </div>
        ";
                        }
                        // line 137
                        echo " 
        ";
                        // line 138
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 138) == "file")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 139
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 139);
                            echo "\">
          <label class=\"control-label\">";
                            // line 140
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 140);
                            echo "</label>
          <br />
          <button type=\"button\" id=\"button-custom-field";
                            // line 142
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                            echo "\" data-loading-text=\"";
                            echo ($context["text_loading"] ?? null);
                            echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                            echo ($context["button_upload"] ?? null);
                            echo "</button>
          <input type=\"hidden\" name=\"customer_custom_field";
                            // line 143
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                            echo "\" value=\"\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                            echo "\" />
        </div>
        ";
                        }
                        // line 145
                        echo " 
        ";
                        // line 146
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 146) == "date")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 147
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 147);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 148
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 148);
                            echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"customer_custom_field";
                            // line 150
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 150);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                            echo "\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        ";
                        }
                        // line 155
                        echo " 
        ";
                        // line 156
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 156) == "time")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 157
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 157);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 158
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 158);
                            echo "</label>
          <div class=\"input-group time\">
            <input type=\"text\" name=\"customer_custom_field";
                            // line 160
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 160);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                            echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                            echo "\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        ";
                        }
                        // line 165
                        echo " 
        ";
                        // line 166
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 166) == "datetime")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 167
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 167);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 168
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 168);
                            echo "</label>
          <div class=\"input-group datetime\">
            <input type=\"text\" name=\"customer_custom_field";
                            // line 170
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 170);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                            echo "\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        ";
                        }
                        // line 175
                        echo " 
        ";
                    }
                    // line 176
                    echo " 
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo " 

      ";
            }
            // line 179
            echo " 

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo " 

  </div>
</div>

<hr>

<script><!--
\$('#custom-customer [name^=customer]').on('input', function() {
  \$(this).parent().find('.text-danger').remove();
  \$(this).parent().removeClass('has-error');
});
//--></script>

<script><!--
\$('#custom-customer input[name=\\'customer_group_id\\']').on('change', function() {

  // Customer
  custom_block.customer(this.value);

  // Payment Methods
  custom_block.payment(this.value);

});

\$('#custom-customer input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script>

<script><!--
\$('#custom-customer button[id^=\\'button-custom-field\\']').on('click', function() {
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
            \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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

";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/custom/customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 181,  666 => 179,  661 => 177,  654 => 176,  650 => 175,  635 => 170,  628 => 168,  622 => 167,  618 => 166,  615 => 165,  600 => 160,  593 => 158,  587 => 157,  583 => 156,  580 => 155,  565 => 150,  558 => 148,  552 => 147,  548 => 146,  545 => 145,  537 => 143,  529 => 142,  524 => 140,  518 => 139,  514 => 138,  511 => 137,  499 => 135,  493 => 134,  487 => 133,  483 => 132,  480 => 131,  466 => 129,  460 => 128,  454 => 127,  450 => 126,  447 => 125,  441 => 122,  432 => 120,  426 => 119,  418 => 116,  414 => 115,  410 => 114,  404 => 113,  400 => 112,  397 => 111,  391 => 108,  382 => 106,  376 => 105,  368 => 102,  364 => 101,  360 => 100,  354 => 99,  350 => 98,  347 => 97,  341 => 94,  331 => 93,  325 => 92,  321 => 91,  315 => 90,  309 => 89,  303 => 88,  299 => 87,  294 => 85,  288 => 84,  283 => 82,  278 => 80,  274 => 78,  263 => 75,  259 => 74,  254 => 72,  250 => 70,  239 => 67,  235 => 66,  230 => 64,  226 => 62,  215 => 59,  211 => 58,  206 => 56,  202 => 54,  191 => 51,  187 => 50,  182 => 48,  178 => 46,  167 => 43,  163 => 42,  158 => 40,  154 => 38,  143 => 35,  139 => 34,  134 => 32,  130 => 30,  120 => 28,  116 => 27,  111 => 25,  104 => 23,  99 => 20,  92 => 19,  86 => 17,  82 => 16,  77 => 13,  71 => 11,  67 => 10,  61 => 7,  55 => 6,  51 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3>{{ heading_customer }}</h3></div>
  <div class=\"panel-body\">
    <div class=\"form-group\" style=\"display: {% if customer_groups|length < 2 %} none {% endif %}\">
      <label class=\"control-label\">{{ entry_customer_group }}</label>
      {% for customer_group in customer_groups %} 
      {% if (customer_group.customer_group_id == customer_group_id) %} 
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"customer_group_id\" value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\" />
          {{ customer_group.name }}</label>
      </div>
      {% else %} 
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"customer_group_id\" value=\"{{ customer_group.customer_group_id }}\" />
          {{ customer_group.name }}</label>
      </div>
      {% endif %} 
      {% endfor %} 
    </div>

    {% for field in setting['fields'] %} 

      {% if (field.name == 'firstname') %} 
        <div class=\"form-group required row\" id=\"customer-field-firstname\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-firstname\">{{ entry_firstname }}</label>
          <div class=\"col-sm-10\"><input  type=\"text\" name=\"customer_firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"customer-input-firstname\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" /></div>
        </div>
      {% endif %} 

      {% if (field.name == 'lastname') %} 
        <div class=\"form-group required row\" id=\"customer-field-lastname\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-lastname\">{{ entry_lastname }}</label>
          <div class=\"col-sm-10\"><input type=\"text\" name=\"customer_lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"customer-input-lastname\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" /></div>
        </div>
         
      {% endif %} 

      {% if (field.name == 'email') %} 
        <div class=\"form-group required row\" id=\"customer-field-email\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-email\">{{ entry_email }}</label>
          <div class=\"col-sm-10\"><input type=\"text\" name=\"customer_email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"customer-input-email\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" /></div>
        </div>
         
      {% endif %} 

      {% if (field.name == 'telephone') %} 
        <div class=\"form-group required row\" id=\"customer-field-telephone\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-telephone\">{{ entry_telephone }}</label>
          <div class=\"col-sm-10\"><input type=\"text\" name=\"customer_telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"customer-input-telephone\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" /></div>
        </div>
         
      {% endif %} 

      {% if (field.name == 'fax') %} 
        <div class=\"form-group required row\" id=\"customer-field-fax\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-fax\">{{ entry_fax }}</label>
          <div class=\"col-sm-10\"><input type=\"text\" name=\"customer_fax\" value=\"{{ fax }}\" placeholder=\"{{ entry_fax }}\" id=\"customer-input-fax\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" /></div>
        </div>
         
      {% endif %} 

      {% if (field.name == 'password') %} 
        <div class=\"form-group required row\" id=\"customer-field-password\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-password\">{{ entry_password }}</label>
          <div class=\"col-sm-10\"><input type=\"password\" name=\"customer_password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"customer-input-password\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" /></div>
        </div>
         
      {% endif %} 

      {% if (field.name == 'confirm') %} 
        <div class=\"form-group required row\" id=\"customer-field-confirm\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-confirm\">{{ entry_confirm }}</label>
          <div class=\"col-sm-10\"><input type=\"password\" name=\"customer_confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"customer-input-confirm\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" /></div>
        </div>
         
      {% endif %} 

      {% if field.name|slice(0, 12) == 'custom_field' %} 

        {% set custom_field_id = field.name|slice(12) %} 

        {% for custom_field in custom_fields %} 
        {% if (custom_field.custom_field_id == custom_field_id) %} 
        
        {% if (custom_field.type == 'select') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <select name=\"customer_custom_field{{ custom_field.custom_field_id }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">
            <option value=\"\">{{ text_select }}</option>
            {% for custom_field_value in custom_field['custom_field_value'] %} 
            <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
            {% endfor %} 
          </select>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'radio') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\">{{ custom_field.name }}</label>
          <div id=\"input-custom-field{{ custom_field.custom_field_id }}\">
            {% for custom_field_value in custom_field['custom_field_value'] %} 
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                {{ custom_field_value.name }}</label>
            </div>
            {% endfor %} 
          </div>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'checkbox') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\">{{ custom_field.name }}</label>
          <div id=\"input-custom-field{{ custom_field.custom_field_id }}\">
            {% for custom_field_value in custom_field['custom_field_value'] %} 
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"customer_custom_field{{ custom_field.custom_field_id }}[]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                {{ custom_field_value.name }}</label>
            </div>
            {% endfor %} 
          </div>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'text') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <input type=\"text\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" />
        </div>
        {% endif %} 
        {% if (custom_field.type == 'textarea') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <textarea name=\"customer_custom_field{{ custom_field.custom_field_id }}\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'file') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\">{{ custom_field.name }}</label>
          <br />
          <button type=\"button\" id=\"button-custom-field{{ custom_field.custom_field_id }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
          <input type=\"hidden\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" />
        </div>
        {% endif %} 
        {% if (custom_field.type == 'date') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'time') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <div class=\"input-group time\">
            <input type=\"text\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'datetime') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <div class=\"input-group datetime\">
            <input type=\"text\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        {% endif %} 
        {% endif %} 
        {% endfor %} 

      {% endif %} 

    {% endfor %} 

  </div>
</div>

<hr>

<script><!--
\$('#custom-customer [name^=customer]').on('input', function() {
  \$(this).parent().find('.text-danger').remove();
  \$(this).parent().removeClass('has-error');
});
//--></script>

<script><!--
\$('#custom-customer input[name=\\'customer_group_id\\']').on('change', function() {

  // Customer
  custom_block.customer(this.value);

  // Payment Methods
  custom_block.payment(this.value);

});

\$('#custom-customer input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script>

<script><!--
\$('#custom-customer button[id^=\\'button-custom-field\\']').on('click', function() {
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
            \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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

", "Foody/template/extension/module/custom/customer.twig", "");
    }
}

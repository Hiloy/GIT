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

/* Foody/template/extension/module/custom/shipping.twig */
class __TwigTemplate_3677d4e4f902bf91f253b47b3a5065cc344ede94c9ed447ba4c84d408a06de3c extends \Twig\Template
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
        echo ($context["heading_shipping"] ?? null);
        echo "</h3></div>
  <div class=\"panel-body\">

    ";
        // line 5
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 6
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 7
        echo " 

    
    ";
        // line 10
        if (($context["shipping_methods"] ?? null)) {
            echo " 

      <div id=\"custom-shipping-methods\">
      ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                echo " 
        ";
                // line 15
                echo "        ";
                if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["shipping_method"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["error"] ?? null) : null)) {
                    echo " 
          ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["shipping_method"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["quote"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        echo " 
            <div class=\"radio\">
              <label>
                <h6>
                  ";
                        // line 20
                        if ((((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["quote"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["code"] ?? null) : null) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 21
                            echo "                  ";
                            $context["code"] = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["quote"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null);
                            // line 22
                            echo "                  <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["quote"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["code"] ?? null) : null);
                            echo "\" checked=\"checked\" />
                  ";
                        } else {
                            // line 24
                            echo "                  <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["quote"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["code"] ?? null) : null);
                            echo "\" />
                  ";
                        }
                        // line 26
                        echo "                  ";
                        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["quote"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["title"] ?? null) : null);
                        echo " - ";
                        if (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["quote"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["cost"] ?? null) : null) > 0)) {
                            echo " ";
                            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["quote"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["text"] ?? null) : null);
                            echo " ";
                        } else {
                            echo " ";
                            echo ($context["text_free"] ?? null);
                            echo " ";
                        }
                        // line 27
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, $context["quote"], "description", [], "array", true, true, false, 27)) {
                            // line 28
                            echo "                  <br /><small>";
                            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["quote"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["description"] ?? null) : null);
                            echo "</small>
                  ";
                        }
                        // line 30
                        echo "                </h6>
              </label>
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo " 
        ";
                } else {
                    // line 34
                    echo " 
          <div class=\"alert alert-danger\">";
                    // line 35
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["shipping_method"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["error"] ?? null) : null);
                    echo "</div>
        ";
                }
                // line 36
                echo " 
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo " 
      </div>

      <div id=\"custom-shipping-address\">      

        <hr>

        ";
            // line 44
            if (($context["addresses"] ?? null)) {
                echo " 
          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
              ";
                // line 48
                echo ($context["text_address_existing"] ?? null);
                echo "</label>
          </div>
          <div id=\"shipping-existing\">
            <select name=\"address_id\" class=\"form-control\">
              ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    echo " 
              ";
                    // line 53
                    if (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["address"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["address_id"] ?? null) : null) == ($context["address_id"] ?? null))) {
                        echo " 
              <option value=\"";
                        // line 54
                        echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["address"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["address_id"] ?? null) : null);
                        echo "\" selected=\"selected\">";
                        echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["address"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["firstname"] ?? null) : null);
                        echo " ";
                        echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["address"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["lastname"] ?? null) : null);
                        echo ", ";
                        echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["address"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["address_1"] ?? null) : null);
                        echo ", ";
                        echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["address"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["city"] ?? null) : null);
                        echo ", ";
                        echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["address"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["zone"] ?? null) : null);
                        echo ", ";
                        echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["address"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["country"] ?? null) : null);
                        echo "</option>
              ";
                    } else {
                        // line 55
                        echo " 
              <option value=\"";
                        // line 56
                        echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["address"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["address_id"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["address"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["firstname"] ?? null) : null);
                        echo " ";
                        echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["address"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["lastname"] ?? null) : null);
                        echo ", ";
                        echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["address"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["address_1"] ?? null) : null);
                        echo ", ";
                        echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["address"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["city"] ?? null) : null);
                        echo ", ";
                        echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["address"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["zone"] ?? null) : null);
                        echo ", ";
                        echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["address"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["country"] ?? null) : null);
                        echo "</option>
              ";
                    }
                    // line 57
                    echo " 
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo " 
            </select>
          </div>
          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"shipping_address\" value=\"new\" />
              ";
                // line 64
                echo ($context["text_address_new"] ?? null);
                echo "</label>
          </div>

          <br />
        ";
            }
            // line 68
            echo " 
        
        <div id=\"shipping-new\" style=\"display: ";
            // line 70
            echo ((($context["addresses"] ?? null)) ? ("none") : ("block"));
            echo ";\">

          ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["setting"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["fields"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                echo " 

            ";
                // line 74
                if (((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["field"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["name"] ?? null) : null) == "company")) {
                    echo " 
              <div class=\"form-group\" id=\"shipping-field-company\">
                <label class=\"control-label\" for=\"input-shipping-company\">";
                    // line 76
                    echo ($context["entry_company"] ?? null);
                    echo "</label>
                <input type=\"text\" name=\"company\" value=\"";
                    // line 77
                    echo ($context["company"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_company"] ?? null);
                    echo "\" id=\"input-shipping-company\" class=\"form-control\" />
              </div>
               
            ";
                }
                // line 80
                echo " 

            ";
                // line 82
                if (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["field"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["name"] ?? null) : null) == "address_1")) {
                    echo " 
              <div class=\"form-group\" id=\"shipping-field-address-1\">
                <label class=\"control-label\" for=\"input-shipping-address-1\">";
                    // line 84
                    echo ($context["entry_address_1"] ?? null);
                    echo "</label>
                <input type=\"text\" name=\"address_1\" value=\"";
                    // line 85
                    echo ($context["address_1"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_address_1"] ?? null);
                    echo "\" id=\"input-shipping-address-1\" class=\"form-control\" />
              </div>
            ";
                }
                // line 87
                echo " 

            ";
                // line 89
                if (((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["field"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["name"] ?? null) : null) == "address_2")) {
                    echo " 
              <div class=\"form-group\" id=\"shipping-field-address-2\">
                <label class=\"control-label\" for=\"input-shipping-address-2\">";
                    // line 91
                    echo ($context["entry_address_2"] ?? null);
                    echo "</label>
                <input type=\"text\" name=\"address_2\" value=\"";
                    // line 92
                    echo ($context["address_2"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_address_2"] ?? null);
                    echo "\" id=\"input-shipping-address-2\" class=\"form-control\" />
              </div>
            ";
                }
                // line 94
                echo " 

            ";
                // line 96
                if (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["field"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["name"] ?? null) : null) == "city")) {
                    echo " 
              <div class=\"form-group\" id=\"shipping-field-city\">
                <label class=\"control-label\" for=\"input-shipping-city\">";
                    // line 98
                    echo ($context["entry_city"] ?? null);
                    echo "</label>
                <input type=\"text\" name=\"city\" value=\"";
                    // line 99
                    echo ($context["city"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_city"] ?? null);
                    echo "\" id=\"input-shipping-city\" class=\"form-control\" />
              </div>
            ";
                }
                // line 101
                echo " 

            ";
                // line 103
                if (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["field"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["name"] ?? null) : null) == "postcode")) {
                    echo " 
              <div class=\"form-group\" id=\"shipping-field-postcode\">
                <label class=\"control-label\" for=\"input-shipping-postcode\">";
                    // line 105
                    echo ($context["entry_postcode"] ?? null);
                    echo "</label>
                <input type=\"text\" name=\"postcode\" value=\"";
                    // line 106
                    echo ($context["postcode"] ?? null);
                    echo "\" placeholder=\"";
                    echo ($context["entry_postcode"] ?? null);
                    echo "\" id=\"input-shipping-postcode\" class=\"form-control\" />
              </div>
            ";
                }
                // line 108
                echo " 

            ";
                // line 110
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["field"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["name"] ?? null) : null) == "country_id")) {
                    echo " 
              <div class=\"form-group\" id=\"shipping-field-country-id\">
                <label class=\"control-label\" for=\"input-shipping-country-id\">";
                    // line 112
                    echo ($context["entry_country"] ?? null);
                    echo "</label>
                <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
                  <option value=\"\">";
                    // line 114
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                  ";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
                  ";
                        // line 116
                        if (((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["country"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["country_id"] ?? null) : null) == ($context["country_id"] ?? null))) {
                            echo " 
                  <option value=\"";
                            // line 117
                            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["country"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["country_id"] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["country"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["name"] ?? null) : null);
                            echo "</option>
                  ";
                        } else {
                            // line 118
                            echo " 
                  <option value=\"";
                            // line 119
                            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["country"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["country_id"] ?? null) : null);
                            echo "\">";
                            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["country"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["name"] ?? null) : null);
                            echo "</option>
                  ";
                        }
                        // line 120
                        echo " 
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo " 
                </select>
              </div>
            ";
                }
                // line 124
                echo " 

            ";
                // line 126
                if (((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["field"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["name"] ?? null) : null) == "zone_id")) {
                    echo " 
              <div class=\"form-group\" id=\"shipping-field-zone-id\">
                <label class=\"control-label\" for=\"input-shipping-zone-id\">";
                    // line 128
                    echo ($context["entry_zone"] ?? null);
                    echo "</label>
                <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\"></select>
              </div>
            ";
                }
                // line 131
                echo " 

            ";
                // line 133
                if ((twig_slice($this->env, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["field"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["name"] ?? null) : null), 0, 12) == "custom_field")) {
                    echo " 

              ";
                    // line 135
                    $context["custom_field_id"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 135), 12);
                    echo " 

              ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                        echo " 
              ";
                        // line 138
                        if (((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["custom_field"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["custom_field_id"] ?? null) : null) == ($context["custom_field_id"] ?? null))) {
                            echo " 

                ";
                            // line 140
                            if (((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["custom_field"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["type"] ?? null) : null) == "select")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 141
                                echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["custom_field"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["custom_field"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["custom_field"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field";
                                // line 142
                                echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["custom_field"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["custom_field_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["custom_field"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["name"] ?? null) : null);
                                echo "</label>
                  <select name=\"custom_field";
                                // line 143
                                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["custom_field"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["custom_field_id"] ?? null) : null);
                                echo "\" id=\"input-shipping-custom-field";
                                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["custom_field"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-control\">
                    <option value=\"\">";
                                // line 144
                                echo ($context["text_select"] ?? null);
                                echo "</option>
                    ";
                                // line 145
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["custom_field"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["custom_field_value"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                    echo " 
                    <option value=\"";
                                    // line 146
                                    echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["custom_field_value"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["custom_field_value_id"] ?? null) : null);
                                    echo "\">";
                                    echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["custom_field_value"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["name"] ?? null) : null);
                                    echo "</option>
                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 147
                                echo " 
                  </select>
                </div>
                ";
                            }
                            // line 150
                            echo " 

                ";
                            // line 152
                            if (((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["custom_field"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["type"] ?? null) : null) == "radio")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 153
                                echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["custom_field"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["custom_field"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["custom_field"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                                // line 154
                                echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["custom_field"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["name"] ?? null) : null);
                                echo "</label>
                    <div id=\"input-shipping-custom-field";
                                // line 155
                                echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["custom_field"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["custom_field_id"] ?? null) : null);
                                echo "\">
                    ";
                                // line 156
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["custom_field"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["custom_field_value"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                    echo " 
                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"custom_field";
                                    // line 159
                                    echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["custom_field"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["custom_field_id"] ?? null) : null);
                                    echo "\" value=\"";
                                    echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["custom_field_value"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["custom_field_value_id"] ?? null) : null);
                                    echo "\" />
                        ";
                                    // line 160
                                    echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["custom_field_value"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["name"] ?? null) : null);
                                    echo "</label>
                    </div>
                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 162
                                echo " 
                  </div>
                </div>
                ";
                            }
                            // line 165
                            echo " 

                ";
                            // line 167
                            if (((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["custom_field"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["type"] ?? null) : null) == "checkbox")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 168
                                echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["custom_field"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["custom_field"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["custom_field"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"control-label\">";
                                // line 169
                                echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["custom_field"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["name"] ?? null) : null);
                                echo "</label>
                    <div id=\"input-shipping-custom-field";
                                // line 170
                                echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["custom_field"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["custom_field_id"] ?? null) : null);
                                echo "\">
                    ";
                                // line 171
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["custom_field"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["custom_field_value"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                    echo " 
                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                                    // line 174
                                    echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["custom_field"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["custom_field_id"] ?? null) : null);
                                    echo "][]\" value=\"";
                                    echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["custom_field_value"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["custom_field_value_id"] ?? null) : null);
                                    echo "\" />
                        ";
                                    // line 175
                                    echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["custom_field_value"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["name"] ?? null) : null);
                                    echo "</label>
                    </div>
                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 177
                                echo " 
                  </div>
                </div>
                ";
                            }
                            // line 180
                            echo " 

                ";
                            // line 182
                            if (((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["custom_field"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["type"] ?? null) : null) == "text")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 183
                                echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["custom_field"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["custom_field"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["custom_field"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field";
                                // line 184
                                echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["custom_field"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["custom_field_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["custom_field"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["name"] ?? null) : null);
                                echo "</label>
                  <input type=\"text\" name=\"custom_field";
                                // line 185
                                echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["custom_field"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["custom_field_id"] ?? null) : null);
                                echo "\" value=\"";
                                echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["custom_field"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["value"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["custom_field"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["name"] ?? null) : null);
                                echo "\" id=\"input-shipping-custom-field";
                                echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["custom_field"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-control\" />
                </div>
                ";
                            }
                            // line 187
                            echo " 

                ";
                            // line 189
                            if (((($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["custom_field"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["type"] ?? null) : null) == "textarea")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 190
                                echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["custom_field"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["custom_field"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["custom_field"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field";
                                // line 191
                                echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["custom_field"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["custom_field_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["custom_field"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["name"] ?? null) : null);
                                echo "</label>
                  <textarea name=\"custom_field";
                                // line 192
                                echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["custom_field"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["custom_field_id"] ?? null) : null);
                                echo "\" rows=\"5\" placeholder=\"";
                                echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["custom_field"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["name"] ?? null) : null);
                                echo "\" id=\"input-shipping-custom-field";
                                echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["custom_field"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-control\">";
                                echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["custom_field"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["value"] ?? null) : null);
                                echo "</textarea>
                </div>
                ";
                            }
                            // line 194
                            echo " 

                ";
                            // line 196
                            if (((($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["custom_field"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["type"] ?? null) : null) == "file")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 197
                                echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["custom_field"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["custom_field"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = $context["custom_field"]) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"control-label\">";
                                // line 198
                                echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["custom_field"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["name"] ?? null) : null);
                                echo "</label>
                  <button type=\"button\" id=\"button-shipping-custom-field";
                                // line 199
                                echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["custom_field"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["custom_field_id"] ?? null) : null);
                                echo "\" data-loading-text=\"";
                                echo ($context["text_loading"] ?? null);
                                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                                echo ($context["button_upload"] ?? null);
                                echo "</button>
                  <input type=\"hidden\" name=\"custom_field";
                                // line 200
                                echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["custom_field"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["custom_field_id"] ?? null) : null);
                                echo "\" value=\"\" id=\"input-shipping-custom-field";
                                echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["custom_field"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["custom_field_id"] ?? null) : null);
                                echo "\" />
                </div>
                ";
                            }
                            // line 202
                            echo " 

                ";
                            // line 204
                            if (((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = $context["custom_field"]) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["type"] ?? null) : null) == "date")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 205
                                echo (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = $context["custom_field"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["custom_field"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = $context["custom_field"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field";
                                // line 206
                                echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["custom_field"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["custom_field_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["custom_field"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["name"] ?? null) : null);
                                echo "</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field";
                                // line 208
                                echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = $context["custom_field"]) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["custom_field_id"] ?? null) : null);
                                echo "\" value=\"";
                                echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = $context["custom_field"]) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["value"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = $context["custom_field"]) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["name"] ?? null) : null);
                                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                                echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = $context["custom_field"]) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                            }
                            // line 213
                            echo " 

                ";
                            // line 215
                            if (((($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = $context["custom_field"]) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["type"] ?? null) : null) == "time")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 216
                                echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["custom_field"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["custom_field"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = $context["custom_field"]) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field";
                                // line 217
                                echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = $context["custom_field"]) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["custom_field_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = $context["custom_field"]) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["name"] ?? null) : null);
                                echo "</label>
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field";
                                // line 219
                                echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = $context["custom_field"]) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["custom_field_id"] ?? null) : null);
                                echo "\" value=\"";
                                echo (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = $context["custom_field"]) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["value"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = $context["custom_field"]) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["name"] ?? null) : null);
                                echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                                echo (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = $context["custom_field"]) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                            }
                            // line 224
                            echo " 

                ";
                            // line 226
                            if (((($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = $context["custom_field"]) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["type"] ?? null) : null) == "datetime")) {
                                echo " 
                <div id=\"shipping-field-custom-field";
                                // line 227
                                echo (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = $context["custom_field"]) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-group";
                                echo (((($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = $context["custom_field"]) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["required"] ?? null) : null)) ? (" required") : (""));
                                echo " custom-field\" data-sort=\"";
                                echo (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = $context["custom_field"]) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["sort_order"] ?? null) : null);
                                echo "\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field";
                                // line 228
                                echo (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = $context["custom_field"]) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["custom_field_id"] ?? null) : null);
                                echo "\">";
                                echo (($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = $context["custom_field"]) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["name"] ?? null) : null);
                                echo "</label>
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field";
                                // line 230
                                echo (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = $context["custom_field"]) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["custom_field_id"] ?? null) : null);
                                echo "\" value=\"";
                                echo (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = $context["custom_field"]) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["value"] ?? null) : null);
                                echo "\" placeholder=\"";
                                echo (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = $context["custom_field"]) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["name"] ?? null) : null);
                                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                                echo (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = $context["custom_field"]) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526["custom_field_id"] ?? null) : null);
                                echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                </div>
                ";
                            }
                            // line 235
                            echo " 

              ";
                        }
                        // line 237
                        echo "   
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 238
                    echo " 

            ";
                }
                // line 240
                echo " 
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "   
        </div>
      </div>

    ";
        }
        // line 245
        echo " 
  </div>
</div>

<hr>

<script><!--
\$('#custom-shipping [name^=shipping]').on('input', function() {
  \$(this).parent().find('.text-danger').remove();
  \$(this).parent().removeClass('has-error');
});
//--></script>

<script><!--
\$('#custom-shipping input[name=\\'shipping_address\\']').on('change', function() {
  if ( \$(this).val() === 'new' ){
    \$('#shipping-new').show();
  } else {
    \$('#shipping-new').hide();
  }
});
//--></script>

<script><!--
\$('#custom-shipping input[name=\\'shipping_method\\']').on('change', function() {

  \$('.alert, .text-danger').remove();
  \$('.has-error').removeClass('has-error');

  // Custom (inbox)
  custom_block.shipping(this.value);

});

\$('#custom-shipping input[name=\\'shipping_method\\']:checked').trigger('change');
//--></script>

<script><!--
\$('#custom-shipping select[name=\\'country_id\\']').on('change', function() {
  \$.ajax({
    url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
    dataType: 'json',
    beforeSend: function() {
      \$('#custom-shipping select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
    },
    complete: function() {
      \$('.fa-spin').remove();
    },
    success: function(json) {
      if (json['postcode_required'] == '1') {
        \$('#custom-shipping input[name=\\'postcode\\']').parent().parent().addClass('required');
      } else {
        \$('#custom-shipping input[name=\\'postcode\\']').parent().parent().removeClass('required');
      }

      html = '<option value=\"\">";
        // line 300
        echo ($context["text_select"] ?? null);
        echo "</option>';

      if (json['zone'] && json['zone'] != '') {
        for (i = 0; i < json['zone'].length; i++) {
          html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

          if (json['zone'][i]['zone_id'] == '";
        // line 306
        echo ($context["zone_id"] ?? null);
        echo "') {
            html += ' selected=\"selected\"';
          }

          html += '>' + json['zone'][i]['name'] + '</option>';
        }
      } else {
        html += '<option value=\"0\" selected=\"selected\">";
        // line 313
        echo ($context["text_none"] ?? null);
        echo "</option>';
      }

      \$('#custom-shipping select[name=\\'zone_id\\']').html(html);
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
  });
});

\$('#custom-shipping select[name=\\'country_id\\']').trigger('change');
//--></script>";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/custom/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  944 => 313,  934 => 306,  925 => 300,  868 => 245,  861 => 241,  854 => 240,  849 => 238,  842 => 237,  837 => 235,  822 => 230,  815 => 228,  807 => 227,  803 => 226,  799 => 224,  784 => 219,  777 => 217,  769 => 216,  765 => 215,  761 => 213,  746 => 208,  739 => 206,  731 => 205,  727 => 204,  723 => 202,  715 => 200,  707 => 199,  703 => 198,  695 => 197,  691 => 196,  687 => 194,  675 => 192,  669 => 191,  661 => 190,  657 => 189,  653 => 187,  641 => 185,  635 => 184,  627 => 183,  623 => 182,  619 => 180,  613 => 177,  604 => 175,  598 => 174,  590 => 171,  586 => 170,  582 => 169,  574 => 168,  570 => 167,  566 => 165,  560 => 162,  551 => 160,  545 => 159,  537 => 156,  533 => 155,  529 => 154,  521 => 153,  517 => 152,  513 => 150,  507 => 147,  497 => 146,  491 => 145,  487 => 144,  481 => 143,  475 => 142,  467 => 141,  463 => 140,  458 => 138,  452 => 137,  447 => 135,  442 => 133,  438 => 131,  431 => 128,  426 => 126,  422 => 124,  416 => 121,  409 => 120,  402 => 119,  399 => 118,  392 => 117,  388 => 116,  382 => 115,  378 => 114,  373 => 112,  368 => 110,  364 => 108,  356 => 106,  352 => 105,  347 => 103,  343 => 101,  335 => 99,  331 => 98,  326 => 96,  322 => 94,  314 => 92,  310 => 91,  305 => 89,  301 => 87,  293 => 85,  289 => 84,  284 => 82,  280 => 80,  271 => 77,  267 => 76,  262 => 74,  255 => 72,  250 => 70,  246 => 68,  238 => 64,  230 => 58,  223 => 57,  206 => 56,  203 => 55,  186 => 54,  182 => 53,  176 => 52,  169 => 48,  162 => 44,  153 => 37,  146 => 36,  141 => 35,  138 => 34,  134 => 33,  125 => 30,  119 => 28,  116 => 27,  103 => 26,  97 => 24,  91 => 22,  88 => 21,  86 => 20,  77 => 16,  72 => 15,  66 => 13,  60 => 10,  55 => 7,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3>{{ heading_shipping }}</h3></div>
  <div class=\"panel-body\">

    {% if (error_warning) %} 
    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
    {% endif %} 

    
    {% if (shipping_methods) %} 

      <div id=\"custom-shipping-methods\">
      {% for shipping_method in shipping_methods %} 
        {# <p><strong>{{ shipping_method['title'] }}</strong></p> #}
        {% if (not shipping_method['error']) %} 
          {% for quote in shipping_method['quote'] %} 
            <div class=\"radio\">
              <label>
                <h6>
                  {% if (quote['code'] == code or not code) %}
                  {% set code = quote['code'] %}
                  <input type=\"radio\" name=\"shipping_method\" value=\"{{ quote['code'] }}\" checked=\"checked\" />
                  {% else %}
                  <input type=\"radio\" name=\"shipping_method\" value=\"{{ quote['code'] }}\" />
                  {% endif %}
                  {{ quote['title'] }} - {% if quote['cost'] > 0 %} {{ quote['text'] }} {% else %} {{ text_free }} {% endif %}
                  {% if (quote['description'] is defined) %}
                  <br /><small>{{ quote['description'] }}</small>
                  {% endif %}
                </h6>
              </label>
            </div>
          {% endfor %} 
        {% else %} 
          <div class=\"alert alert-danger\">{{ shipping_method['error'] }}</div>
        {% endif %} 
      {% endfor %} 
      </div>

      <div id=\"custom-shipping-address\">      

        <hr>

        {% if (addresses) %} 
          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
              {{ text_address_existing }}</label>
          </div>
          <div id=\"shipping-existing\">
            <select name=\"address_id\" class=\"form-control\">
              {% for address in addresses %} 
              {% if (address['address_id'] == address_id) %} 
              <option value=\"{{ address['address_id'] }}\" selected=\"selected\">{{ address['firstname'] }} {{ address['lastname'] }}, {{ address['address_1'] }}, {{ address['city'] }}, {{ address['zone'] }}, {{ address['country'] }}</option>
              {% else %} 
              <option value=\"{{ address['address_id'] }}\">{{ address['firstname'] }} {{ address['lastname'] }}, {{ address['address_1'] }}, {{ address['city'] }}, {{ address['zone'] }}, {{ address['country'] }}</option>
              {% endif %} 
              {% endfor %} 
            </select>
          </div>
          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"shipping_address\" value=\"new\" />
              {{ text_address_new }}</label>
          </div>

          <br />
        {% endif %} 
        
        <div id=\"shipping-new\" style=\"display: {{ addresses ? 'none' : 'block' }};\">

          {% for field in setting['fields'] %} 

            {% if (field['name'] == 'company') %} 
              <div class=\"form-group\" id=\"shipping-field-company\">
                <label class=\"control-label\" for=\"input-shipping-company\">{{ entry_company }}</label>
                <input type=\"text\" name=\"company\" value=\"{{ company }}\" placeholder=\"{{ entry_company }}\" id=\"input-shipping-company\" class=\"form-control\" />
              </div>
               
            {% endif %} 

            {% if (field['name'] == 'address_1') %} 
              <div class=\"form-group\" id=\"shipping-field-address-1\">
                <label class=\"control-label\" for=\"input-shipping-address-1\">{{ entry_address_1 }}</label>
                <input type=\"text\" name=\"address_1\" value=\"{{ address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-shipping-address-1\" class=\"form-control\" />
              </div>
            {% endif %} 

            {% if (field['name'] == 'address_2') %} 
              <div class=\"form-group\" id=\"shipping-field-address-2\">
                <label class=\"control-label\" for=\"input-shipping-address-2\">{{ entry_address_2 }}</label>
                <input type=\"text\" name=\"address_2\" value=\"{{ address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-shipping-address-2\" class=\"form-control\" />
              </div>
            {% endif %} 

            {% if (field['name'] == 'city') %} 
              <div class=\"form-group\" id=\"shipping-field-city\">
                <label class=\"control-label\" for=\"input-shipping-city\">{{ entry_city }}</label>
                <input type=\"text\" name=\"city\" value=\"{{ city }}\" placeholder=\"{{ entry_city }}\" id=\"input-shipping-city\" class=\"form-control\" />
              </div>
            {% endif %} 

            {% if (field['name'] == 'postcode') %} 
              <div class=\"form-group\" id=\"shipping-field-postcode\">
                <label class=\"control-label\" for=\"input-shipping-postcode\">{{ entry_postcode }}</label>
                <input type=\"text\" name=\"postcode\" value=\"{{ postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\" />
              </div>
            {% endif %} 

            {% if (field['name'] == 'country_id') %} 
              <div class=\"form-group\" id=\"shipping-field-country-id\">
                <label class=\"control-label\" for=\"input-shipping-country-id\">{{ entry_country }}</label>
                <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
                  <option value=\"\">{{ text_select }}</option>
                  {% for country in countries %} 
                  {% if (country['country_id'] == country_id) %} 
                  <option value=\"{{ country['country_id'] }}\" selected=\"selected\">{{ country['name'] }}</option>
                  {% else %} 
                  <option value=\"{{ country['country_id'] }}\">{{ country['name'] }}</option>
                  {% endif %} 
                  {% endfor %} 
                </select>
              </div>
            {% endif %} 

            {% if (field['name'] == 'zone_id') %} 
              <div class=\"form-group\" id=\"shipping-field-zone-id\">
                <label class=\"control-label\" for=\"input-shipping-zone-id\">{{ entry_zone }}</label>
                <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\"></select>
              </div>
            {% endif %} 

            {% if (field['name']|slice(0, 12) == 'custom_field') %} 

              {% set custom_field_id = field.name|slice(12) %} 

              {% for custom_field in custom_fields %} 
              {% if (custom_field['custom_field_id'] == custom_field_id) %} 

                {% if (custom_field['type'] == 'select') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\">{{ custom_field['name'] }}</label>
                  <select name=\"custom_field{{ custom_field['custom_field_id'] }}\" id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-control\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field['custom_field_value'] %} 
                    <option value=\"{{ custom_field_value['custom_field_value_id'] }}\">{{ custom_field_value['name'] }}</option>
                    {% endfor %} 
                  </select>
                </div>
                {% endif %} 

                {% if (custom_field['type'] == 'radio') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"col-sm-2 control-label\">{{ custom_field['name'] }}</label>
                    <div id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\">
                    {% for custom_field_value in custom_field['custom_field_value'] %} 
                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"custom_field{{ custom_field['custom_field_id'] }}\" value=\"{{ custom_field_value['custom_field_value_id'] }}\" />
                        {{ custom_field_value['name'] }}</label>
                    </div>
                    {% endfor %} 
                  </div>
                </div>
                {% endif %} 

                {% if (custom_field['type'] == 'checkbox') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"control-label\">{{ custom_field['name'] }}</label>
                    <div id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\">
                    {% for custom_field_value in custom_field['custom_field_value'] %} 
                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" name=\"custom_field[{{ custom_field['custom_field_id'] }}][]\" value=\"{{ custom_field_value['custom_field_value_id'] }}\" />
                        {{ custom_field_value['name'] }}</label>
                    </div>
                    {% endfor %} 
                  </div>
                </div>
                {% endif %} 

                {% if (custom_field['type'] == 'text') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\">{{ custom_field['name'] }}</label>
                  <input type=\"text\" name=\"custom_field{{ custom_field['custom_field_id'] }}\" value=\"{{ custom_field['value'] }}\" placeholder=\"{{ custom_field['name'] }}\" id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-control\" />
                </div>
                {% endif %} 

                {% if (custom_field['type'] == 'textarea') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\">{{ custom_field['name'] }}</label>
                  <textarea name=\"custom_field{{ custom_field['custom_field_id'] }}\" rows=\"5\" placeholder=\"{{ custom_field['name'] }}\" id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-control\">{{ custom_field['value'] }}</textarea>
                </div>
                {% endif %} 

                {% if (custom_field['type'] == 'file') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"control-label\">{{ custom_field['name'] }}</label>
                  <button type=\"button\" id=\"button-shipping-custom-field{{ custom_field['custom_field_id'] }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
                  <input type=\"hidden\" name=\"custom_field{{ custom_field['custom_field_id'] }}\" value=\"\" id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\" />
                </div>
                {% endif %} 

                {% if (custom_field['type'] == 'date') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\">{{ custom_field['name'] }}</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field{{ custom_field['custom_field_id'] }}\" value=\"{{ custom_field['value'] }}\" placeholder=\"{{ custom_field['name'] }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                {% endif %} 

                {% if (custom_field['type'] == 'time') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\">{{ custom_field['name'] }}</label>
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field{{ custom_field['custom_field_id'] }}\" value=\"{{ custom_field['value'] }}\" placeholder=\"{{ custom_field['name'] }}\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                {% endif %} 

                {% if (custom_field['type'] == 'datetime') %} 
                <div id=\"shipping-field-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-group{{ custom_field['required'] ? ' required' : '' }} custom-field\" data-sort=\"{{ custom_field['sort_order'] }}\">
                  <label class=\"control-label\" for=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\">{{ custom_field['name'] }}</label>
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field{{ custom_field['custom_field_id'] }}\" value=\"{{ custom_field['value'] }}\" placeholder=\"{{ custom_field['name'] }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field{{ custom_field['custom_field_id'] }}\" class=\"form-control\" />
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

    {% endif %} 
  </div>
</div>

<hr>

<script><!--
\$('#custom-shipping [name^=shipping]').on('input', function() {
  \$(this).parent().find('.text-danger').remove();
  \$(this).parent().removeClass('has-error');
});
//--></script>

<script><!--
\$('#custom-shipping input[name=\\'shipping_address\\']').on('change', function() {
  if ( \$(this).val() === 'new' ){
    \$('#shipping-new').show();
  } else {
    \$('#shipping-new').hide();
  }
});
//--></script>

<script><!--
\$('#custom-shipping input[name=\\'shipping_method\\']').on('change', function() {

  \$('.alert, .text-danger').remove();
  \$('.has-error').removeClass('has-error');

  // Custom (inbox)
  custom_block.shipping(this.value);

});

\$('#custom-shipping input[name=\\'shipping_method\\']:checked').trigger('change');
//--></script>

<script><!--
\$('#custom-shipping select[name=\\'country_id\\']').on('change', function() {
  \$.ajax({
    url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
    dataType: 'json',
    beforeSend: function() {
      \$('#custom-shipping select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
    },
    complete: function() {
      \$('.fa-spin').remove();
    },
    success: function(json) {
      if (json['postcode_required'] == '1') {
        \$('#custom-shipping input[name=\\'postcode\\']').parent().parent().addClass('required');
      } else {
        \$('#custom-shipping input[name=\\'postcode\\']').parent().parent().removeClass('required');
      }

      html = '<option value=\"\">{{ text_select }}</option>';

      if (json['zone'] && json['zone'] != '') {
        for (i = 0; i < json['zone'].length; i++) {
          html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

          if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {
            html += ' selected=\"selected\"';
          }

          html += '>' + json['zone'][i]['name'] + '</option>';
        }
      } else {
        html += '<option value=\"0\" selected=\"selected\">{{ text_none }}</option>';
      }

      \$('#custom-shipping select[name=\\'zone_id\\']').html(html);
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
  });
});

\$('#custom-shipping select[name=\\'country_id\\']').trigger('change');
//--></script>", "Foody/template/extension/module/custom/shipping.twig", "");
    }
}

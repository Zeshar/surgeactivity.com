<?php

/* ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig */
class __TwigTemplate_8314e7ddaef5fd659a91ec781d41f864da0191b29eb97b72c7a276ec6e36187d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"prequalification-button-group\">
    ";
        // line 2
        if (( !array_key_exists("save", $context) || ((isset($context["save"]) ? $context["save"] : null) == true))) {
            // line 3
            echo "        ";
            $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig", 3)->display(array_merge($context, array("show_cancel_link" => false)));
            // line 4
            echo "    ";
        }
        // line 5
        echo "    <div class=\"right-prequalification-groub-buttons pull-right\">
        ";
        // line 6
        echo ((((isset($context["last"]) ? $context["last"] : null) == true)) ? ("<div class=\"add-new-block\"><button class=\"btn btn-green-border add-new\" >Add New</button></div>") : (""));
        echo "
        ";
        // line 7
        if ((((isset($context["empty"]) ? $context["empty"] : null) == true) && ((isset($context["singleEmpty"]) ? $context["singleEmpty"] : null) == false))) {
            // line 8
            echo "            <div class=\"exclude-new-block\"><a href=\"#\" class=\"exclude-new link-delete\">Delete</a></div>
            ";
            // line 10
            echo "        ";
        }
        // line 11
        echo "        ";
        if ((((isset($context["singleEmpty"]) ? $context["singleEmpty"] : null) == true) || ((isset($context["empty"]) ? $context["empty"] : null) == false))) {
            // line 12
            echo "            <a href=\"#\" class=\"clear-all link-delete\">Delete</a>
            ";
            // line 14
            echo "        ";
        }
        // line 15
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  51 => 14,  48 => 12,  45 => 11,  42 => 10,  39 => 8,  37 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="prequalification-button-group">*/
/*     {% if save is not defined or save == true %}*/
/*         {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false} %}*/
/*     {% endif %}*/
/*     <div class="right-prequalification-groub-buttons pull-right">*/
/*         {{ last == true ? "<div class=\"add-new-block\"><button class=\"btn btn-green-border add-new\" >Add New</button></div>" : "" }}*/
/*         {% if empty == true and singleEmpty == false %}*/
/*             <div class="exclude-new-block"><a href="#" class="exclude-new link-delete">Delete</a></div>*/
/*             {#<button class="btn btn-red-border exclude-new" >Exclude</button>#}*/
/*         {% endif %}*/
/*         {% if singleEmpty == true or empty == false %}*/
/*             <a href="#" class="clear-all link-delete">Delete</a>*/
/*             {#<button class="btn btn-red-border clear-all" >Clear all</button>#}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/

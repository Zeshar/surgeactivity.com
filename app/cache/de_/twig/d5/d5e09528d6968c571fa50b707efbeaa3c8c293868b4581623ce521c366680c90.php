<?php

/* ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig */
class __TwigTemplate_9849f30aab1c199962fb8c0aa5d6748b720e8feabdbc423914cdcd4e56c8a9f3 extends Twig_Template
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
        $__internal_fefe92b4e617098ee27b3aecf456ef8021a8a8435ea2b4313a60a9341f674de7 = $this->env->getExtension("native_profiler");
        $__internal_fefe92b4e617098ee27b3aecf456ef8021a8a8435ea2b4313a60a9341f674de7->enter($__internal_fefe92b4e617098ee27b3aecf456ef8021a8a8435ea2b4313a60a9341f674de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig"));

        // line 1
        echo "<div class=\"prequalification-button-group\">
    ";
        // line 2
        if (( !array_key_exists("save", $context) || ((isset($context["save"]) ? $context["save"] : $this->getContext($context, "save")) == true))) {
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
        echo ((((isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")) == true)) ? ("<div class=\"add-new-block\"><button class=\"btn btn-green-border add-new\" >Add New</button></div>") : (""));
        echo "
        ";
        // line 7
        if ((((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")) == true) && ((isset($context["singleEmpty"]) ? $context["singleEmpty"] : $this->getContext($context, "singleEmpty")) == false))) {
            // line 8
            echo "            <div class=\"exclude-new-block\"><a href=\"#\" class=\"exclude-new link-delete\">Delete</a></div>
            ";
            // line 10
            echo "        ";
        }
        // line 11
        echo "        ";
        if ((((isset($context["singleEmpty"]) ? $context["singleEmpty"] : $this->getContext($context, "singleEmpty")) == true) || ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")) == false))) {
            // line 12
            echo "            <a href=\"#\" class=\"clear-all link-delete\">Delete</a>
            ";
            // line 14
            echo "        ";
        }
        // line 15
        echo "    </div>
</div>";
        
        $__internal_fefe92b4e617098ee27b3aecf456ef8021a8a8435ea2b4313a60a9341f674de7->leave($__internal_fefe92b4e617098ee27b3aecf456ef8021a8a8435ea2b4313a60a9341f674de7_prof);

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
        return array (  57 => 15,  54 => 14,  51 => 12,  48 => 11,  45 => 10,  42 => 8,  40 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
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

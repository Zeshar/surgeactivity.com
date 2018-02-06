<?php

/* ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_quote.html.twig */
class __TwigTemplate_7710e84841976148d26a366e64296e8e87c840aa8139df98ac8b7a35a0ea0a96 extends Twig_Template
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
        $__internal_1b6d6cb23f500aa1e5030101db298663371b90ecfa107b89f68c6b9ab36aaece = $this->env->getExtension("native_profiler");
        $__internal_1b6d6cb23f500aa1e5030101db298663371b90ecfa107b89f68c6b9ab36aaece->enter($__internal_1b6d6cb23f500aa1e5030101db298663371b90ecfa107b89f68c6b9ab36aaece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_quote.html.twig"));

        // line 1
        if ((3 == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Close Quote as success\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "cancelQuote", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">UnSold Quote</a>
";
        }
        
        $__internal_1b6d6cb23f500aa1e5030101db298663371b90ecfa107b89f68c6b9ab36aaece->leave($__internal_1b6d6cb23f500aa1e5030101db298663371b90ecfa107b89f68c6b9ab36aaece_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_quote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% if 3 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Close Quote as success" href="{{ admin.generateObjectUrl('cancelQuote', object) }}">UnSold Quote</a>*/
/* {% endif %}*/

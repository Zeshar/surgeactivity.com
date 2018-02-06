<?php

/* ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_opportunity.html.twig */
class __TwigTemplate_d0f296d12f9654274576b7581e15108f3bc187a52d8b81e14a9c10c4a2391c87 extends Twig_Template
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
        $__internal_960c5017ca7da69dbf10b68a81d25334bf13edb043cb610342e76050f27b6690 = $this->env->getExtension("native_profiler");
        $__internal_960c5017ca7da69dbf10b68a81d25334bf13edb043cb610342e76050f27b6690->enter($__internal_960c5017ca7da69dbf10b68a81d25334bf13edb043cb610342e76050f27b6690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_opportunity.html.twig"));

        // line 1
        if ((1 == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Convert a Opportunity to Quote\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "closeOpportunity", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Create quote</a>
";
        }
        
        $__internal_960c5017ca7da69dbf10b68a81d25334bf13edb043cb610342e76050f27b6690->leave($__internal_960c5017ca7da69dbf10b68a81d25334bf13edb043cb610342e76050f27b6690_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_opportunity.html.twig";
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
/* {% if  1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Convert a Opportunity to Quote" href="{{ admin.generateObjectUrl('closeOpportunity', object) }}">Create quote</a>*/
/* {% endif %}*/

<?php

/* ZesharCRMCoreBundle:ActivityCRUD:list__action_close_activity.html.twig */
class __TwigTemplate_a6b1e861be718dd492676f7438a78c06ffc544436830b4dc7ae95b127f84432d extends Twig_Template
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
        $__internal_0a0f6217534f0439a53b118b2edd0c26f0772ead789fa4ebca76ba1dd7259cc5 = $this->env->getExtension("native_profiler");
        $__internal_0a0f6217534f0439a53b118b2edd0c26f0772ead789fa4ebca76ba1dd7259cc5->enter($__internal_0a0f6217534f0439a53b118b2edd0c26f0772ead789fa4ebca76ba1dd7259cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ActivityCRUD:list__action_close_activity.html.twig"));

        // line 2
        echo "    <a class=\"btn btn-sm btn-default delete_link\" title=\"Delete Activity\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "closeActivity", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-remove\"></i> Delete</a>
</div>
";
        
        $__internal_0a0f6217534f0439a53b118b2edd0c26f0772ead789fa4ebca76ba1dd7259cc5->leave($__internal_0a0f6217534f0439a53b118b2edd0c26f0772ead789fa4ebca76ba1dd7259cc5_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ActivityCRUD:list__action_close_activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {#{% if 1 == object.getStatus() %}#}*/
/*     <a class="btn btn-sm btn-default delete_link" title="Delete Activity" href="{{ admin.generateObjectUrl('closeActivity', object) }}"><i class="glyphicon glyphicon-remove"></i> Delete</a>*/
/* </div>*/
/* {#{% endif %}#}*/

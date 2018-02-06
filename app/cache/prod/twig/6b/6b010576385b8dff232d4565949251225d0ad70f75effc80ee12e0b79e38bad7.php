<?php

/* ZesharCRMCoreBundle:ActivityCRUD:list__action_close_activity.html.twig */
class __TwigTemplate_c11c5a0e4b86ed22e21e21eda1118137cffbefb8ca3566fdd42fd9c6f9da4505 extends Twig_Template
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
        // line 2
        echo "    <a class=\"btn btn-sm btn-default delete_link\" title=\"Delete Activity\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "closeActivity", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-remove\"></i> Delete</a>
</div>
";
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
        return array (  19 => 2,);
    }
}
/* {#{% if 1 == object.getStatus() %}#}*/
/*     <a class="btn btn-sm btn-default delete_link" title="Delete Activity" href="{{ admin.generateObjectUrl('closeActivity', object) }}"><i class="glyphicon glyphicon-remove"></i> Delete</a>*/
/* </div>*/
/* {#{% endif %}#}*/

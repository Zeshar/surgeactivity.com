<?php

/* ZesharCRMCoreBundle:CSV:import_csv.html.twig */
class __TwigTemplate_a849ef58d8f395d2101ba9631fc38a29db63aed90282ac7f4de068b41f1ec953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle::sonata_layout.html.twig", "ZesharCRMCoreBundle:CSV:import_csv.html.twig", 1);
        $this->blocks = array(
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZesharCRMCoreBundle::sonata_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <ol class=\"nav navbar-top-links breadcrumb\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">Dashboard</a></li>
        <li class=\"active\">Import CSV</li>
    </ol>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "zeshar_crm_core.block.importcsv")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CSV:import_csv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 10,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'ZesharCRMCoreBundle::sonata_layout.html.twig' %}*/
/* */
/* {% block sonata_breadcrumb %}*/
/*     <ol class="nav navbar-top-links breadcrumb">*/
/*         <li><a href="{{ url('sonata_admin_dashboard') }}">Dashboard</a></li>*/
/*         <li class="active">Import CSV</li>*/
/*     </ol>*/
/* {% endblock sonata_breadcrumb %}*/
/* */
/* {% block content %}*/
/*     {{ sonata_block_render({'type': 'zeshar_crm_core.block.importcsv'}) }}*/
/* {% endblock %}*/

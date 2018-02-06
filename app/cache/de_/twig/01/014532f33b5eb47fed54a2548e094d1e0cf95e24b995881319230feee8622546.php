<?php

/* ZesharCRMCoreBundle:CSV:import_csv.html.twig */
class __TwigTemplate_4bf2e2dae3dea4d212db19b5aaff86a7078e97b40181596637e3ae912b104785 extends Twig_Template
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
        $__internal_43dd057a4033dac097c984e500e2bf997591058d5c7406a7803ba5248396f43a = $this->env->getExtension("native_profiler");
        $__internal_43dd057a4033dac097c984e500e2bf997591058d5c7406a7803ba5248396f43a->enter($__internal_43dd057a4033dac097c984e500e2bf997591058d5c7406a7803ba5248396f43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CSV:import_csv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43dd057a4033dac097c984e500e2bf997591058d5c7406a7803ba5248396f43a->leave($__internal_43dd057a4033dac097c984e500e2bf997591058d5c7406a7803ba5248396f43a_prof);

    }

    // line 3
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c777c86b7936b352c5651ba48abafa01a79a8e2507231da502e11e5d342a4968 = $this->env->getExtension("native_profiler");
        $__internal_c777c86b7936b352c5651ba48abafa01a79a8e2507231da502e11e5d342a4968->enter($__internal_c777c86b7936b352c5651ba48abafa01a79a8e2507231da502e11e5d342a4968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 4
        echo "    <ol class=\"nav navbar-top-links breadcrumb\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">Dashboard</a></li>
        <li class=\"active\">Import CSV</li>
    </ol>
";
        
        $__internal_c777c86b7936b352c5651ba48abafa01a79a8e2507231da502e11e5d342a4968->leave($__internal_c777c86b7936b352c5651ba48abafa01a79a8e2507231da502e11e5d342a4968_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_249f52a1b752735840c81ad63ba9b937494d793ce39117f6a29c888e2cd12ea5 = $this->env->getExtension("native_profiler");
        $__internal_249f52a1b752735840c81ad63ba9b937494d793ce39117f6a29c888e2cd12ea5->enter($__internal_249f52a1b752735840c81ad63ba9b937494d793ce39117f6a29c888e2cd12ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "zeshar_crm_core.block.importcsv")));
        echo "
";
        
        $__internal_249f52a1b752735840c81ad63ba9b937494d793ce39117f6a29c888e2cd12ea5->leave($__internal_249f52a1b752735840c81ad63ba9b937494d793ce39117f6a29c888e2cd12ea5_prof);

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
        return array (  61 => 11,  55 => 10,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

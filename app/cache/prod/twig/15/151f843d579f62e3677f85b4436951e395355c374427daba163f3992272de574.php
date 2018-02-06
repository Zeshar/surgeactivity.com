<?php

/* ZesharCRMCoreBundle:CRUD:billing_info_show.html.twig */
class __TwigTemplate_3f04f2d08f64e6fcb2426a97a0f12e511667f2de1cff776c3c570133105d2aed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:show.html.twig", "ZesharCRMCoreBundle:CRUD:billing_info_show.html.twig", 1);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'sonata_whole_content_wrapper_classes' => array($this, 'block_sonata_whole_content_wrapper_classes'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_actions($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_tab_menu($context, array $blocks = array())
    {
    }

    // line 9
    public function block_sonata_whole_content_wrapper_classes($context, array $blocks = array())
    {
        echo "content show-page clear-fix";
    }

    // line 11
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
    }

    // line 13
    public function block_show($context, array $blocks = array())
    {
        // line 14
        echo "
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/css/billing-page-styles.css"), "html", null, true);
        echo "\"  />
    ";
        // line 16
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_show_block_actions_js.html.twig");
        echo "

    ";
        // line 18
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_info_tab.html.twig");
        echo "
    ";
        // line 20
        echo "    ";
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/company_info_tab.html.twig");
        echo "
    ";
        // line 21
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/personal_info_tab.html.twig");
        echo "
    ";
        // line 22
        if ((($this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN") && ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "subscriptionStatus", array()) == 0)) &&  !$this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "disabled", array()))) {
            // line 23
            echo "        <div class=\"accept-payment show-display-per-block-actions\" style=\"margin-bottom: 15px;\">
            <button class=\"btn-save-block btn btn-green\">Accept Payment</button>
        </div>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ((($this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN") && ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "subscriptionStatus", array()) == 1)) &&  !$this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "creator", array()), "disabled", array()))) {
            // line 29
            echo "        <div class=\"disable-account show-display-per-block-actions\" style=\"margin-bottom: 15px;\">
            <button class=\"btn-delete-block btn btn-red\">Disable Account</button>
        </div>
    ";
        }
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:billing_info_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  97 => 29,  95 => 28,  92 => 27,  86 => 23,  84 => 22,  80 => 21,  75 => 20,  71 => 18,  66 => 16,  62 => 15,  59 => 14,  56 => 13,  51 => 11,  45 => 9,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:show.html.twig' %}*/
/* */
/* {% block actions %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{% endblock %}*/
/* */
/* {% block sonata_whole_content_wrapper_classes %}content show-page clear-fix{% endblock %}*/
/* */
/* {% block sonata_page_content_nav %}{% endblock %}*/
/* */
/* {% block show %}*/
/* */
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmcore/css/billing-page-styles.css') }}"  />*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_show_block_actions_js.html.twig') }}*/
/* */
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_info_tab.html.twig') }}*/
/*     {#{{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/payment_history_tab.html.twig') }}#}*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/company_info_tab.html.twig') }}*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/personal_info_tab.html.twig') }}*/
/*     {% if is_granted('ROLE_ULTRA_ADMIN') and object.subscriptionStatus == 0 and not (object.creator.disabled) %}*/
/*         <div class="accept-payment show-display-per-block-actions" style="margin-bottom: 15px;">*/
/*             <button class="btn-save-block btn btn-green">Accept Payment</button>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if is_granted('ROLE_ULTRA_ADMIN') and object.subscriptionStatus == 1  and not (object.creator.disabled)%}*/
/*         <div class="disable-account show-display-per-block-actions" style="margin-bottom: 15px;">*/
/*             <button class="btn-delete-block btn btn-red">Disable Account</button>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */

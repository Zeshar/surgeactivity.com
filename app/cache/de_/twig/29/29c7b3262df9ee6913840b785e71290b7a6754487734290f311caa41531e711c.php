<?php

/* ZesharCRMCoreBundle:CRUD:billing_info_show.html.twig */
class __TwigTemplate_25d99127e0db0affb9fcf44afacb7a8f8958caefb7d24d8503e3525a5964e577 extends Twig_Template
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
        $__internal_7776aff1fee197a4f4b96d6079ef755efe70b920d87d7fc7f4881d5480cfc108 = $this->env->getExtension("native_profiler");
        $__internal_7776aff1fee197a4f4b96d6079ef755efe70b920d87d7fc7f4881d5480cfc108->enter($__internal_7776aff1fee197a4f4b96d6079ef755efe70b920d87d7fc7f4881d5480cfc108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:billing_info_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7776aff1fee197a4f4b96d6079ef755efe70b920d87d7fc7f4881d5480cfc108->leave($__internal_7776aff1fee197a4f4b96d6079ef755efe70b920d87d7fc7f4881d5480cfc108_prof);

    }

    // line 3
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1afc72766be671bb2a3464b6e58245a54efd90e554a8bcba90775cc5ffe1930b = $this->env->getExtension("native_profiler");
        $__internal_1afc72766be671bb2a3464b6e58245a54efd90e554a8bcba90775cc5ffe1930b->enter($__internal_1afc72766be671bb2a3464b6e58245a54efd90e554a8bcba90775cc5ffe1930b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 4
        echo "
";
        
        $__internal_1afc72766be671bb2a3464b6e58245a54efd90e554a8bcba90775cc5ffe1930b->leave($__internal_1afc72766be671bb2a3464b6e58245a54efd90e554a8bcba90775cc5ffe1930b_prof);

    }

    // line 7
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e3956e16d239c5ad2153c22d72a49411fa34b1ab68c90d8661b0d5e05e66c0c1 = $this->env->getExtension("native_profiler");
        $__internal_e3956e16d239c5ad2153c22d72a49411fa34b1ab68c90d8661b0d5e05e66c0c1->enter($__internal_e3956e16d239c5ad2153c22d72a49411fa34b1ab68c90d8661b0d5e05e66c0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        
        $__internal_e3956e16d239c5ad2153c22d72a49411fa34b1ab68c90d8661b0d5e05e66c0c1->leave($__internal_e3956e16d239c5ad2153c22d72a49411fa34b1ab68c90d8661b0d5e05e66c0c1_prof);

    }

    // line 9
    public function block_sonata_whole_content_wrapper_classes($context, array $blocks = array())
    {
        $__internal_20d5e70ea330ca32837723b32272fc43f6f9761f3f98477f3eacdb7cfcfb92cf = $this->env->getExtension("native_profiler");
        $__internal_20d5e70ea330ca32837723b32272fc43f6f9761f3f98477f3eacdb7cfcfb92cf->enter($__internal_20d5e70ea330ca32837723b32272fc43f6f9761f3f98477f3eacdb7cfcfb92cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_whole_content_wrapper_classes"));

        echo "content show-page clear-fix";
        
        $__internal_20d5e70ea330ca32837723b32272fc43f6f9761f3f98477f3eacdb7cfcfb92cf->leave($__internal_20d5e70ea330ca32837723b32272fc43f6f9761f3f98477f3eacdb7cfcfb92cf_prof);

    }

    // line 11
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_205812a76c65dc76130c0b6323ffc0f7f4dc122595a4a0228ed03a9c6330961c = $this->env->getExtension("native_profiler");
        $__internal_205812a76c65dc76130c0b6323ffc0f7f4dc122595a4a0228ed03a9c6330961c->enter($__internal_205812a76c65dc76130c0b6323ffc0f7f4dc122595a4a0228ed03a9c6330961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        
        $__internal_205812a76c65dc76130c0b6323ffc0f7f4dc122595a4a0228ed03a9c6330961c->leave($__internal_205812a76c65dc76130c0b6323ffc0f7f4dc122595a4a0228ed03a9c6330961c_prof);

    }

    // line 13
    public function block_show($context, array $blocks = array())
    {
        $__internal_76090ae82246c233fd048225c5924d892821b81f40195befad89a6e6fce99065 = $this->env->getExtension("native_profiler");
        $__internal_76090ae82246c233fd048225c5924d892821b81f40195befad89a6e6fce99065->enter($__internal_76090ae82246c233fd048225c5924d892821b81f40195befad89a6e6fce99065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

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
        if ((($this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN") && ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "subscriptionStatus", array()) == 0)) &&  !$this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "disabled", array()))) {
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
        if ((($this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN") && ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "subscriptionStatus", array()) == 1)) &&  !$this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "disabled", array()))) {
            // line 29
            echo "        <div class=\"disable-account show-display-per-block-actions\" style=\"margin-bottom: 15px;\">
            <button class=\"btn-delete-block btn btn-red\">Disable Account</button>
        </div>
    ";
        }
        // line 33
        echo "
";
        
        $__internal_76090ae82246c233fd048225c5924d892821b81f40195befad89a6e6fce99065->leave($__internal_76090ae82246c233fd048225c5924d892821b81f40195befad89a6e6fce99065_prof);

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
        return array (  136 => 33,  130 => 29,  128 => 28,  125 => 27,  119 => 23,  117 => 22,  113 => 21,  108 => 20,  104 => 18,  99 => 16,  95 => 15,  92 => 14,  86 => 13,  75 => 11,  63 => 9,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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

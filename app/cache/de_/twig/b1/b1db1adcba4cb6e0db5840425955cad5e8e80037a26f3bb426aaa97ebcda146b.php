<?php

/* ZesharCRMCoreBundle:Default:profile-info.html.twig */
class __TwigTemplate_7b962746fefb355445b065abe4dad2b1ed12453444fbaa22063e191e05d58829 extends Twig_Template
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
        $__internal_61280ec395c0e8accf202a49fae490aa9183bee4f981f5c582705881745b5820 = $this->env->getExtension("native_profiler");
        $__internal_61280ec395c0e8accf202a49fae490aa9183bee4f981f5c582705881745b5820->enter($__internal_61280ec395c0e8accf202a49fae490aa9183bee4f981f5c582705881745b5820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Default:profile-info.html.twig"));

        // line 1
        echo "<a class=\"drop-link acc-menu\" href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pict/menu-acc.png"), "html", null, true);
        echo "\" alt=\"\"></a>
<div class=\"drop-menu\">
    <ul>
        <li><a class=\"disable\" href=\"javascript:void(0);\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "baseUrl", array()), "html", null, true);
        echo "/admin/logout\">Logout</a></li>
    </ul>
</div>
";
        
        $__internal_61280ec395c0e8accf202a49fae490aa9183bee4f981f5c582705881745b5820->leave($__internal_61280ec395c0e8accf202a49fae490aa9183bee4f981f5c582705881745b5820_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Default:profile-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 4,  22 => 1,);
    }
}
/* <a class="drop-link acc-menu" href="#"><img src="{{ asset('pict/menu-acc.png') }}" alt=""></a>*/
/* <div class="drop-menu">*/
/*     <ul>*/
/*         <li><a class="disable" href="javascript:void(0);">{{ username }}</a></li>*/
/*         <li><a href="{{ app.request.baseUrl }}/admin/logout">Logout</a></li>*/
/*     </ul>*/
/* </div>*/
/* */

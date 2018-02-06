<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_faec50c177880e47dca4efca4af001cded024e3c203fe8eee54ae1f6f335ec69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_555d20f7dda855af8363512cd2733e379c9f38f96239534d2724c6608ac5efcd = $this->env->getExtension("native_profiler");
        $__internal_555d20f7dda855af8363512cd2733e379c9f38f96239534d2724c6608ac5efcd->enter($__internal_555d20f7dda855af8363512cd2733e379c9f38f96239534d2724c6608ac5efcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_555d20f7dda855af8363512cd2733e379c9f38f96239534d2724c6608ac5efcd->leave($__internal_555d20f7dda855af8363512cd2733e379c9f38f96239534d2724c6608ac5efcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1bcdc82b5fd0fc7e54afdb5c17335bf5765f7b07ae3f78c7612045b38b8fd90 = $this->env->getExtension("native_profiler");
        $__internal_b1bcdc82b5fd0fc7e54afdb5c17335bf5765f7b07ae3f78c7612045b38b8fd90->enter($__internal_b1bcdc82b5fd0fc7e54afdb5c17335bf5765f7b07ae3f78c7612045b38b8fd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b1bcdc82b5fd0fc7e54afdb5c17335bf5765f7b07ae3f78c7612045b38b8fd90->leave($__internal_b1bcdc82b5fd0fc7e54afdb5c17335bf5765f7b07ae3f78c7612045b38b8fd90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_add5538a1a9f62b2d77d379f75dc73e451c72c38e77528587b2d338c8f9656d6 = $this->env->getExtension("native_profiler");
        $__internal_add5538a1a9f62b2d77d379f75dc73e451c72c38e77528587b2d338c8f9656d6->enter($__internal_add5538a1a9f62b2d77d379f75dc73e451c72c38e77528587b2d338c8f9656d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_add5538a1a9f62b2d77d379f75dc73e451c72c38e77528587b2d338c8f9656d6->leave($__internal_add5538a1a9f62b2d77d379f75dc73e451c72c38e77528587b2d338c8f9656d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c3e5eb9863b456b5ecb157f96b77185a1d9c454c903ba498e46faafed494a73 = $this->env->getExtension("native_profiler");
        $__internal_8c3e5eb9863b456b5ecb157f96b77185a1d9c454c903ba498e46faafed494a73->enter($__internal_8c3e5eb9863b456b5ecb157f96b77185a1d9c454c903ba498e46faafed494a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8c3e5eb9863b456b5ecb157f96b77185a1d9c454c903ba498e46faafed494a73->leave($__internal_8c3e5eb9863b456b5ecb157f96b77185a1d9c454c903ba498e46faafed494a73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

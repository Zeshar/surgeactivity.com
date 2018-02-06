<?php

/* ZesharCRMCoreBundle:Reports:audit_report.html.twig */
class __TwigTemplate_a2ab48f5a92600be93467cbfb3b465084b7678cc664e91c387b6453f93724391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle::sonata_layout.html.twig", "ZesharCRMCoreBundle:Reports:audit_report.html.twig", 1);
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
        $__internal_be4ff1dccbd150ed2015ab84f88ea60af430ccec9eff438c7ccf4a3649eded4f = $this->env->getExtension("native_profiler");
        $__internal_be4ff1dccbd150ed2015ab84f88ea60af430ccec9eff438c7ccf4a3649eded4f->enter($__internal_be4ff1dccbd150ed2015ab84f88ea60af430ccec9eff438c7ccf4a3649eded4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Reports:audit_report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4ff1dccbd150ed2015ab84f88ea60af430ccec9eff438c7ccf4a3649eded4f->leave($__internal_be4ff1dccbd150ed2015ab84f88ea60af430ccec9eff438c7ccf4a3649eded4f_prof);

    }

    // line 3
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_32dc6f06e2f2611701b652fc7f54abd7dcad1440d732f287516d5bcc2e700ea1 = $this->env->getExtension("native_profiler");
        $__internal_32dc6f06e2f2611701b652fc7f54abd7dcad1440d732f287516d5bcc2e700ea1->enter($__internal_32dc6f06e2f2611701b652fc7f54abd7dcad1440d732f287516d5bcc2e700ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 4
        echo "    <ol class=\"nav navbar-top-links breadcrumb\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">Dashboard</a></li>
        <li class=\"active\">Audit Report</li>
    </ol>
";
        
        $__internal_32dc6f06e2f2611701b652fc7f54abd7dcad1440d732f287516d5bcc2e700ea1->leave($__internal_32dc6f06e2f2611701b652fc7f54abd7dcad1440d732f287516d5bcc2e700ea1_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b18234a66e253ed2af8409550a02fead192d742522572df9a26c032198bc061 = $this->env->getExtension("native_profiler");
        $__internal_4b18234a66e253ed2af8409550a02fead192d742522572df9a26c032198bc061->enter($__internal_4b18234a66e253ed2af8409550a02fead192d742522572df9a26c032198bc061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
    <label class=\"report-title\">Sales Performance</label>

    <div class=\"filter-wrap clearfix\">
        <div class=\"left-column\">
            <div class=\"\">
                <div class=\"pull-right filter-controls\">
                    <form method=\"get\" class=\"form-inline report-filter-form\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        echo "\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"date-range-from\" class=\"form-control datepicker\" id=\"date-range-from\" autocomplete=\"off\" placeholder=\"From\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["rangeFrom"]) ? $context["rangeFrom"] : $this->getContext($context, "rangeFrom")), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"date-range-to\" class=\"form-control datepicker\" id=\"date-range-to\" autocomplete=\"off\" placeholder=\"To\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["rangeTo"]) ? $context["rangeTo"] : $this->getContext($context, "rangeTo")), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-green btn-list-search\">Search</button>
                            <input type=\"button\" class=\"btn btn-white btn-list-reset\" value=\"Reset Filters\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"report-table-wrap table-wrap ui-sortable\">
        <div class=\"box box-primary\">
            <table class=\"report-table table-sonata-list table-striped table table-bordered\">
                <thead>
                    <tr>
                        <th rowspan=\"2\">User</th>
                        <th rowspan=\"2\">Total Leads</th>
                        <th rowspan=\"2\">Opportunities</th>
                        <th rowspan=\"2\">Pending Opportunities</th>
                        <th rowspan=\"2\">Lost Opportunities</th>
                        <th colspan=\"4\">Lead By Status</th>
                        <th colspan=\"3\">Leads – by source</th>
                        <th rowspan=\"2\">Quoted Leads</th>
                        <th rowspan=\"2\">Sales</th>
                    </tr>
                    <tr>
                        <th>User</th>
                        <th>User</th>
                        <th>User</th>
                        <th>User</th>
                        <th>Warm</th>
                        <th>Hot</th>
                        <th>Cold</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
";
        
        $__internal_4b18234a66e253ed2af8409550a02fead192d742522572df9a26c032198bc061->leave($__internal_4b18234a66e253ed2af8409550a02fead192d742522572df9a26c032198bc061_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Reports:audit_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  75 => 20,  70 => 18,  61 => 11,  55 => 10,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'ZesharCRMCoreBundle::sonata_layout.html.twig' %}*/
/* */
/* {% block sonata_breadcrumb %}*/
/*     <ol class="nav navbar-top-links breadcrumb">*/
/*         <li><a href="{{ url('sonata_admin_dashboard') }}">Dashboard</a></li>*/
/*         <li class="active">Audit Report</li>*/
/*     </ol>*/
/* {% endblock sonata_breadcrumb %}*/
/* */
/* {% block content %}*/
/* */
/*     <label class="report-title">Sales Performance</label>*/
/* */
/*     <div class="filter-wrap clearfix">*/
/*         <div class="left-column">*/
/*             <div class="">*/
/*                 <div class="pull-right filter-controls">*/
/*                     <form method="get" class="form-inline report-filter-form" action="{{ url(app.request.attributes.get('_route')) }}">*/
/*                         <div class="form-group">*/
/*                             <input type="text" name="date-range-from" class="form-control datepicker" id="date-range-from" autocomplete="off" placeholder="From" value="{{ rangeFrom }}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="text" name="date-range-to" class="form-control datepicker" id="date-range-to" autocomplete="off" placeholder="To" value="{{ rangeTo }}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <button type="submit" class="btn btn-green btn-list-search">Search</button>*/
/*                             <input type="button" class="btn btn-white btn-list-reset" value="Reset Filters">*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="report-table-wrap table-wrap ui-sortable">*/
/*         <div class="box box-primary">*/
/*             <table class="report-table table-sonata-list table-striped table table-bordered">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th rowspan="2">User</th>*/
/*                         <th rowspan="2">Total Leads</th>*/
/*                         <th rowspan="2">Opportunities</th>*/
/*                         <th rowspan="2">Pending Opportunities</th>*/
/*                         <th rowspan="2">Lost Opportunities</th>*/
/*                         <th colspan="4">Lead By Status</th>*/
/*                         <th colspan="3">Leads – by source</th>*/
/*                         <th rowspan="2">Quoted Leads</th>*/
/*                         <th rowspan="2">Sales</th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>User</th>*/
/*                         <th>User</th>*/
/*                         <th>User</th>*/
/*                         <th>User</th>*/
/*                         <th>Warm</th>*/
/*                         <th>Hot</th>*/
/*                         <th>Cold</th>*/
/* */
/*                     </tr>*/
/*                 </thead>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

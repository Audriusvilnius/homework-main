<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _partials/article-card.html.twig */
class __TwigTemplate_a302f1c23e9be3d87fca376719528cda extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/article-card.html.twig"));

        // line 1
        echo "<div class=\"card shadow-sm\">
\t<a class=\"text-decoration-none\" style=\"color:black;\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "image", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"card-img-top\">
\t\t<div class=\"card-body \">
\t\t\t<h5 class=\"card-title \">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h5>
\t\t</a>


\t\t<p class=\"card-text \">
\t\t\t";
        // line 10
        $context["cutoff"] = 80;
        // line 11
        echo "\t\t\t";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "text", [], "any", false, false, false, 11)) > (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 11, $this->source); })()))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "text", [], "any", false, false, false, 11), 0, (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 11, $this->source); })())) . "...")) : (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "text", [], "any", false, false, false, 11))), "html", null, true);
        echo "
\t\t</p>

\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"btn-group\">
\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">View</a>
\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">Delete</a>
\t\t\t</div>

\t\t\t<small class=\"text-muted\">
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "mins", [], "any", false, false, false, 22), "html", null, true);
        echo "
\t\t\t\tmins
\t\t\t</small>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/article-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  79 => 18,  75 => 17,  71 => 16,  62 => 11,  60 => 10,  52 => 5,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card shadow-sm\">
\t<a class=\"text-decoration-none\" style=\"color:black;\" href=\"{{path('article_view', {id: article.id})}}\">
\t\t<img src=\"{{ article.image }}\" class=\"card-img-top\">
\t\t<div class=\"card-body \">
\t\t\t<h5 class=\"card-title \">{{ article.title }}</h5>
\t\t</a>


\t\t<p class=\"card-text \">
\t\t\t{% set cutoff = 80 %}
\t\t\t{{ article.text|length > cutoff ? article.text|slice(0, cutoff) ~ '...' : article.text  }}
\t\t</p>

\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"btn-group\">
\t\t\t\t<a href=\"{{ path('article_view', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">View</a>
\t\t\t\t<a href=\"{{ path('article_edit', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
\t\t\t\t<a href=\"{{ path('article_delete', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Delete</a>
\t\t\t</div>

\t\t\t<small class=\"text-muted\">
\t\t\t\t{{ article.mins }}
\t\t\t\tmins
\t\t\t</small>
\t\t</div>
\t</div>
</div>
", "_partials/article-card.html.twig", "/code/templates/_partials/article-card.html.twig");
    }
}

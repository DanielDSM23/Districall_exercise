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

/* index/index.html.twig */
class __TwigTemplate_f27d7161da59c92aad1e312d3ec97e17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  ";
        // line 7
        echo "
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["flashType"] => $context["flashMessages"]) {
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 10
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["flashType"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
        ";
                // line 11
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['flashType'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 17, $this->source); })())) == 0)) {
            // line 18
            echo "    <h1 class=\"text-center mt-5\">Pas de post pour l'instant</h1>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 21, $this->source); })())) > 0)) {
            // line 22
            echo "    <div class=\"container mt-5\">
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 24
                echo "        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h2>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</h2>
            <p class=\"text-muted\">Publié le ";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 27), "j F Y à H:m:s"), "html", null, true);
                echo "</p>
          </div>
          <div class=\"card-body\">
            ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "              <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 31))), "html", null, true);
                    echo "\" class=\"img-fluid mb-3\" alt=\"Image de la publication\">
            ";
                }
                // line 33
                echo "            <p class=\"card-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 33), "html", null, true);
                echo "</p>
            <div class=\"card-text\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 34);
                echo "</div>
            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rate", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Noter ce poste</a>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </div>
  ";
        }
        // line 41
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  189 => 41,  185 => 39,  175 => 35,  171 => 34,  166 => 33,  160 => 31,  158 => 30,  152 => 27,  148 => 26,  144 => 24,  140 => 23,  137 => 22,  135 => 21,  132 => 20,  128 => 18,  126 => 17,  123 => 16,  117 => 15,  107 => 11,  102 => 10,  97 => 9,  93 => 8,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog{% endblock %}

{% block body %}
  {#<p>is logged: {{ is_granted('ROLE_USER') }} </p>#}

  {% for flashType, flashMessages in app.flashes %}
    {% for flashMessage in flashMessages %}
      <div class=\"alert alert-{{ flashType }} alert-dismissible fade show\" role=\"alert\">
        {{ flashMessage }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
      </div>
    {% endfor %}
  {% endfor %}

  {% if posts|length == 0 %}
    <h1 class=\"text-center mt-5\">Pas de post pour l'instant</h1>
  {% endif %}

  {% if posts|length > 0 %}
    <div class=\"container mt-5\">
      {% for post in posts %}
        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h2>{{ post.name }}</h2>
            <p class=\"text-muted\">Publié le {{ post.createdAt|date(\"j F Y à H:m:s\") }}</p>
          </div>
          <div class=\"card-body\">
            {% if post.image %}
              <img src=\"{{ asset('uploads/images/' ~ post.image) }}\" class=\"img-fluid mb-3\" alt=\"Image de la publication\">
            {% endif %}
            <p class=\"card-text\">{{ post.description }}</p>
            <div class=\"card-text\">{{ post.content|raw }}</div>
            <a href=\"{{ path(\"app_rate\", {id : post.id}) }}\" class=\"btn btn-primary\">Noter ce poste</a>
          </div>
        </div>
      {% endfor %}
    </div>
  {% endif %}

{% endblock %}
", "index/index.html.twig", "/Users/daniel/Documents/GitHub/districall_exercise/templates/index/index.html.twig");
    }
}
